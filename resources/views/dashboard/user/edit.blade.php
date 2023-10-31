@extends('dashboard.master.main')
@section('title','Edit Data User')
@section('content')
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('index-dashboard-user') }}" class="btn btn-fark m-2">Back</a>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" method="POST" action="{{ route('update-dashboard-user', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="level" value="User">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" id="name" class="form-control"
                                                name="name" placeholder="Masukan Nama" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control"
                                                name="email" placeholder="Masukan Email" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <input type="address" id="address" class="form-control"
                                                   name="address" placeholder="Masukan Alamat Lengkap" value="{{$user->address}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="level">Level</label>
                                            <select name="level" id="level" class="form-control">
                                                <option value="superadmin" {{$user->level == "superadmin" ? "selected" : ""}}>Superadmin</option>
                                                <option value="admin" {{$user->level == "admin" ? "selected" : ""}}>Admin</option>
                                                <option value="user" {{$user->level == "user" ? "selected" : ""}}>User</option>
                                            </select>
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
@endsection
