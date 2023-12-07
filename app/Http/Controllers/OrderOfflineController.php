<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\TypeOfPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class OrderOfflineController extends Controller
{
    public function index(){
        $products = Product::all();
        $orders = Order::where('type_of_service','Dine In')->get();
        return view('dashboard.order-offline.index',compact('products','orders'));
    }
    public function create(){
        $payments = TypeOfPayment::all();
        $products = Product::all();
        return view('dashboard.order-offline.create',compact('products','payments'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type_payment' => 'required',
            'products' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }
        $totalPrice = 0;
        $productsData = [];
        if($request->input('products') !== null){
            foreach ($request->input('products') as $product){
                if(isset($product['status'])){
                    $dataProduct = Product::where('id',$product['id'])->first();
                    $totalPrice += $dataProduct->price * $product['total'];
                    $store_product = [
                        'id' => $product['id'],
                        'total' => $product['total']
                    ];
                    array_push($productsData,$store_product);
                }
            }
        }
        try {
            Order::create([
                'id' => Str::uuid(),
                'id_admin' => '96d55693-cd5a-4704-824d-d6b124122a06',
                'products' => json_encode($productsData),
                'total_price' => $totalPrice,
                'type_of_service' => 'Dine In',
                'type_payment' => $request->input('type_payment'),
                'status' => 'Lunas'
            ]);
            return back()->with('success','Order berhasil diselesaikan');
        }catch (\Exception $exception){
            return back()->with('error',$exception->getMessage());
        }
    }
}
