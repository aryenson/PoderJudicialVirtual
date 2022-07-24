<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shopping;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Lstproductos=Product::all();
        return view('home',compact('Lstproductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Shopping;
        $shop->idUser=$request->input('idUser');
        $shop->idProduct=$request->input('ddlproductos');
        $shop->save();

        
        $produ=DB::table('products')
        ->select('id','price','tax')
        ->where('id','=', $request->input('ddlproductos'))
        ->first();

        

        $inv = new Invoice;
        $inv->IdShopping=$shop->id;
        $inv->TotalCost=((($produ->price)*($produ->tax)/100)+$produ->price);
        $inv->TotalTax=(($produ->price)*($produ->tax)/100);
        $inv->save();

        return "Guardado";
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
        //
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
        //
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
