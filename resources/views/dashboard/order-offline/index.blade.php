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
                                    <th>PRODUCTS</th>
                                    <th>TOTAL HARGA</th>
                                    <th>TIPE PEMBAYARAN</th>
                                    <th>WAKTU</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        @if(isset($orders->admin))
                                            <td>{{$order->admin->name}}</td>
                                        @else
                                            <td>Belum ada admin</td>
                                        @endif
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
                                        <td>{{$order->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
