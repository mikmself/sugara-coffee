@extends('userview.master.main')
@section('title','Article')
@section('content')
    <style>
        a{
            text-decoration: none;
        }
        .blog-header {
            line-height: 1;
            border-bottom: 1px solid #e5e5e5;
        }

        .blog-header-logo {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
            font-size: 2.25rem;
        }

        .blog-header-logo:hover {
            text-decoration: none;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        }

        .display-4 {
            font-size: 2.5rem;
        }

        @media (min-width: 768px) {
            .display-4 {
                font-size: 3rem;
            }
        }
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        .nav-scroller .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        .nav-scroller .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
        }
        .card-img-right {
            height: 100%;
            border-radius: 0 3px 3px 0;
        }
        .flex-auto {
            -ms-flex: 0 0 auto;
            -webkit-box-flex: 0;
            flex: 0 0 auto;
        }
        .h-250 {
            height: 250px;
        }
        @media (min-width: 768px) {
            .h-md-250 {
                height: 250px;
            }
        }
        .border-top {
            border-top: 1px solid #e5e5e5;
        }
        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }
        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }
        .blog-title {
            margin-bottom: 0;
            font-size: 2rem;
            font-weight: 400;
        }
        .blog-description {
            font-size: 1.1rem;
            color: #999;
        }
        @media (min-width: 40em) {
            .blog-title {
                font-size: 3.5rem;
            }
        }
        .blog-pagination {
            margin-bottom: 4rem;
        }
        .blog-pagination>.btn {
            border-radius: 2rem;
        }
        .blog-post {
            margin-bottom: 4rem;
        }
        .blog-post-title {
            margin-bottom: .25rem;
            font-size: 2.5rem;
        }
        .blog-post-meta {
            margin-bottom: 1.25rem;
            color: #999;
        }
        .blog-footer {
            padding: 2.5rem 0;
            color: #999;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }
        .blog-footer p:last-child {
            margin-bottom: 0;
        }
    </style>
    <div class="container p-5">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="margin-top: 3cm;">
            <div class="col-md-6 px-0" >
                <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what's most interesting in this post's contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
        <div class="row mb-2 mt-5">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Featured post</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" src="/userview/assets/img/event/g27.png"
                         alt="Card image cap">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Post title</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" src="/userview/assets/img/event/g28.png"
                         alt="Card image cap">
                </div>
            </div>
        </div>

        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        From the Firehose
                    </h3>

                    <div class="blog-post">
                        <h2 class="blog-post-title">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap.
                            Basic typography, images, and code are all supported.</p>
                        <hr>
                        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus
                            mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                            consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                                ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                            fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>
                </div>

                <aside class="col-md-4 blog-sidebar">
                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                            purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>
                </aside>
            </div>
        </main>
    </div>
@endsection
