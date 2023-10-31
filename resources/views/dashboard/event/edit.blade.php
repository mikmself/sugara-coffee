@extends('dashboard.master.main')
@section('title', 'Edit Data Event')
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('index-dashboard-event') }}" class="btn btn-fark m-2">Back</a>
                        </div>
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="{{ route('update-dashboard-event', $event->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="title">Judul</label>
                                                <input type="text" id="title" class="form-control"
                                                       name="title" placeholder="Masukan Judul" value="{{ $event->title }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="images">Gambar</label>
                                                <input type="file" id="images" class="form-control"
                                                       name="images[]" onchange="previewImages()" width="200px" multiple>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div id="image-preview" style="display: flex; flex-wrap: wrap;"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                            <a href="{{ route('index-dashboard-event') }}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
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
        function previewImages() {
            const input = document.getElementById('images');
            const imagePreview = document.getElementById('image-preview');
            imagePreview.innerHTML = '';

            if (input.files && input.files.length > 0) {
                for (let i = 0; i < input.files.length; i++) {
                    const reader = new FileReader();
                    const imageElement = document.createElement('img');
                    imageElement.style.maxHeight = '5cm';
                    imageElement.style.marginRight = '10px';
                    imageElement.style.marginBottom = '10px';

                    reader.onload = function (e) {
                        imageElement.src = e.target.result;
                    };

                    reader.readAsDataURL(input.files[i]);
                    imagePreview.appendChild(imageElement);
                }
            }
        }
        document.getElementById('images').addEventListener('change', previewImages);
    </script>
@endsection
