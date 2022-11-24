@extends('admin.template.index')
@section('heading', 'Edit Data Menu')

@section('content')
    <section class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            <ul>
                                @foreach ($errors->all() as $r)
                                    <li>{{ $r }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('menu.update', $menu->id_menu) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <a href="{{ url('https://icons.getbootstrap.com')}}" target="_blank" class="btn btn-info">Lihat Bootstrap Icon</a>
                        <a href="{{ url('https://remixicon.com')}}" target="_blank" class="btn btn-info">Lihat Remix Icon</a>
                        <a href="{{ url('https://fontawesome.com/v5/search?o=r&m=free')}}" target="_blank" class="btn btn-info">Lihat Fontawesome Icon</a>
                        <hr>
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                            <input type="text" name="nama_menu" id="" class="form-control"
                                value="{{ $menu->nama_menu }}">
                        </div>
                        <div class="form-group">
                            <label for="">Icon Menu</label>
                            <input type="text" name="icon_menu" id="" class="form-control"
                                value="{{ $menu->icon_menu }}">
                        </div>
                        <div class="form-group">
                            <label for="">Urutan Menu</label>
                            <input type="text" name="urutan_menu" id="" class="form-control"
                                value="{{ $menu->urutan_menu }}">
                        </div>

                        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
