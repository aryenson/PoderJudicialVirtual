<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    
    public function index() {


        $fact=DB::table('invoice')
        ->select('users.name','TotalCost','Totaltax')
        ->join('shopping', 'invoice.IdShopping', '=', 'shopping.id')
        ->join('products', 'products.id', '=', 'shopping.idProduct')
        ->join('users', 'users.id', '=', 'shopping.idUser')
        ->orderBy('invoice.created_at','asc')
        ->paginate(10);

        $prod=DB::table('invoice')
        ->select('products.name','price','tax')
        ->join('shopping', 'invoice.IdShopping', '=', 'shopping.id')
        ->join('products', 'products.id', '=', 'shopping.idProduct')
        ->join('users', 'users.id', '=', 'shopping.idUser')
        ->orderBy('invoice.created_at','asc')
        ->paginate(10);


        return view('admin.index',compact('fact','prod'));

    }
}
