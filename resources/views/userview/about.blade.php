@extends('userview.master.main')
@section('title','About')
@section('content')
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .card {
            background-color: #B3A492;
        }

        .card-title {
            color: #FFF;
            text-align: center;
            font-size: 2em;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1.925px;
            text-transform: capitalize;
        }

        .card-text {
            color: #FFF;
            text-align: center;
            font-size: 1em;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1.048px;
            text-transform: capitalize;
        }

        @media only screen and (max-width: 768px) {
            .col-md-5 {
                margin-left: 0;
            }
            .card-title {
                font-size: 1.5em;
                text-transform: capitalize;
            }
            .card-text {
                font-size: .8em;
            }
        }
        .img-ini {
            max-width: 100%;
            height: auto;
        }
        @media (max-width: 575.98px) {
            .img-ini {
                width: 8cm;
                max-width: none;
                height: auto;
            }
        }
    </style>
    <header class="masthead">
        <div class="container px-5">
            <div
                class="row gx-5 align-items-center justify-content-center justify-content-lg-between flex-row-reverse mt-5">
                <div class="col-12 col-lg-5 order-lg-1 order-2">
                    <h2 class="display-4 lh-1 mb-4">Kedai Kampung Sugara</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Sugara Coffee hadir diberbagai event daerah, didukung oleh
                        Bupati dan anggota DPRD wilayah Cilacap</p>
                </div>
                <div class="col-sm-8 col-md-6 order-lg-2 order-1 text-center">
                    <div class="px-sm-0"><img class="img-fluid img-ini rounded-circle" src="/userview/assets/img/about/1.png" alt="..." /></div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 p-3 order-md-1">
                                <img src="/userview/assets/img/about/2.png" class="img-fluid" alt="Person holding coffee bags">
                            </div>
                            <div class="col-md-5 text-center text-white order-md-2" style="display: flex; align-items: center; justify-content: center;flex-direction: column;">
                                <h5 class="card-title">#QUOTESOUTTHEDAY</h5>
                                <p class="card-text">"Kopi Adalah Bahasa Universal, Dengan Secangkir Kopi, Anda Dapat Berbicara Dengan Siapa Saja Di Seluruh Dunia."</p>
                                <p class="card-text"> Bpk Siapa Aja Boleh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
