<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sugara Coffee | @yield('title')</title>
    <link rel="shortcut icon" href="/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="/userview/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="#page-top"><img src="/userview/assets/img/logo.png" alt="" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('event')}}">Event</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('product')}}">Product</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('contact')}}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('article')}}">Article</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer class="text-center text-lg-start text-dark" style="background-color: #B7B5A2;">
    <div class="container p-5">
        <div class="row py-5">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase"><img src="/userview/assets/img/logo.png" alt="" srcset=""></h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Customer Center</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="mailto:sugaracoffeebar@gmail.com" class="text-dark">sugaracoffeebar@gmail.com</a>
                    </li>
                    <li>
                        <a href="tel:0852-0102-0819" class="text-dark">0852-0102-0819</a>
                    </li>
                    <li>
                        <p class="text--dark">Desa Karangtengah Cilacap, Jawa Tengah</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">About Us</h5>
                <p class="text--dark">Menyediakan produk kopi berkualitas premium dengan harga yang terjangkau.
                    Menyediakan juga berbagai jenis makanan dan minuman lainnya</p>
            </div>
        </div>
    </div>
</footer>
<script src="/userview/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
