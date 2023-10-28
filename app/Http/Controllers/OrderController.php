<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('dashboard.order.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        if ($order) {
            return view('dashboard.order.show', compact('order'));
        } else {
            return back()->with('error', 'Data pesanan tidak ditemukan');
        }
    }

    public function create()
    {
        $products = Product::all();
        $admins = User::where('level', 'admin')->orWhere('level', 'superadmin')->get();
        return view('dashboard.order.create', compact('products', 'admins'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_product' => 'required|exists:products,id',
            'id_admin' => 'required|exists:users,id',
            'id_user' => 'required|exists:users,id',
            'order_category' => 'required',
            'total_product' => 'required|numeric',
            'total_price' => 'required|numeric',
            'expedition' => 'required',
            'status' => 'required',
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $id = Str::uuid();
            $data = $request->only([
                'id_product',
                'id_admin',
                'id_user',
                'order_category',
                'total_product',
                'total_price',
                'expedition',
                'status',
            ]);
            $data['id'] = $id;

            $proofOfPayment = $request->file('proof_of_payment');
            $proofOfPaymentFileName = $id . '.' . $proofOfPayment->getClientOriginalExtension();
            $proofOfPayment->move(public_path('order_payment_images'), $proofOfPaymentFileName);
            $data['proof_of_payment'] = $proofOfPaymentFileName;

            $dataCreated = Order::create($data);
            if ($dataCreated) {
                return redirect(route('order.index'))->with('success', 'Pesanan berhasil dibuat.');
            } else {
                return back()->with('error', 'Pesanan gagal dibuat');
            }
        }
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $products = Product::all();
        $admins = User::where('level', 'admin')->orWhere('level', 'superadmin')->get();
        return view('dashboard.order.edit', compact('order', 'products', 'admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_product' => 'required|exists:products,id',
            'id_admin' => 'required|exists:users,id',
            'id_user' => 'required|exists:users,id',
            'order_category' => 'required',
            'total_product' => 'required|numeric',
            'total_price' => 'required|numeric',
            'expedition' => 'required',
            'status' => 'required',
            'proof_of_payment' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $order = Order::find($id);
            if (!$order) {
                return back()->with('error', 'Data pesanan tidak ditemukan');
            } else {
                $data = $request->only([
                    'id_product',
                    'id_admin',
                    'id_user',
                    'order_category',
                    'total_product',
                    'total_price',
                    'expedition',
                    'status',
                ]);

                if ($request->hasFile('proof_of_payment')) {
                    $proofOfPayment = $request->file('proof_of_payment');
                    $proofOfPaymentFileName = $id . '.' . $proofOfPayment->getClientOriginalExtension();
                    $proofOfPayment->move(public_path('order_payment_images'), $proofOfPaymentFileName);
                    $data['proof_of_payment'] = $proofOfPaymentFileName;

                    if (File::exists(public_path('order_payment_images/' . $order->proof_of_payment))) {
                        File::delete(public_path('order_payment_images/' . $order->proof_of_payment));
                    }
                }

                $dataUpdated = $order->update($data);
                if ($dataUpdated) {
                    return redirect(route('order.index'))->with('success', 'Pesanan berhasil diedit.');
                } else {
                    return back()->with('error', 'Pesanan gagal diedit');
                }
            }
        }
    }

public function destroy($id)
{
    $order = Order::find($id);
    if (!$order) {
        return back()->with('error', 'Data pesanan tidak ditemukan');
    }

    if (File::exists(public_path('order_payment_images/' . $order->proof_of_payment))) {
        File::delete(public_path('order_payment_images/' . $order->proof_of_payment));
    }

    $order->delete();
    return redirect(route('order.index'))->with('success', 'Pesanan berhasil dihapus.');
}
}
