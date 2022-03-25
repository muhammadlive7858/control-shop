<?php
use App\Models\Product;

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use App\Models\Search;

use App\Models\vaqtincha;

use Illuminate\Http\Request;

class SotuvOfisi extends Controller
{   
    // public array = [];
    public function index(){
        $cate = Category::all();
        $product = Product::all();
        return view('shop.index',compact('cate','product'));
    }
    // public function showcate(Request $request){
    //     $cate = Category::all();
    //     $product = Product::all()->where('category_id',$request->input('cateid'));
    //     // dd($product);
    //     return view('shop.index',compact('product','cate'));
    // }
    public function productid(Request $request){

        $cate = Category::all();
        $product = Product::all()->where('producttime',$request->input('productid'));
        
        

        // dd($product);
        // return view('shop.create',compact('product','cate'));
        foreach($product as $product){
            $vaqt = vaqtincha::create([
                    'product_id'=>$product['id'],
                    'product_name'=>$product['name'],
                    'product_count'=>$product['count'],
            ]);
        }
        $prod_vaqt = vaqtincha::all();
        
        // dd($product);
        return view('shop.create',compact('cate','prod_vaqt'));

    }
    public function sotish(Request $request){
        dd($request);
        foreach($request->prod_id as $sotish){
            $i = 0;
            $prod = Product::find(($sotish[$i])*1);
            $prod_count = $prod['count'];
            foreach($request->sotish_soni as $count){
                $prod = $prod->update([
                    'count' => $prod_count - $count[$i]
                ]);
            }
        }

        $vaqt = vaqtincha::get();
        foreach($vaqt as $vaqt){
            $delete = $vaqt->delete();
        }
        if(true){
            return redirect()->route('shop-index');
        }
        else{
            return redirect()->back();
        }
    }
    public function tozalash(){
        $vaqt = vaqtincha::get();
        foreach($vaqt as $vaqt){
            $delete = $vaqt->delete();
        }
        if(true){
            return redirect()->route('shop-index');
        }
        else{
            return redirect()->back();
        }
    }
}
