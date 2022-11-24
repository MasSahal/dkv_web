@extends('admin.template.index')
@section('heading', 'Tambah Data Menu')

@section('content')
    <section class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            <h4>Oops!</h4>
                            <ul>
                                @foreach ($errors->all() as $r)
                                    <li>{{ $r }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">

                        <a href="{{ url('https://icons.getbootstrap.com') }}" target="_blank" class="btn btn-info">Lihat
                            Bootstrap Icon</a>
                        <a href="{{ url('https://remixicon.com') }}" target="_blank" class="btn btn-info">Lihat Remix
                            Icon</a>
                        <a href="{{ url('https://fontawesome.com/v5/search?o=r&m=free') }}" target="_blank"
                            class="btn btn-info">Lihat Fontawesome Icon</a>
                        <hr>
                        @csrf
                        <div class="form-group">
                            <label for="nama_menu">Nama Menu</label>
                            <input type="text" name="nama_menu" id="nama_menu" class="form-control"
                                value="{{ old('nama_menu') }}">
                        </div>
                        <div class="form-group">
                            <label for="icon_menu">Icon Menu</label>
                            <input type="text" name="icon_menu" id="icon_menu" class="form-control"
                                value="{{ old('icon_menu') }}">
                            <small>Masukan hanya class nya, contoh <span class="text-danger">fa fa-home</span></small>
                        </div>
                        <div class="form-group">
                            <label for="urutan_menu">Urutan Menu</label>
                            <input type="number" min="1" name="urutan_menu" id="urutan_menu" class="form-control"
                                value="{{ old('urutan_menu') }}">

                        </div>

                        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
