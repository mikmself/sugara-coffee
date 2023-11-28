<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

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

}
