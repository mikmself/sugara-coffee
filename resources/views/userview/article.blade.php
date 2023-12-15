@extends('userview.master.main')
@section('title','Article')
@section('content')
    <div class="container p-5">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="margin-top: 3cm; background-image: url('/post_images/{{$main->image}}'); background-position: center;">
            <div class="col-md-6 px-0">
                <h1 class="display-5 font-italic">{{$main->title}}</h1>
                <p class="lead my-3">{!! Illuminate\Support\Str::limit(strip_tags($main->content), 250) !!}</p>
                <p class="lead mb-0"><a href="{{ route('detail-article', ['slug' => $createSlug->createSlug($main->title)]) }}" class="text-white font-weight-bold">Lanjutkan Membaca...</a></p>
            </div>
        </div>
        <div class="row mb-2 mt-5">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <a href="{{ route('detail-article', ['slug' => $createSlug->createSlug($post->title)]) }}" style="text-decoration: none; color: inherit;">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h4 class="mb-0">
                                    {{ $post->title }}
                                </h4>
                                <div class="mb-1 text-muted">{{ \Carbon\Carbon::parse($post->created_at)->format('M d') }}</div>
                                <p class="card-text mb-auto">
                                    {!! Illuminate\Support\Str::limit(strip_tags($post->content), 250) !!}
                                </p>
                                <p class="card-text mb-auto">
                                    <a href="{{ route('detail-article', ['slug' => $createSlug->createSlug($post->title)]) }}">Lanjutkan Membaca</a>
                                </p>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block"
                                 src="/post_images/{{ $post->image }}"
                                 alt="Gambar {{ $post->title }}"
                                 style="object-fit: cover; width: 40%; aspect-ratio: 1 / 1;">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{$main->title}}</h2>
                        <p class="blog-post-meta">
                            <span class="mb-1 text-muted">
                                {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }} by
                            </span><a href="#">{{ $main->creator->name }}</a>
                        </p>

                        <p class="card-text mb-auto">{!! $main->content !!}</p>
                    </div>
                </div>

                <aside class="col-md-4 blog-sidebar">
                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0">Kampoeng Sugara Kopi, <em>Kedai</em> unik dengan makanan lezat, minuman segar. Juga menjual biji kopi berkualitas online dan offline.</p>
                    </div>
                </aside>
            </div>
        </main>
    </div>
@endsection
