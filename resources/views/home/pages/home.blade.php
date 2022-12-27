@extends('home.template')
@section('title', 'Home Page')
@section('content')

    <div class="container">
        <!-- carousel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner foto">
                <div class="carousel-item active">
                    <img src="{{ asset('images/Fruits-Slider.jpg') }}" class="d-block w-100" alt="Fruits Images">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/Meats-Slider.jpg') }}" class="d-block w-100" alt="Meats Images">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/Vegetables-Slider.jpg') }}" class="d-block w-100" alt="Vegetables Images">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- end carousel -->

        <!-- kategori produk -->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Kategori Produk</h2>
            </div>
            <!-- kategori pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="#">
                        <img src="{{ asset('images/Fruits-Slider.jpg') }}" alt="Kategori Buah" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none">
                            <p class="card-text">Kategori Pertama</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- kategori kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="#">
                        <img src="{{ asset('images/Meats-Slider.jpg') }}" alt="Kategori Daging" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none">
                            <p class="card-text">Kategori Kedua</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- kategori ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="#">
                        <img src="{{ asset('images/Vegetables-Slider.jpg') }}" alt="Kategori Sayur" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none">
                            <p class="card-text">Kategori Ketiga</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end kategori produk -->

        <!-- tentang toko -->
        <hr>
        <div class="row mt-4">
            <div class="col">
                <h5 class="text-center">Toko Online Menggunakan Laravel</h5>
                <p>
                    Toko adalah demo membangun toko online menggunakan laravel framework. Di dalam demo ini terdapat user
                    bisa menginput data kategori, produk dan transaksi.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi nulla
                    maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos quod ad non veritatis
                    assumenda.
                </p>
                <p>
                    Toko adalah demo membangun toko online menggunakan laravel framework. Di dalam demo ini terdapat user
                    bisa menginput data kategori, produk dan transaksi.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi nulla
                    maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos quod ad non veritatis
                    assumenda.
                </p>
                <p class="text-center">
                    <a href="#" class="btn btn-outline-dark">
                        Baca Selengkapnya
                    </a>
                </p>
            </div>
        </div>
        <!-- end tentang toko -->
    </div>
@endsection
