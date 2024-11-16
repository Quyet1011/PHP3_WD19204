<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // 8 sản phẩm có giá cao nhất
        $highestPriceBooks = DB::table('books')
            ->orderByDesc('price')
            ->take(8)
            ->get();
    
        // 8 sản phẩm có giá thấp nhất
        $lowestPriceBooks = DB::table('books')
            ->orderBy('price')
            ->take(8)
            ->get();
    
        // Lấy danh sách danh mục
        $categories = DB::table('categories')->get();
    
        return view('home', compact('highestPriceBooks', 'lowestPriceBooks', 'categories'));
    }
    
}
