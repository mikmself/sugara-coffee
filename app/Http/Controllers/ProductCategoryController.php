<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('dashboard.product_category.index', compact('categories'));
    }

    public function show($id)
    {
        $category = ProductCategory::find($id);
        if ($category) {
            return view('dashboard.product_category.show', compact('category'));
        } else {
            return back()->with('error', 'Data kategori produk tidak ditemukan');
        }
    }

    public function create()
    {
        return view('dashboard.product_category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $id = Str::uuid();
            $data = $request->only([
                'name',
                'description',
            ]);
            $data['id'] = $id;
            $dataCreated = ProductCategory::create($data);
            if ($dataCreated) {
                return redirect(route('product_category.index'))->with('success', 'Kategori produk berhasil dibuat.');
            } else {
                return back()->with('error', 'Kategori produk gagal dibuat');
            }
        }
    }

    public function edit($id)
    {
        $category = ProductCategory::find($id);
        return view('dashboard.product_category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        } else {
            $category = ProductCategory::find($id);
            if (!$category) {
                return back()->with('error', 'Data kategori produk tidak ditemukan');
            } else {
                $data = $request->only([
                    'name',
                    'description',
                ]);
                $dataUpdated = $category->update($data);
                if ($dataUpdated) {
                    return redirect(route('product_category.index'))->with('success', 'Kategori produk berhasil diedit.');
                } else {
                    return back()->with('error', 'Kategori produk gagal diedit');
                }
            }
        }
    }

    public function destroy($id)
    {
        $category = ProductCategory::find($id);
        if (!$category) {
            return back()->with('error', 'Data kategori produk tidak ditemukan');
        }
        $category->delete();
        return redirect(route('product_category.index'))->with('success', 'Kategori produk berhasil dihapus.');
    }
}
