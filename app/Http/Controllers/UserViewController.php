<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\TempOrder;
use App\Models\TypeOfPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserViewController extends Controller
{
    public function home(){
        return view('userview.home');
    }
    public function about(){
        return view('userview.about');
    }

    public function article(){
        $posts = Post::where('id', '<>', '2b86c667-ea4e-47e0-ac35-8a7c8d8c6303')->get();
        $main = Post::where('id','2b86c667-ea4e-47e0-ac35-8a7c8d8c6303')->first();
        return view('userview.article',compact('posts','main'));
    }
    public function detailArticle($slug){
        $title = $this->slugToTitle($slug);
        $post = Post::where('title',$title)->first();
        return view('userview.detail-article',compact('post'));
    }
    function slugToTitle($slug) {
        $title = str_replace('-', ' ', $slug);
        $title = ucwords($title);
        $title = preg_replace_callback('/:([^ ])/', function($matches) {
            return ':' . strtoupper($matches[1]);
        }, $title);
        return $title;
    }


    public function contact(){
        return view('userview.contact');
    }

    public function event(){
        $events = Event::orderBy('created_at', 'asc')->get();
        return view('userview.event',compact('events'));
    }

    public function product(){
        $coffees  = Product::join('product_categories', 'products.id_category', '=', 'product_categories.id')
            ->where('product_categories.name', 'Produk Kopi')
            ->select('products.*')
            ->get();
        $drinks = Product::join('product_categories', 'products.id_category', '=', 'product_categories.id')
            ->where('product_categories.name', 'Makanan')
            ->select('products.*')
            ->get();
        $foods = Product::join('product_categories', 'products.id_category', '=', 'product_categories.id')
            ->where('product_categories.name', 'Minuman')
            ->select('products.*')
            ->get();
        return view('userview.product',compact('coffees','drinks','foods'));
    }

    public function toCheckout($id){
        TempOrder::create([
            'id' => Str::uuid(),
            'id_user' => Auth::user()->getAuthIdentifier(),
            'id_product' => $id
        ]);
        return back()->with('success','Berhasil menambahkan product ke keranjang');
    }

    public function checkoutPage(){
        $payments = TypeOfPayment::all();
        $orders = TempOrder::where('id_user',Auth::user()->getAuthIdentifier())->get();
        return view('userview.checkout',compact('orders','payments'));
    }
    public function checkoutAction(Request $request){
        $validator = Validator::make($request->all(), [
            'type_payment' => 'required',
            'products' => 'required',
            'type_of_service' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }
        $totalPrice = 0;
        $productsData = [];
        if($request->input('products') !== null){
            foreach ($request->input('products') as $product){
                $dataProduct = Product::where('id',$product['id'])->first();
                $totalPrice += $dataProduct->price * $product['total'];
                $store_product = [
                    'id' => $product['id'],
                    'total' => $product['total']
                ];
                array_push($productsData,$store_product);
            }
        }
        if($request->input('type_of_service') == 'Antar Dekat'){
            $totalPrice += 10000;
        }
        if($request->input('type_of_service') == 'Antar Jauh'){
            $totalPrice += 25000;
        }
        try {
            Order::create([
                'id' => Str::uuid(),
                'id_user' => Auth::user()->getAuthIdentifier(),
                'products' => json_encode($productsData),
                'total_price' => $totalPrice,
                'type_of_service' => $request->input('type_of_service'),
                'type_payment' => $request->input('type_payment'),
                'status' => 'unpaid'
            ]);
            TempOrder::where('id_user', Auth::user()->id)->delete();
            return redirect('/product')->with('success','Order berhasil diselesaikan');
        }catch (\Exception $exception){
            return back()->with('error',$exception->getMessage());
        }
    }

    public function orderPage(){
        $products = Product::get();
        $orders = Order::where('id_user',Auth::user()->id)->get();
        return view('userview.order',compact('orders','products'));
    }
}
