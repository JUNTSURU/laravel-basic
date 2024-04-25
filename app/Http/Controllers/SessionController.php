<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SessionController extends Controller
{
    public function index(){
        // セッションからproduct_idキーの値を取得する
        $product_id= session('product_id');

        $product= Product::find($product_id);
        
        return view('sessions.index', compact('product'));
    }

    public function create(){
        $products=Product::all();

        return view('sessions.create',compact('products'));
    }

    public function store(Request $request){
        $request->validate([
            'product_id'=>'required|exists:products,id'
        ]);

        // キー名がproduct_id、値が商品idのデータをセッションに保存する
        session(['product_id'=>$request->input('product_id')]);

        return redirect('/sessions');
    }

    public function destroy(){
        // セッションからproduct_idキーとその値を削除する
        session()->forget('product_id');

        return redirect('/sessions');
    }
}
