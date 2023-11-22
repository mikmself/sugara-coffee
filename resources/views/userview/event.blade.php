@extends('userview.master.main')
@section('title','Event')
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
        @media (max-width: 767px) {
            .mobile-text {
                font-size: 18px;
                line-height: 1.5;
            }
            .mobile-text2 {
                font-size: 25px;
                line-height: 1.5;
            }
            .gambar{
                width: 100%;
            }
        }
    </style>
    <header class="masthead">
        <div class="container">
            <div class="row gx-5 align-items-left">
                <div class="col-lg-6 order-2 order-lg-1">
                    <p class="text-dark mobile-text" style="color: #332B23;
                            margin-top: 3cm;">Kumpulan Aktivitas/Event dari tim kami</p>
                    <div class="mb-5 mb-lg-0 text-left text-lg-start text-dark">
                        <h1 class="display-1 lh-1 mb-3 mobile-text2">DOKUMENTASI
                            GALERY</h1>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img class="img-fluid rounded-circle" src="/userview/assets/img/about-image2.png" alt="..." />
                </div>
            </div>
        </div>
    </header>
    <section class="bg-light text-center">
        <div class="container">
            <h3 style="color: #3F2A20;">Persemaian</h3>
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g3.png" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt-5" style="color: #3F2A20;">Kebun Kopi Sugara</h3>
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g4.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g5.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g6.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g7.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g8.png" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt-5" style="color: #3F2A20;">Rambang dan Sortasi Cherry Coffee </h3>
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g9.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g10.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g11.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g12.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g13.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g14.png" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt-5" style="color: #3F2A20;">Greenhouse & Greenbean</h3>
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g15.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g16.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g17.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/kurang1.png" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt-5" style="color: #3F2A20;">Roasting & Roastbean</h3>
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g18.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g19.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g20.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g21.png" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt-5" style="color: #3F2A20;">Public Cupping 2023</h3>
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g22.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g23.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g24.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g25.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g24.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g26.png" alt="">
                    </div>
                </div>
            </div>
            <h3 class="mt-5" style="color: #3F2A20;">Kedai Kampung Sugara</h3>
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g27.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g28.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g29.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g30.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g31.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g32.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g34.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g33.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img class="mt-3 gambar" src="/userview/assets/img/event/g35.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container px-5">
            <div
                class="row gx-5 align-items-center justify-content-center justify-content-lg-between flex-row-reverse mt-5">
                <div class="col-12 col-lg-5 order-lg-1 order-2">
                    <h2 class="display-4 lh-1 mb-4">Kedai Kampung Sugara</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Sugara Coffee hadir diberbagai event daerah, didukung oleh
                        Bupati dan anggota DPRD wilayah Cilacap</p>
                </div>
                <div class="col-sm-8 col-md-6 order-lg-2 order-1 text-center">
                    <div class=" px-sm-0"><img class="img-fluid rounded-circle" src="/userview/assets/img/event/bunder.png" alt="..." /></div>
                </div>
            </div>
        </div>
    </section>
@endsection
