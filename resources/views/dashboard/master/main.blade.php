<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugara | @yield('title')</title>

    <link rel="stylesheet" href="/dashboard/assets/css/main/app.css">
    <link rel="stylesheet" href="/dashboard/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/icon.png" type="image/png">
    <link rel="stylesheet" href="/dashboard/assets/css/shared/iconly.css">
    <style>
        img.iconnya {
            height: 2cm;
        }

        @media (prefers-color-scheme: dark) {
            img.iconnya {
                filter: brightness(0) invert(1);
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Halo, {{ Auth::user()->name }}
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="">
                                <p><img src="/icon.png" alt="" srcset="" class="iconnya" style="height: 2cm;" id="logoImage"></p>
                            </a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item @if(request()->routeIs('index-dashboard')) active @endif">
                            <a href="{{ route('index-dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-order-offline')) active @endif">
                            <a href="{{ route('index-dashboard-order-offline') }}" class='sidebar-link'>
                                <i class="bi bi-cart-fill"></i>
                                <span>Offline Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-product')) active @endif">
                            <a href="{{ route('index-dashboard-product') }}" class='sidebar-link'>
                                <i class="bi bi-box-fill"></i>
                                <span>Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-product-category')) active @endif">
                            <a href="{{ route('index-dashboard-product-category') }}" class='sidebar-link'>
                                <i class="bi bi-tags-fill"></i>
                                <span>Product Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-order')) active @endif">
                            <a href="{{ route('index-dashboard-order') }}" class='sidebar-link'>
                                <i class="bi bi-cart-fill"></i>
                                <span>Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-post')) active @endif">
                            <a href="{{ route('index-dashboard-post') }}" class='sidebar-link'>
                                <i class="bi bi-file-text-fill"></i>
                                <span>Article</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-event')) active @endif">
                            <a href="{{ route('index-dashboard-event') }}" class='sidebar-link'>
                                <i class="bi bi-calendar-fill"></i>
                                <span>Event</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-employee')) active @endif">
                            <a href="{{ route('index-dashboard-employee') }}" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Employee</span>
                            </a>
                        </li>
                        <li class="sidebar-item @if(request()->routeIs('index-dashboard-user')) active @endif">
                            <a href="{{ route('index-dashboard-user') }}" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('title')</h3>
            </div>
            <div class="page-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2023 &copy; Sugara Coffee</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="https://saugi.me">Sugara Coffee Team</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script>
            const logoImage = document.getElementById('logoImage');
            const toggleDark = document.getElementById('toggle-dark');

            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                logoImage.style.filter = 'brightness(0) invert(0)';
            } else {
                logoImage.style.filter = '';
            }

            toggleDark.addEventListener('change', function () {
                if (toggleDark.checked) {
                    logoImage.style.filter = 'brightness(0) invert(1)';
                } else {
                    logoImage.style.filter = 'brightness(0) invert(0)';
                }
            });
    </script>


    <script src="/dashboard/assets/js/bootstrap.js"></script>
    <script src="/dashboard/assets/js/app.js"></script>
</body>
</html>
