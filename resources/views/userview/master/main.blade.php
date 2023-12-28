<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Website Kedai Kampoeng Kopi Sugara" />
    <meta name="author" content="Kampoeng Kedai Kopi Sugara Team" />
    <meta name="title" content="Kampoeng Kedai Kopi Sugara" />
    <title>Kampoeng Kopi Sugara | @yield('title')</title>
    <link rel="shortcut icon" href="/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="/userview/css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="#page-top"><img src="/userview/assets/img/logo.png" alt="" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi-list"></i>
        </button>
        <style>
            .navbar-nav .nav-item.active a {
                border-bottom: 2px solid #000000;
                padding-bottom: 2px;
                transition: all 0.3s ease;
            }
            .navbar-nav .nav-item a:hover {
                color: #007bff;
            }
        </style>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item @if(request()->routeIs('home')) active @endif"><a class="nav-link me-lg-3" href="{{route('home')}}">Home</a></li>
                <li class="nav-item @if(request()->routeIs('about')) active @endif"><a class="nav-link me-lg-3" href="{{route('about')}}">About</a></li>
                <li class="nav-item @if(request()->routeIs('event')) active @endif"><a class="nav-link me-lg-3" href="{{route('event')}}">Event</a></li>
                <li class="nav-item @if(request()->routeIs('product')) active @endif"><a class="nav-link me-lg-3" href="{{route('product')}}">Product</a></li>
                <li class="nav-item @if(request()->routeIs('contact')) active @endif"><a class="nav-link me-lg-3" href="{{route('contact')}}">Contact Us</a></li>
                <li class="nav-item @if(request()->routeIs('article')) active @endif"><a class="nav-link me-lg-3" href="{{route('article')}}">Article</a></li>
                @auth
                    <li class="nav-item @if(request()->routeIs('checkout')) active @endif"><a class="nav-link me-lg-3" href="{{route('checkout')}}">Checkout</a></li>
                    <li class="nav-item @if(request()->routeIs('order')) active @endif"><a class="nav-link me-lg-3" href="{{route('order')}}">Order</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <a href="/login" class="btn btn-dark">Login/Register</a>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@if ($errors->any())
    <div class="modal" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#errorModal').modal('show');
            setTimeout(function(){
                $('#errorModal').modal('hide');
            }, 1000);
        });
    </script>
@endif

@if (session('success'))
    <div class="modal" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#successModal').modal('show');
            setTimeout(function(){
                $('#successModal').modal('hide');
            }, 1000);
        });
    </script>
@endif

@if (session('error'))
    <div class="modal" id="customErrorModal" tabindex="-1" role="dialog" aria-labelledby="customErrorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customErrorModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session('error') }}
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#customErrorModal').modal('show');
            setTimeout(function(){
                $('#customErrorModal').modal('hide');
            }, 1000);
        });
    </script>
@endif

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
