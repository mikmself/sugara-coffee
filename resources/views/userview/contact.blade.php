@extends('userview.master.main')
@section('title','Contact Us')
@section('content')
    <style>
        body{
            background-image: url("/userview/assets/img/bg-blur.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <div class="container" style="padding-top: 7cm; padding-bottom: 3cm;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-md-3" style="background-color: #B7B5A2;">
                    <div class="card-body">
                        <h1 class="card-title">Contact Information</h1>
                        <p class="card-text">Should you have any question or concern, you can reach us by filling out the
                            contact form, calling us, coming to our office,  finding us on other social
                            networks, or you can personal email us at :
                        </p>
                        <p><i class="bi bi-telephone-fill"></i> 0882-0039-84114</p>
                        <p><i class="bi bi-globe"></i> sugaraberkahsejahtera@gmail.com</p>
                        <p><i class="bi bi-geo-alt-fill"></i> Desa Karanggitung ,Cilacap ,Jawa Tengah</p>
                        <a href=""><img  class="pt-5" src="/userview/assets/icon/whatsapp.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
