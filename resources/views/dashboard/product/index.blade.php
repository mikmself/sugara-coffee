@extends('dashboard.master.main')
@section('title','Data Product')
@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-content p-2">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('create-dashboard-product')}}" class="btn btn-primary m-2">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>GAMBAR</th>
                                    <th>NAMA</th>
                                    <th>KATEGORI</th>
                                    <th>DESKRIPSI</th>
                                    <th>STOK</th>
                                    <th>HARGA</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td><img src="/product_images/{{$product->image}}" alt="" width="200px"></td>
                                    <td class="text-bold-500">{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>{{$product->price}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('edit-dashboard-product',$product->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-warning">Edit</button>
                                        </form>
                                        <form action="{{route('delete-dashboard-product',$product->id)}}" class="mx-2" method="POST">
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
