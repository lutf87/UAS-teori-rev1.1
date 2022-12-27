@extends('home.template')

@section('title','Kategori')
@section('content')
    <div class="container">
        <!-- kategori produk -->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Kategori Produk</h2>
            </div>
            <!-- kategori pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="#">
                        <img src="{{ asset('images/Fruits-Slider.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none">
                            <p class="card-text">Kategori Buah</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- kategori kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="#">
                        <img src="{{ asset('images/Meats-Slider.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none">
                            <p class="card-text">Kategori Daging</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- kategori ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="#">
                        <img src="{{ asset('images/Vegetables-Slider.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none">
                            <p class="card-text">Kategori Sayur</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end kategori produk -->
    </div>
@endsection
