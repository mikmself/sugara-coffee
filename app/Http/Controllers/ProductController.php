<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('dashboard.product.show', compact('product'));
        } else {
            return back()->with('error', 'Data produk tidak ditemukan');
        }
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('dashboard.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_category' => 'required|exists:product_categories,id',
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $id = Str::uuid();
            $data = $request->only([
                'id_category',
                'name',
                'description',
                'stock',
                'price',
            ]);
            $data['id'] = $id;

            $image = $request->file('image');
            $imageFileName = Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_images'), $imageFileName);
            $data['image'] = $imageFileName;

            $dataCreated = Product::create($data);
            if ($dataCreated) {
                return redirect(route('index-dashboard-product'))->with('success', 'Produk berhasil dibuat.');
            } else {
                return back()->with('error', 'Produk gagal dibuat');
            }
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = ProductCategory::all();
        return view('dashboard.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_category' => 'required|exists:product_categories,id',
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $product = Product::find($id);
            if (!$product) {
                return back()->with('error', 'Data produk tidak ditemukan');
            } else {
                $data = $request->only([
                    'id_category',
                    'name',
                    'description',
                    'stock',
                    'price',
                ]);
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageFileName = Str::random(30) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('product_images'), $imageFileName);
                    $data['image'] = $imageFileName;
                    if (File::exists(public_path('product_images/' . $product->image))) {
                        File::delete(public_path('product_images/' . $product->image));
                    }
                }
                $dataUpdated = $product->update($data);
                if ($dataUpdated) {
                    return redirect(route('index-dashboard-product'))->with('success', 'Produk berhasil diedit.');
                } else {
                    return back()->with('error', 'Produk gagal diedit');
                }
            }
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return back()->with('error', 'Data produk tidak ditemukan');
        }
        if (File::exists(public_path('product_images/' . $product->image))) {
            File::delete(public_path('product_images/' . $product->image));
        }

        $product->delete();
        return redirect(route('index-dashboard-product'))->with('success', 'Produk berhasil dihapus.');
    }
}
