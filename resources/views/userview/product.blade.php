@extends('userview.master.main')
@section('title','Product')
@section('content')
    <header class="masthead"
            style="background-image: url('/userview/assets/img//product/bg.png'); height: 80vh; background-repeat: no-repeat; background-position: center; background-position-y: 1cm; background-size: cover;">
    </header>
    <section style="background-color: #eee;">
        <div class="container">
            <h2 class="pt-5">Bibit Kopi</h2>
            <div class="row">
                @foreach($coffees as $coffee)
                <div class="col-md-12 col-lg-6 mb-3">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="/product_images/{{$coffee->image}}"
                                             class="w-100" />
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h5>{{$coffee->name}}</h5>
                                    <?php
                                        $harga = $coffee->price;
                                        $harga_formatted = number_format($harga, 0, ',', '.');
                                        echo '<p style="color: #A24B31;
                                        font-family: Open Sans;
                                        font-size: 22.719px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: 32.817px; /* 144.444% */
                                        letter-spacing: 0.631px;">Rp. ' . $harga_formatted . '</p>';
                                        ?>
                                    <p class="mb-4 mb-md-0">
                                        {{$coffee->description}}
                                    </p>
                                </div>
                            </div>
                            <a href="{{route('to-checkout',$coffee->id)}}" class="btn btn-dark mt-2">Chekout</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <h2 class="pt-5">Makanan</h2>
            <div class="row">
                @foreach($foods as $food)
                    <div class="col-md-12 col-lg-6 mb-3">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="/product_images/{{$food->image}}"
                                                 class="w-100" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h5>{{$food->name}}</h5>
                                        <?php
                                        $harga = $food->price;
                                        $harga_formatted = number_format($harga, 0, ',', '.');
                                        echo '<p style="color: #A24B31;
                                        font-family: Open Sans;
                                        font-size: 22.719px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: 32.817px; /* 144.444% */
                                        letter-spacing: 0.631px;">Rp. ' . $harga_formatted . '</p>';
                                        ?>
                                        <p class="mb-4 mb-md-0">
                                            {{$food->description}}
                                        </p>
                                    </div>
                                </div>
                                <a href="{{route('to-checkout',$food->id)}}" class="btn btn-dark mt-2">Chekout</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <h2 class="pt-5">Minuman</h2>
            <div class="row">
                @foreach($drinks as $drink)
                    <div class="col-md-12 col-lg-6 mb-3">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="/product_images/{{$drink->image}}"
                                                 class="w-100" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h5>{{$drink->name}}</h5>
                                        <?php
                                        $harga = $drink->price;
                                        $harga_formatted = number_format($harga, 0, ',', '.');
                                        echo '<p style="color: #A24B31;
                                        font-family: Open Sans;
                                        font-size: 22.719px;
                                        font-style: normal;
                                        font-weight: 700;
                                        line-height: 32.817px; /* 144.444% */
                                        letter-spacing: 0.631px;">Rp. ' . $harga_formatted . '</p>';
                                        ?>
                                        <p class="mb-4 mb-md-0">
                                            {{$drink->description}}
                                        </p>
                                    </div>
                                </div>
                                <a href="{{route('to-checkout',$drink->id)}}" class="btn btn-dark mt-2">Chekout</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <style>
            .product-title {
                color: #3F2A20;
                font-size: 33px;
            }

            .product-description {
                color: #B3B3B3;
            }
        </style>
        <div class="container">
            <h2 class="pt-5">Other Our Product</h2>
            <div class="row pt-3 d-flex justify-content-between">
                <div class="card col-md-12 col-lg-3" style="margin-top: 1cm">
                    <img src="/userview/assets/img/product/c1.png" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Gadog Premium</h5>
                        <p class="card-text product-description">robusta gadog hingga premium Sugara Coffee. Kopi </p>
                        <p class="card-text product-description">Kedai Kampoeng Kopi Sugara</p>
                    </div>
                </div>
                <div class="card col-md-12 col-lg-3" style="margin-top: 1cm">
                    <img src="/userview/assets/img/product/c2.png" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Kopla Premium</h5>
                        <p class="card-text product-description">robusta gadog hingga premium Sugara Coffee. Kopi </p>
                        <p class="card-text product-description">Kedai Kampoeng Kopi Sugara</p>
                    </div>
                </div>
                <div class="card col-md-12 col-lg-3" style="margin-top: 1cm">
                    <img src="/userview/assets/img/product/c3.png" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title product-title">Robusta</h5>
                        <p class="card-text product-description">robusta gadog hingga premium Sugara Coffee. Kopi </p>
                        <p class="card-text product-description">Kedai Kampoeng Kopi Sugara</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
