@extends('userview.master.main')
@section('title','Event')
@section('content')
    <style>
        .gallery-item img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>

    <header class="masthead">
        <div class="container">
            <div class="row gx-5 align-items-left">
                <div class="col-lg-6 order-2 order-lg-1">
                    <p class="text-dark mobile-text" style="color: #332B23; margin-top: 3cm;">Kumpulan Aktivitas/Event dari tim kami</p>
                    <div class="mb-5 mb-lg-0 text-left text-lg-start text-dark">
                        <h1 class="display-1 lh-1 mb-3 mobile-text2">DOKUMENTASI GALERY</h1>
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
            @foreach($events as $event)
                <h3 style="color: #3F2A20;">{{$event->title}}</h3>
                <div class="row">
                    @foreach ($event->getMedia('images') as $image)
                        <div class="col-lg-4 gallery-item">
                            <img class="mt-3 gambar" src="{{ $image->getUrl() }}" alt="{{ $event->title }}">
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between flex-row-reverse mt-5">
                <div class="col-12 col-lg-5 order-lg-1 order-2">
                    <h2 class="display-4 lh-1 mb-4">Kedai Kampung Sugara</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Sugara Coffee hadir diberbagai event daerah, didukung oleh Bupati dan anggota DPRD wilayah Cilacap</p>
                </div>
                <div class="col-sm-8 col-md-6 order-lg-2 order-1 text-center">
                    <div class="px-sm-0"><img class="img-fluid rounded-circle" src="/userview/assets/img/event/bunder.png" alt="..." /></div>
                </div>
            </div>
        </div>
    </section>
@endsection
