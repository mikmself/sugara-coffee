@extends('dashboard.master.main')
@section('title', 'Edit Data Postingan')
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('index-dashboard-post') }}" class="btn btn-fark m-2">Back</a>
                        </div>
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="{{ route('update-dashboard-post', $post->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id_creator" value="4e8992b4-49ce-4ce4-b856-8310e499dfa9">
                                <div class="form-body">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Gambar</label>
                                            <input type="file" id="image" class="form-control" name="image" onchange="previewImage()" width="200px">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <img id="image-preview" src="/post_images/{{$post->image}}" alt="Preview Gambar" style="max-height: 5cm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="title">Judul</label>
                                                <input type="text" id="title" class="form-control" name="title" placeholder="Masukan Judul" value="{{ $post->title }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="content">Konten</label>
                                                <textarea id="content" name="content">{!! $post->content !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                            <a href="{{ route('index-dashboard-post') }}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea#content',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
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
