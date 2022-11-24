@extends('admin.template.index')
@section('heading', 'Tambah Data SubMenu')

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

                    <form action="{{ route('submenu.store') }}" method="POST" enctype="multipart/form-data">

                        <a href="{{ url('https://icons.getbootstrap.com') }}" target="_blank" class="btn btn-info">Lihat
                            Bootstrap Icon</a>
                        <a href="{{ url('https://remixicon.com') }}" target="_blank" class="btn btn-info">Lihat Remix
                            Icon</a>
                        <a href="{{ url('https://fontawesome.com/v5/search?o=r&m=free') }}" target="_blank"
                            class="btn btn-info">Lihat Fontawesome Icon</a>
                        <hr>
                        @csrf
                        <div class="form-group">
                            <label for="menu">Pilih Menu</label>
                            <select class="form-control" name="menu" id="menu">
                                <option selected disabled>Pilih Menu</option>
                                @foreach ($menu as $m)
                                    <option value="{{ $m->id_menu }}">{{ $m->nama_menu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_submenu">Nama SubMenu</label>
                            <input type="text" name="nama_submenu" id="nama_submenu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="icon_submenu">Icon SubMenu</label>
                            <input type="text" name="icon_submenu" id="icon_submenu" class="form-control">
                            <small>Masukan hanya class nya, contoh <span class="text-danger">fa fa-home</span></small>
                        </div>
                        <div class="form-group">
                            <label for="urutan_submenu">Urutan SubMenu</label>
                            <input type="number" min="1" name="urutan_submenu" id="urutan_submenu"
                                class="form-control">
                        </div>

                        <a href="{{ route('submenu.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
