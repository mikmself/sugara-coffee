@extends('dashboard.master.main')
@section('title','Edit Data Product')
@section('content')
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('index-dashboard-product') }}" class="btn btn-fark m-2">Back</a>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" method="POST" action="{{ route('update-dashboard-product', $product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="level" value="User">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="id_category">Nama</label>
                                            <select name="id_category" id="id_category" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" id="name" class="form-control"
                                                   name="name" placeholder="Masukan Nama" value="{{$product->name}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <input type="text" id="description" class="form-control"
                                                   name="description" placeholder="Masukan Deskripsi" value="{{$product->description}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="stock">Stok</label>
                                            <input type="text" id="stock" class="form-control"
                                                   name="stock" placeholder="Masukan Stok" value="{{$product->stock}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="price">Harga</label>
                                            <input type="text" id="price" class="form-control"
                                                   name="price" placeholder="Masukan Harga" value="{{$product->price}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Gambar</label>
                                            <input type="file" id="image" class="form-control"
                                                   name="image" onchange="previewImage()" width="200px">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <img id="image-preview" src="/product_image/{{$product->image}}" alt="Preview Gambar" style="max-width: 100%; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                        <a href="{{ route('index-dashboard-user') }}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function previewImage() {
        const input = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            imagePreview.src = '';
            imagePreview.style.display = 'none';
        }
    }
</script>
@endsection
