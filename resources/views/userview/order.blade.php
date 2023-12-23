@extends('userview.master.main')
@section('title', 'Order')
@section('content')
    <section class="section" style="margin-top: 3cm">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-content p-2">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>PRODUCTS</th>
                                    <th>TOTAL HARGA</th>
                                    <th>TIPE PEMBAYARAN</th>
                                    <th>STATUS</th>
                                    <th>WAKTU</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            @php($dataProduct = json_decode($order->products, true))
                                            @foreach($products as $product)
                                                @foreach($dataProduct as $orderProduct)
                                                    @if($orderProduct['id'] == $product->id)
                                                        {{$product->name}} ({{$orderProduct['total']}}),
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </td>
                                        <td>{{$order->total_price}}</td>
                                        <td>{{$order->type_payment}}</td>
                                        <td>{{$order->status}}</td>
                                        <td class="order-date">{{ \Carbon\Carbon::parse($order->created_at)->diffForHumans() }}</td>
                                        <td>
                                            @if($order->status == "unpaid")
                                                @if($order->type_of_service !== "Ambil Ditempat")
                                                    @if($order->type_of_service !== "Antar")
                                                        <button class="btn btn-warning" data-toggle="modal" data-target="#uploadModal-{{ $order->id }}">Bayar</button>
                                                    @else
                                                        Menunggu Konfirmasi
                                                    @endif
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="uploadModal-{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel-{{ $order->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="uploadModalLabel-{{ $order->id }}">Upload Image for Order #{{ $order->id }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('upload-payment-order',$order->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="image-{{ $order->id }}">Choose Image:</label>
                                                            <input type="file" class="form-control-file" id="image-{{ $order->id }}" name="image" accept="image/*">
                                                        </div>
                                                        <div class="form-group">
                                                            <img id="imagePreview-{{ $order->id }}" src="#" alt="Preview" style="max-width: 100%; max-height: 200px; display: none;">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Upload</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            @foreach ($orders as $order)
            $("#image-{{ $order->id }}").change(function() {
                readURL(this, "{{ $order->id }}");
            });
            function readURL(input, orderId) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $("#imagePreview-" + orderId).attr("src", e.target.result).show();
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            @endforeach
        });
    </script>
@endsection
