<?php

namespace App\Http\Controllers;

use App\Pcategory;
use App\Product;

use Illuminate\Http\Request;

class shopmachine extends Controller
{
    public function productDetails($id){
        $product=Product::find($id);
        $category=Pcategory::where('id',$product->pcategory_id)->get();
        $otherProduct=Product::inrandomOrder()->take(8)->get();
        
        return view('Pages.productDetails',[
            'product'=>$product,
            'otherProduct'=>$otherProduct,
            'category'=>$category

        ]);


    }
}
