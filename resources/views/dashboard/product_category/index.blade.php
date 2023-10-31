@extends('dashboard.master.main')
@section('title','Data Product Category')
@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-content p-2">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('create-dashboard-product-category')}}" class="btn btn-primary m-2">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>NAMA</th>
                                    <th>DESCRIPTION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td class="text-bold-500">{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('edit-dashboard-product-category',$category->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-warning">Edit</button>
                                        </form>
                                        <form action="{{route('delete-dashboard-product-category',$category->id)}}" class="mx-2" method="POST">
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
