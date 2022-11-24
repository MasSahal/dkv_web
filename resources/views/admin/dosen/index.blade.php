@extends('admin.template.index')
@section('heading', 'Data Dosen')

@section('content')
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <p class="text-muted m-b-30 font-14">This is an experimental awesome solution for responsive tables with
                        complex data.</p>

                    <a href="{{ route('dosen.create') }}" class="btn btn-primary" id="btn-tambah">
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
                        <table id="dosen" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIDN</th>
                                    <th>Nama</th>
                                    <th style="min-width: 100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $i => $r)
                                    <tr>
                                        <td>{{ $i += 1 }}</td>
                                        <td>
                                            <i class="{{ $r->icon_dosen }}"></i> - {{ $r->icon_dosen }}
                                        </td>
                                        <td>{{ $r->nama_dosen }}</td>
                                        <td>
                                            <form action="{{ route('dosen.destroy', $r->id_dosen) }}" method="POST">
                                                <a name="" id="" class="btn btn-sm btn-warning"
                                                    href="{{ route('dosen.edit', $r->id_dosen) }}" role="button">
                                                    Edit
                                                </a>
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="javascript: return confirm('Apakah anda ingin menghapus data {{ $r->nama_dosen }} ? ')"
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
            data = $('#dosen').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dosen.get') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'icon_dosen',
                        name: 'icon_dosen'
                    },
                    {
                        data: 'nama_dosen',
                        name: 'nama_dosen'
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
                url: "{{ route('dosen.create') }}",
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
                        url: "{{ url('dosen/delete') }}",
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
