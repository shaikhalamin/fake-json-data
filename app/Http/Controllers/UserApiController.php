<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProductCollection;

use Illuminate\Http\Request;

use App\Product;

class UserApiController extends Controller
{
    public function getproducts(Request $request){
         $query = Product::orderBy('id', 'desc')->paginate(6);
        return new ProductCollection($query);
    }
    
}
