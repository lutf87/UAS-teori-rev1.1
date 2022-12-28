@extends('admin.master')

@section('title','Admin | Tambah Kategori')
@section('content')
    <div class="row">
        <div class="col col-lg-6 col-md-6">
            <div class="card border-0 shadow rounded">
                <div class="card-header bg-white">
                    <h4 class="card-title"><strong>Tambah Kategori</strong></h4>
                    <div class="card-tools">
                        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-danger warna">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">

                            <!-- error message untuk title -->
                            @error('foto')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kode</label>
                            <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode"
                                value="{{ old('kode') }}" placeholder="Masukkan Kode Kategori">

                            <!-- error message untuk title -->
                            @error('kode')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                value="{{ old('nama') }}" placeholder="Masukkan Nama Kategori">

                            <!-- error message untuk title -->
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
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
@endsection
