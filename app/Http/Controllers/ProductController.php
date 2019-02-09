<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;


class ProductController extends Controller
{
    //
    public function list(){

    	$data = Product::all();
    	return $data;
    }
<<<<<<< HEAD
=======
    public function insert(Request $request)
    {
    	// print_r($request->input'id'));
    	$product = new Product;
    	$product->id = $request->input('id');
    	$product->Name = $request->input('Name');
    	$product->descrition = $request->input('descrition');
    	$product->price = $request->input('price');
    	$product->save(); 
    }
>>>>>>> develop
}
