<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $makananTerjual = $this->getTotalTerjualByCategory('Makanan');
        $minumanTerjual = $this->getTotalTerjualByCategory('Minuman');
        $kopiTerjual = $this->getTotalTerjualByCategory('Produk Kopi');
        $totalPendapatan = $this->getTotalPendapatan();
        return view('dashboard.index', compact('makananTerjual', 'minumanTerjual', 'kopiTerjual', 'totalPendapatan'));
    }
    public function getMonthlyRevenue()
    {
        $monthlyRevenue = Order::selectRaw('SUM(total_price) as total, DATE_FORMAT(created_at, "%Y-%m") as month')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        $labels = $monthlyRevenue->pluck('month');
        $data = $monthlyRevenue->pluck('total');

        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }
    public function getYearlyRevenue()
    {
        $yearlyRevenue = Order::selectRaw('SUM(total_price) as total, YEAR(created_at) as year')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        $labels = $yearlyRevenue->pluck('year');
        $data = $yearlyRevenue->pluck('total');
        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }
    private function getTotalTerjualByCategory($category)
    {
        $orders = Order::all();
        $totalTerjual = 0;
        foreach ($orders as $order) {
            $products = json_decode($order->products);
            foreach ($products as $product) {
                $productData = Product::find($product->id);
                $categoryData = $productData->category;
                if ($categoryData->name === $category) {
                    $totalTerjual += $product->total;
                }
            }
        }
        return $totalTerjual;
    }


    private function getTotalPendapatan()
    {
        $orders = Order::all();
        $totalPendapatan = 0;
        foreach ($orders as $order) {
            $totalPendapatan += $order->total_price;
        }
        return $totalPendapatan;
    }
}
