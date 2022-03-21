<?php
use App\Models\Product;

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SotuvOfisi extends Controller
{
    public function index(){
        $cate = Category::all();
        return view('shop.index',compact('cate'));
    }
    public function showcate(Request $request){
        $product = Product::find('id',$request->cateid);
        dd($product);
    }
}
