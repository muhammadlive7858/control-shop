<?php
use App\Models\Product;

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SotuvOfisi extends Controller
{   
    public array = [];
    public function index(){
        $cate = Category::all();
        $product = Product::all();
        return view('shop.index',compact('cate','product'));
    }
    public function showcate(Request $request){
        $cate = Category::all();
        $product = Product::all()->where('category_id',$request->input('cateid'));
        // dd($product);
        return view('shop.index',compact('product','cate'));
    }
    public function productid(Request $request){
        $cate = Category::all();
        $product = Product::all()->where('producttime',$request->input('productid'));
        // dd($product);
        return view('shop.index',compact('product','cate'));

    }
}
