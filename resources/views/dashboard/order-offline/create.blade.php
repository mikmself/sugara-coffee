@extends('dashboard.master.main')
@section('title','Tambah Data Order Offline')
@section('content')
    <style>
        .card-body.active {
            border: 1px solid #435ebe;
            border-radius: 10px;
            box-shadow: 0 0 5px #435ebe;
        }
    </style>
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('index-dashboard-order-offline')}}" class="btn btn-fark m-2">Back</a>
                        </div>
                        <span id="total-price">Total Price: Rp. 0</span>
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="{{route('store-dashboard-order-offline')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="type_payment">Tipe Pembayaran</label>
                                                <select name="type_payment" id="type_payment" class="form-control">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Non Cash">Non Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="container bg-dark p-3 h-25" style="overflow-y: scroll">
                                            <div class="row">
                                                @foreach($products as $index => $product)
                                                    <div class="col-md-3">
                                                        <div class="card mb-3">
                                                            <div class="card-body" id="elemennya">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="product-{{ $product->id }}" name="products[{{ $index }}][status]">
                                                                    <label class="form-check-label" for="product-{{ $product->id }}">{{ $product->name }}</label>
                                                                </div>
                                                                <img src="/product_images/{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                                                                <p>Harga: {{ $product->price }}</p>
                                                                <div class="mb-3">
                                                                    <input type="number" class="form-control" name="products[{{ $index }}][total]" min="0" value="0" disabled>
                                                                    <input type="hidden" name="products[{{ $index }}][id]" value="{{ $product->id }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
        const imgElements = document.querySelectorAll(".card-body img");
        for (const imgElement of imgElements) {
            imgElement.addEventListener("click", () => {
                const checkboxElement = imgElement.parentElement.querySelector(".form-check-input");
                const cardBody = imgElement.parentElement;
                if (checkboxElement.checked) {
                    checkboxElement.checked = false;
                    cardBody.classList.remove("active");
                    const inputNumberElement = cardBody.querySelector("input[type='number']");
                    inputNumberElement.setAttribute("disabled", "true");
                } else {
                    checkboxElement.checked = true;
                    cardBody.classList.add("active");
                    const inputNumberElement = cardBody.querySelector("input[type='number']");
                    inputNumberElement.removeAttribute("disabled");
                }
            });
        }
        const checkboxElements = document.querySelectorAll(".form-check-input");
        for (const checkboxElement of checkboxElements) {
            checkboxElement.addEventListener("change", () => {
                const cardBody = checkboxElement.parentElement.parentElement;
                if (checkboxElement.checked) {
                    cardBody.classList.add("active");
                    const inputNumberElement = cardBody.querySelector("input[type='number']");
                    if (inputNumberElement) {
                        inputNumberElement.setAttribute("disabled", "true");
                    }
                } else {
                    cardBody.classList.remove("active");
                    const inputNumberElement = cardBody.querySelector("input[type='number']");
                    if (inputNumberElement) {
                        inputNumberElement.setAttribute("disabled", "true");
                    }
                }
            });
        }
        const updateTotalPrice = () => {
            const inputNumberElements = document.querySelectorAll(".card-body input");
            let totalPrice = 0;
            inputNumberElements.forEach((inputNumberElement) => {
                if (!inputNumberElement.hasAttribute("disabled")) {
                    const productCard = inputNumberElement.closest(".card-body");
                    const productPriceText = productCard.querySelector("p").textContent;
                    const productPriceMatch = productPriceText.match(/(\d+(\.\d{1,2})?)/);

                    if (productPriceMatch) {
                        const productPrice = parseFloat(productPriceMatch[0]);
                        const productQuantity = parseInt(inputNumberElement.value) || 0;

                        if (!isNaN(productPrice) && !isNaN(productQuantity)) {
                            totalPrice += productPrice * productQuantity;
                        }
                    }
                }
            });
            const totalPriceElement = document.getElementById("total-price");
            if (totalPrice) {
                totalPriceElement.textContent = `Total Price: Rp. ${totalPrice.toFixed(2) - 3683802000}`;
            } else {
                totalPriceElement.textContent = "No products in cart";
            }
        };
        const totalPrice = Array.from(document.querySelectorAll(".card-body input")).reduce((totalPrice, inputNumberElement) => {
            const productPrice = parseFloat(inputNumberElement.value);
            const productQuantity = parseInt(inputNumberElement.closest(".card-body").querySelector("p").textContent.match(/(\d+(\.\d{1,2})?)/)[0]);
            if (!isNaN(productPrice) && !isNaN(productQuantity) && productQuantity > 0) {
                totalPrice += productPrice * productQuantity;
            }
            return totalPrice;
        }, "");
        const inputNumberElements = document.querySelectorAll(".card-body input");
        inputNumberElements.forEach((inputNumberElement) => {
            inputNumberElement.addEventListener("input", updateTotalPrice);
        });
    </script>
@endsection
