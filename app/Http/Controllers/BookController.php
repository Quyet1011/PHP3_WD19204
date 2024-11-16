<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    // Chi tiết sách theo id
    public function show($id)
    {
        // Truy vấn chi tiết sách từ bảng books
        $book = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->where('books.id', $id)
            ->first();
        // dd($book);
        if (!$book) {
            return abort(404); // Nếu không tìm thấy sách, trả về lỗi 404
        }

        // Lấy danh mục của sách từ bảng categories
        $categories = DB::table('categories')
            ->where('id', $book->category_id)
            ->get(); // Lấy danh mục sách

        // Trả về view chi tiết sách với cả thông tin sách và danh mục
        return view('detail', compact('book', 'categories'));
    }

    // Danh sách sách theo loại sách
    public function list($id)
    {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->where('category_id', $id)
            ->paginate(8);

        $categories = DB::table('categories')->get();

        return view('books', compact('books', 'categories'));
    }
}
