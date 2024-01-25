@extends('userview.master.main')
@section('title','Checkout')
@section('content')
    <style>
        .harga {
            color: #A24B31;
            font-family: Open Sans;
            font-size: 22.719px;
            font-style: normal;
            font-weight: 700;
            line-height: 32.817px;
            letter-spacing: 0.631px;
        }

        .card-alamat {
            width: 28rem;
            margin-top: 4cm;
            background: #EBEBEB;
        }
    </style>

    <div class="container">
        <div class="card card-alamat">
            <div class="card-body">
                <h5 class="card-title">Alamat Pengiriman</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{auth()->user()->name}} | {{auth()->user()->telephone}}</h6>
                <p class="card-text">{{auth()->user()->address}}</p>
                <button class="btn btn-dark" id="openChangeAddressModal">Change Address</button>
            </div>
        </div>
    </div>

    <div class="modal" id="changeAddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Address</h5>
                    <button type="button" class="close" id="closeButton" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('change-address')}}" >
                        @csrf
                        <div class="form-group">
                            <label for="address">New Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter new address">
                        </div>
                        <button type="submit" class="btn btn-dark">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mt-4">
            <h4>Total Harga: <span id="totalHarga">Rp. 0</span></h4>
        </div>
        <div class="col-md-12 col-lg-12 mb-3 mt-5">
            <form action="{{route('checkout-action')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="type_payment">Tipe Pembayaran</label>
                    <select name="type_payment" id="type_payment" class="form-control">
                        @foreach($payments as $payment)
                        <option value="{{$payment->name}}">{{$payment->name}} - {{$payment->number}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="type_of_service">Tipe Pelayanan</label>
                    <select name="type_of_service" id="type_of_service" class="form-control">
                        <option value="Ambil Ditempat">Ambil Ditempat</option>
                        <option value="Antar">Antar [+10000-15000]</option>
                        <option value="Kirim">Kirim [+25000]</option>
                    </select>
                </div>
                @foreach($orders as $index => $product)
                <div class="card-body position-relative border rounded p-2 mt-2 card-product">
                    <div class="input-product">
                        <input type="text" class="d-none" name="products[{{$index}}][id]" value="{{$product->id_product}}">
                        <input type="number" class="d-none qtt" name="products[{{$index}}][total]" value="1">
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-lg-1 col-xl-2">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                <img src="/product_images/{{$product->product->image}}" style="width: 4cm"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5>{{$product->product->name}}</h5>
                            <?php
                            $harga = $product->product->price;
                            $harga_formatted = number_format($harga, 0, ',', '.');
                            echo '<p class="harga">Rp. ' . $harga_formatted . '</p>';
                            ?>
                            <p class="mb-4 mb-md-0">
                                {{$product->product->description}}
                            </p>
                        </div>
                        <div class="col-md-2 top-0 end-0 d-flex flex-column" style="align-items: flex-end;">
                            <a href="{{route('delete-temp-order',$product->id)}}" type="button" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                            <div class="input-group mt-auto" style="justify-content: flex-end;">
                                <button class="btn btn-outline-dark decrement" type="button" id="button-addon1">-</button>
                                <span class="input-group-text quantity" id="basic-addon1">1</span>
                                <button class="btn btn-outline-dark increment" type="button" id="button-addon2">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-dark mt-5" id="submit-btn">Submit</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('openChangeAddressModal').addEventListener('click', function() {
            document.getElementById('changeAddressModal').style.display = 'block';
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('changeAddressModal').style.display = 'none';
        });
        document.addEventListener('DOMContentLoaded', function () {
            const productContainers = document.querySelectorAll('.card-product');
            const totalHargaElement = document.getElementById('totalHarga');
            let totalHarga = 0;

            function updateTotalHarga() {
                totalHargaElement.innerText = 'Rp. ' + totalHarga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            productContainers.forEach((container, index) => {
                const decrementButton = container.querySelector('.input-group .btn-outline-dark.decrement');
                const incrementButton = container.querySelector('.input-group .btn-outline-dark.increment');
                const quantityElement = container.querySelector('.input-group .quantity');
                const quantityInput = container.querySelector('.input-product .qtt');
                let quantity = 1;

                const hargaElement = container.querySelector('.harga');
                const harga = parseInt(hargaElement.innerText.replace('Rp. ', '').replace('.', '').trim());
                totalHarga += harga * quantity;
                updateTotalHarga();

                decrementButton.addEventListener('click', () => {
                    if (quantity > 1) {
                        quantity--;
                        totalHarga -= harga;
                        updateQuantity();
                    }
                });

                incrementButton.addEventListener('click', () => {
                    quantity++;
                    totalHarga += harga;
                    updateQuantity();
                });

                function updateQuantity() {
                    quantityElement.textContent = quantity;
                    quantityInput.value = quantity;
                    updateTotalHarga();
                }
            });

            const typeOfServiceSelect = document.getElementById('type_of_service');
            const tambahanBiayaKirim = 25000;

            typeOfServiceSelect.addEventListener('change', function () {
                if (typeOfServiceSelect.value === 'Kirim') {
                    totalHarga += tambahanBiayaKirim;
                    updateTotalHarga();
                }
            });
        });
    </script>
@endsection
