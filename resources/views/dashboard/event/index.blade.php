@extends('dashboard.master.main')
@section('title','Data Event')
@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-content p-2">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('create-dashboard-event')}}" class="btn btn-primary m-2">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>JUDUL</th>
                                    <th>GAMBAR</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>
                                    <td class="text-bold-500">{{$event->title}}</td>
                                    <td>
                                        @foreach ($event->getMedia('images') as $image)
                                            <img src="{{ $image->getUrl() }}" alt="{{ $event->title }}" style="height: 2cm">
                                        @endforeach
                                    </td>
                                    <td class="d-flex">
                                        <form action="{{route('edit-dashboard-event',$event->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-warning">Edit</button>
                                        </form>
                                        <form action="{{route('delete-dashboard-event',$event->id)}}" class="mx-2" method="POST">
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
