<?php
use App\Models\Product;

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sotuv_Royxati;
use App\Models\vaqtincha;
use DB;
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
        foreach($product as $product){
            $vaqt = vaqtincha::create([
                    'product_id'=>$product['id'],
                    'product_name'=>$product['name'],
                    'product_count'=>$product['count'],
                    'price'=>$product['shop_price'],
            ]);
        }
        $prod_vaqt = vaqtincha::all();
        $som = 0;
        foreach($prod_vaqt as $pul){
            $som = $som + $pul['shop_price'];
        }
        
        // dd($product);
        return view('shop.create',compact('cate','prod_vaqt','som'));

    }
    public function sotish(Request $request){
        // dd($request->prod_id);
        // dd($request->sotish_soni[0]);
        $i = 0;
        foreach($request->prod_id as $prod_id){
            // dd(intval($prod_id[$i]));
            // $product = Product::find(intval($prod_id[$i]));
            $s = intval($prod_id);
           // dd($s);
            $pro = Product::where('id', $s )->get();
            // // dd($product);
            // dd($product->count);
            foreach($pro as $pro){
            $update = $pro->update([
                'count' => $pro->count - intval($request->sotish_soni[$i])
            ]);

            }
            // dd($product);
            $i = $i + 1;

        }
        

        if($update){
            $vaqt = vaqtincha::get();
            foreach($vaqt as $vaqt){
                $delete = $vaqt->delete();
            }
            if($delete){
                return redirect()->route('shop-index');
            }
            else{
                return redirect()->back();
            }
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
