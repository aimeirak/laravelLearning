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
}
