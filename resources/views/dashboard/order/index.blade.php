@extends('dashboard.master.main')
@section('title','Data Product Order')
@section('content')
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-content p-2">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('create-dashboard-order-offline')}}" class="btn btn-primary m-2">Tambah</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>ADMIN</th>
                                    <th>USER</th>
                                    <th>ALAMAT</th>
                                    <th>PRODUCTS</th>
                                    <th>TOTAL HARGA</th>
                                    <th>TIPE PEMBAYARAN</th>
                                    <th>STATUS</th>
                                    <th>WAKTU</th>
                                    <th>BUKTI PAYMENT</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        @if(isset($order->admin))
                                            <td>{{$order->admin->name}}</td>
                                        @else
                                            <td>Belum ada admin</td>
                                        @endif
                                        <td>{{$order->user->name}}</td>
                                        <td>{{$order->user->address}}</td>
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
                                            @if($order->type_payment == "Cash")
                                                @if($order->status == "paid")
                                                    <p class="text-success">Lunas dibayar</p>
                                                @elseif($order->status == "cancelled")
                                                    <p class="text-danger">Pemesanan dicancel!</p>
                                                @else
                                                    <p class="text-warning">Bayar ketika diambil</p>
                                                @endif
                                            @else
                                                <a href="#" data-toggle="modal" data-target="#imageModal-{{ $order->id }}">
                                                    <img id="imagePreview-{{ $order->id }}" src="{{ $order->getFirstMediaUrl('image') }}" alt="Preview" style="max-width: 100%; max-height: 100px;">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($order->type_of_service == "Ambil Ditempat")
                                                @if($order->status == "unpaid")
                                                    <a href="{{ route('acc-dashboard-order',$order->id) }}" class="btn btn-success">ACC</a>
                                                    <a href="{{ route('cancel-dashboard-order',$order->id) }}" class="btn btn-danger">CANCEL</a>
                                                @endif
                                            @else
                                                @if($order->type_of_service == "Antar")
                                                    <a href="{{route('antardekat-dashboard-order',$order->id)}}" class="btn btn-info" style="width: 4cm">Antar Dekat</a>
                                                    <a href="{{route('antarjauh-dashboard-order',$order->id)}}" class="btn btn-secondary" style="width: 4cm;margin-top: .2cm">Antar Jauh</a>
                                                @endif
                                                @if($order->status === "waiting")
                                                    <a href="{{ route('acc-dashboard-order',$order->id) }}" class="btn btn-success">ACC</a>
                                                    <a href="{{ route('cancel-dashboard-order',$order->id) }}" class="btn btn-danger">CANCEL</a>
                                                @endif
                                            @endif
                                            @if($order->type_payment == "Cash" && $order->status == "unpaid")
                                                    <a href="{{route('paid-dashboard-order',$order->id)}}" class="btn btn-success">Lunas</a>
                                            @endif
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="imageModal-{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel-{{ $order->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="imageModalLabel-{{ $order->id }}">Zoomed Image for Order #{{ $order->id }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <img src="{{ $order->getFirstMediaUrl('image') }}" alt="Zoomed Image" style="max-width: 100%; max-height: 500px;">
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
