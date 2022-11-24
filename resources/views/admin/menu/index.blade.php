@extends('admin.template.index')
@section('heading', 'Data Menu')

@section('css')
    <link href="{{ asset('frontend') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
@endsection


@section('content')
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <p class="text-muted m-b-30 font-14">This is an experimental awesome solution for responsive tables with
                        complex data.</p>

                    <a href="{{ route('menu.create') }}" class="btn btn-primary" id="btn-tambah">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Tambah
                    </a>
                    <button type="button" class="btn btn-outline-info" id="btn-refresh">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        Refresh
                    </button>
                    <hr>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-light-success color-success  alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive b-0">
                        <table id="menu" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Icon</th>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Urutan</th>
                                    <th style="min-width: 100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>
                                            <i class="{{ $r->icon_menu }}"></i> - {{ $r->icon_menu }}
                                        </td>
                                        <td>{{ $r->nama_menu }}</td>
                                        <td><a href="{{ $r->slug_menu }}" class="text_link">/{{ $r->slug_menu }}</a>
                                        </td>
                                        <td>{{ $r->urutan_menu }}</td>
                                        <td>
                                            <form action="{{ route('menu.destroy', $r->id_menu) }}" method="POST">
                                                <a name="" id="" class="btn btn-sm btn-warning"
                                                    href="{{ route('menu.edit', $r->id_menu) }}" role="button">
                                                    Edit
                                                </a>
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="javascript: return confirm('Apakah anda ingin menghapus data {{ $r->nama_menu }} ? ')"
                                                    class="btn btn-sm btn-danger" href="#" role="button">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection

{{--
@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        var data;
        $(() => {
            let dataTable = new simpleDatatables.DataTable(table1);
            data = $('#menu').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('menu.get') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'icon_menu',
                        name: 'icon_menu'
                    },
                    {
                        data: 'nama_menu',
                        name: 'nama_menu'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

            $("#btn-refresh").on("click", () => {
                data.ajax.reload(null, false);
            })
        });


        $("#btn-tambah").on('click', () => {
            $.ajax({
                url: "{{ route('menu.create') }}",
                type: 'GET',
                dataType: 'html',
                success: (response) => {
                    $('.viewdata').html(response);
                    $('#modaltambah').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#modaltambah').modal('show');
                },
                error: (xhr, ajaxOptions, thrownerror) => {

                    Swal.fire({
                        title: "Maaf gagal load data!",
                        html: `Silahkan Cek kembali Kode Error: <strong>${(xhr.status + "\n")}</strong> `,
                        icon: "error",
                        showConfirmButton: false,
                        timer: 3100
                    });
                }
            });
        });
    </script>
    <script>
        function delData(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                confirmButtonText: 'Yes, delete it!'
            }).then(function(result) {
                if (result.value == true) {
                    $.ajax({
                        url: "{{ url('menu/delete') }}",
                        type: 'POST',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'html',
                        success: (response) => {
                            console.log(response);
                            swal(
                                'Deleted!',
                                'Your file id=' + id + ' has been deleted.',
                                'success'
                            );
                            // data.ajax.reload();
                        },
                        error: (xhr, ajaxOptions, thrownerror) => {
                            swal(
                                'Oops!',
                                'Error : ' + xhr + ' - ' + thrownerror,
                                'error'
                            );
                        }
                    });

                }


            })
        }
    </script>
@endsection --}}
