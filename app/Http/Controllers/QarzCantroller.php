<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Qarz;
use Illuminate\Http\Request;

use function React\Promise\reduce;

class QarzCantroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $index = Qarz::paginate();
        return view('Qarz.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $moneyName = Product::all('id', 'name','maxsulotnomeri');
        return view('Qarz.create' , compact('moneyName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //dd($exc);
     
       
      
         // $x = $exc['name'];
    
        $create = Qarz::create($request->input());
     
      //dd($create);
   
    //
      
     
     return redirect()->route('qarz.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Qarz::find($id);
        $moneyName = Product::all('id', 'name','maxsulotnomeri');
        return view('Qarz.edit',  compact('edit' , 'moneyName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Qarz::find($id);
        $result = $update->update($request->input());

        if($result){
            return redirect()->round('qarz.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
