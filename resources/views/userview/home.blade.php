@extends('userview.master.main')
@section('title','Home')
@section('content')
    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        @media (max-width: 575.98px) {
            .img-fluid {
                width: 8cm;
                max-width: none;
                height: auto;
            }
        }
        @media (max-width: 576px) {
            .card-wrapper {
                flex-wrap: wrap;
            }

            .card {
                width: 100%;
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
        <header class="masthead" style="background-image: url('/userview/assets/img/bg.png'); height: 90vh;background-repeat: no-repeat;background-position: center;background-size: cover;">
            <div class="container px-5">
                <div class="row gx-5 align-items-left">
                    <div class="col-lg-6">
                        <div class="mb-5 mb-lg-0 text-left text-lg-start text-white">
                            <h1 class="display-1 lh-1 mb-3 mt-5">Made for everyday’s Coffee Experience!</h1>
                        </div>
                        <p class="text-white">With Indonesia’s Original Beans</p>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </header>
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 order-lg-1 order-2">
                        <h2 class="display-4 lh-1 mb-4">Tentang Kami</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Mempersembahkan produk produk kopi berkualitas
                            premium aman dan halal. Kami memadukan inovasi pengolahan dengan proses yang halal sehingga
                            menghasilkan rasa kopi yang unik. Selain itu kami memiliki bisnis yang bergerak dari hulu ke
                            hilir, mulai dari kebun sampai ke kedai seduhan kopi shop.</p>
                        <button class="btn btn-primary px-4 py-2 mt-3" style="background-color: #3F2A20;">Read More
                            ></button>
                    </div>
                    <div class="col-sm-8 col-md-6 order-lg-2 order-1 text-center">
                        <div class="px-sm-0">
                            <img class="img-fluid rounded-circle" src="/userview/assets/img/about-image.png" alt="..." />
                        </div>
                    </div>
                </div>

                <!-- Goal Section -->
                <div
                    class="row gx-5 align-items-center justify-content-center justify-content-lg-between flex-row-reverse mt-5">
                    <div class="col-12 col-lg-5 order-lg-1 order-2">
                        <h2 class="display-4 lh-1 mb-4">Tujuan Kami</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Tujuan kami adalah mensejahterakan petani kopi
                            serta mengolah kopi menjadi tidak hanya produk yang bisa dinikmati tapi juga dapat membuat
                            lingkungan mendapat kebermanfaatan dari kopi itu sendiri berinovasi, kreatif dan memanfaatkan
                            potensi kopi untuk menciptakan lingkungan yang baik.</p>
                    </div>
                    <div class="col-sm-8 col-md-6 order-lg-2 order-1 text-center">
                        <div class="px-sm-0"><img class="img-fluid rounded-circle" src="/userview/assets/img/about-image2.png" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light">
            <h1 class="text-center mt-5">Event & Kegiatan</h1>
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-wrapper container-sm d-flex justify-content-around">
                            <div class="card mx-auto" style="width: 18rem; height: 13cm;">
                                <img src="/userview/assets/img/kopi/kopibubuk1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #3F2A20; font-size: 33px;">Kopi Bubuk</h5>
                                    <p class="card-text" style="color: #B3B3B3;">Produk-produk kopi lokal dengan berbagai
                                        varian, wongkene, robusta gadog hingga premium Sugara Coffee. Kopi </p>
                                    <p class="card-text" style="color: #B3B3B3;">Kedai Kampoeng Kopi Sugara</p>
                                </div>
                            </div>
                            <div class="card mx-auto" style="width: 18rem; height: 13cm;">
                                <img src="/userview/assets/img/kopi/kopibubuk2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #3F2A20; font-size: 33px;">Green Bean</h5>
                                    <p class="card-text" style="color: #B3B3B3;">Produk-produk kopi lokal dengan berbagai
                                        varian, wongkene, robusta gadog hingga premium Sugara Coffee. Kopi </p>
                                    <p class="card-text" style="color: #B3B3B3;">Kedai Kampoeng Kopi Sugara</p>
                                </div>
                            </div>
                            <div class="card mx-auto" style="width: 18rem; height: 13cm;">
                                <img src="/userview/assets/img/kopi/kopibubuk3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #3F2A20; font-size: 33px;">Roast Bean</h5>
                                    <p class="card-text" style="color: #B3B3B3;">Roast Bean robusta pilihan khas
                                        Karanggintung, arabika gayo, arabika kintamani bali dll.</p>
                                    <p class="card-text" style="color: #B3B3B3;">Kedai Kampoeng Kopi Sugara</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-wrapper container-sm d-flex justify-content-around">
                            <div class="card mx-auto" style="width: 18rem; height: 13cm;">
                                <img src="/userview/assets/img/kopi/kopibubuk4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #3F2A20; font-size: 33px;">Jasa Huller</h5>
                                    <p class="card-text" style="color: #B3B3B3;">Kami menyediakan jasa Huller biji kopi
                                    </p>
                                    <p class="card-text" style="color: #B3B3B3;">Kedai Kampoeng Kopi Sugara</p>
                                </div>
                            </div>
                            <div class="card mx-auto" style="width: 18rem; height: 13cm;">
                                <img src="/userview/assets/img/kopi/kopibubuk5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #3F2A20; font-size: 33px;">Roastery</h5>
                                    <p class="card-text" style="color: #B3B3B3;">Kami menyediakanjasa roasting biji kopi
                                    </p>
                                    <p class="card-text" style="color: #B3B3B3;">Kedai Kampoeng Kopi Sugara</p>
                                </div>
                            </div>
                            <div style="width: 18rem; height: 13cm;">
                                <!-- Placeholder for empty card -->
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="bg-light text-center">
            <div class="container">
                <h1 class="mt-5" style="color: #3F2A20; text-align: left;margin-left: .8cm;">Event & Kegiatan</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/5.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/6.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/7.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/8.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-item">
                            <img class="mt-3" src="/userview/assets/img/galeri/9.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
