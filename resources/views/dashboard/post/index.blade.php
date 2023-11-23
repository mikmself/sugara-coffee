@extends('dashboard.master.main')
@section('title', 'Data Postingan')
@section('content')
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-content p-2">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('create-dashboard-post') }}" class="btn btn-primary m-2">Tambah</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>JUDUL</th>
                                    <th>PEMBUAT</th>
                                    <th>KONTEN</th>
                                    <th>GAMBAR</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="text-bold-500">{{ $post->title }}</td>
                                        <td>{{ $post->creator->name }}</td>
                                        <td class="d-block text-truncate">{!! $post->content !!}</td>
                                        <td>
                                            <img src="/post_images/{{$post->image}}" alt="Gambar" width="100">
                                        </td>
                                        <td class="d-flex">
                                            <form action="{{ route('edit-dashboard-post', $post->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-warning">Edit</button>
                                            </form>
                                            <form action="{{ route('delete-dashboard-post', $post->id) }}" class="mx-2" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
