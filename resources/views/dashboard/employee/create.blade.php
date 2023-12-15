@extends('dashboard.master.main')
@section('title','Tambah Data Karyawan')
@section('content')
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('index-dashboard-employee')}}" class="btn btn-fark m-2">Back</a>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" method="POST" action="{{route('store-dashboard-employee')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" id="name" class="form-control"
                                                name="name" placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control"
                                                name="email" placeholder="Masukan Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="telephone">Nomor Telephone</label>
                                            <input type="number" id="telephone" class="form-control"
                                                name="telephone" placeholder="Masukan Nomor Telephone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <input type="address" id="address" class="form-control"
                                                   name="address" placeholder="Masukan Alamat Lengkap">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="type_of_employee">Level</label>
                                            <select name="type_of_employee" id="type_of_employee" class="form-control">
                                                <option value="pengemas">Pengemas</option>
                                                <option value="pengepul">Pengepul</option>
                                                <option value="kurir">Kurir</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
