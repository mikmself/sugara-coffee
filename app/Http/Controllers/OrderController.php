<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $products = Product::all();
        $orders = Order::where('type_of_service', '<>', 'Dine In')->latest()->get();
        return view('dashboard.order.index',compact('products','orders'));
    }
    public function uploadPayment(Request $request, $id)
    {
        $order = Order::whereId($id)->first();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imagePath = $request->file('image')->store('payment_images', 'public');
        $order->addMedia(storage_path('app/public/' . $imagePath))
            ->toMediaCollection('image');
        $order->update([
            'status' => 'waiting'
        ]);
        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
    public function acc($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'id_admin' => Auth::user()->id,
            'status' => 'paid'
        ]);
        return redirect()->back()->with('success', 'Order marked as paid successfully!');
    }
    public function cancel($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'id_admin' => Auth::user()->id,
            'status' => 'cancelled'
        ]);

        return redirect()->back()->with('success', 'Order cancelled successfully!');
    }
}
