@extends('admin.master')

@section('title', 'Admin | Produk')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                    <h4 class="card-title">Tambah Kategori</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-success">Tambah Kategori</a>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="keyword" id="keyword" class="form-control"
                                    placeholder="ketik keyword disini">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50px">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Kode Kategori</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Satuan</th>
                                <th style="width: 150px" scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/posts/produk/') . $data->foto }}" class="rounded"
                                            style="width: 200px">
                                    </td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->kode }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    <td>{{ $data->satuan }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#"
                                            method="POST">
                                            <a href="{{ route('kategori.edit', $data->id) }}"
                                                class="btn btn-sm btn-primary">Ubah</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Post belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $datas->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>

@endsection
