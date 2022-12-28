@extends('admin.master')

@section('title', 'Admin | Tambah Kategori')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-6 col-md-6">
                <div class="card border-0 shadow rounded">
                    <div class="card-header bg-white">
                        <h4 class="card-title"><strong>Tambah Kategori</strong></h4>
                        <div class="card-tools">
                            <a href="{{ route('produk.index') }}" class="btn btn-sm btn-danger warna">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning">{{ $error }}</div>
                            @endforeach
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-warning">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('gambar_produk') is-invalid @enderror"
                                    name="gambar_produk">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                                    name="nama_produk" value="{{ old('nama_produk') }}" placeholder="Masukkan Nama Produk">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kategori</label>
                                <select class="form-select @error('kategori_id') is-invalid @enderror"
                                    aria-label="Default select example" name="kategori_id">
                                    <option selected>Pilih Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item['id'] }}">{{ $item['nama_kategori'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kode</label>
                                <input type="text" class="form-control @error('kode_produk') is-invalid @enderror"
                                    name="kode_produk" value="{{ old('kode_produk') }}"
                                    placeholder="Masukkan Kode Kategori">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah</label>
                                <input type="number" class="form-control @error('jumlah_produk') is-invalid @enderror"
                                    name="jumlah_produk" value="{{ old('jumlah_produk') }}"
                                    placeholder="Masukkan Jumlah Produk">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Satuan</label>
                                <select class="form-select @error('satuan_produk') is-invalid @enderror"
                                    aria-label="Default select example" name="satuan_produk">
                                    <option selected>Pilih Satuan</option>
                                    <option value="Kg">Kilogram</option>
                                    <option value="Buah">Buah</option>
                                    <option value="Pcs">Pcs</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary warna">Simpan</button>
                            <button type="reset" class="btn btn-md btn-warning warna">Reset</button>
                            <style>
                                .warna {
                                    color: #ffffff;
                                }
                            </style>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
