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
            </div>
        </div>
    </div>

    <div class="container">
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
                        <option value="Antar Dekat">Antar Dekat (+10000)</option>
                        <option value="Antar Jauh">Antar Jauh (+25000)</option>
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
                            <button type="button" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </button>
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
        document.addEventListener('DOMContentLoaded', function () {
            const productContainers = document.querySelectorAll('.card-product');

            productContainers.forEach((container, index) => {
                const decrementButton = container.querySelector('.input-group .btn-outline-dark.decrement');
                const incrementButton = container.querySelector('.input-group .btn-outline-dark.increment');
                const quantityElement = container.querySelector('.input-group .quantity');
                const quantityInput = container.querySelector('.input-product .qtt');
                let quantity = 1;

                decrementButton.addEventListener('click', () => {
                    if (quantity > 1) {
                        quantity--;
                        updateQuantity();
                    }
                });

                incrementButton.addEventListener('click', () => {
                    quantity++;
                    updateQuantity();
                });

                function updateQuantity() {
                    quantityElement.textContent = quantity;
                    quantityInput.value = quantity;
                }
            });
        });
    </script>
@endsection
