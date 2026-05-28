<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをproductsテーブルから取得し、変数$productに代入する
        // $product = Product::find($id);

        // 変数$productをproducts/show.blade.phpファイルに渡す
        return view('products.show', compact('product'));
    }
}
