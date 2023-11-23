@extends('userview.master.main')
@section('title','Detail Article')
@section('content')
    <header class="masthead" style="background-image: url('/post_images/{{$post->image}}');background-size: cover;background-repeat: no-repeat;background-position: center;">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">{{$post->creator->name}}</a>
                            on {{ $post->created_at->format('F j, Y') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>{!! $post->content !!}</p>
                </div>
            </div>
        </div>
    </article>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let header = document.querySelector('.masthead');
            let image = new Image();
            image.src = getComputedStyle(header).backgroundImage.replace(/url\((['"])?(.*?)\1\)/gi, '$2').split(',')[0];

            image.onload = function () {
                let color = getAverageColor(image);
                let textColor = isDarkColor(color) ? 'white' : 'black';
                header.style.color = textColor;
            };
        });
        function getAverageColor(image) {
            let canvas = document.createElement('canvas');
            canvas.width = 1;
            canvas.height = 1;
            let context = canvas.getContext('2d');
            context.drawImage(image, 0, 0, 1, 1);
            return context.getImageData(0, 0, 1, 1).data;
        }

        function isDarkColor(color) {
            let brightness = (color[0] * 299 + color[1] * 587 + color[2] * 114) / 1000;
            return brightness < 128;
        }
    </script>
@endsection
