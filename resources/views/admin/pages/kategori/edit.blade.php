@extends('admin.master')

@section('title', 'Admin | Edit Kategori')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-header bg-white">
                    <h4 class="card-title"><strong>Tambah Kategori</strong></h4>
                    <div class="card-tools">
                        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-danger warna">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control" name="foto">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="nama"
                                value="{{ old('nama', $kategori->nama) }}" placeholder="Masukkan Nama Kategori">

                            <!-- error message untuk title -->
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kode</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="kode"
                                value="{{ old('kode', $kategori->kode) }}" placeholder="Masukkan Kode Kategori">

                            <!-- error message untuk title -->
                            @error('kode')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
