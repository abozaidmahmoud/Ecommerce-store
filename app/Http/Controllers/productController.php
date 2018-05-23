<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Pcategory;
use App\Product;


class productController extends Controller
{
    public function allProduct(){

        if(request()->category){
            $product=Product::where('pcategory_id',request()->category);
            $categoryName=Pcategory::where('id',request()->category)->get();
            $categories = Pcategory::all();

        }else {


            $product = Product::take(10);
            $categories = Pcategory::all();
            $categoryName='Featured';
        }

        if(request()->sort='low-high'){

            $product=$product->orderBy('price')->paginate(9);

        }elseif (request()->sort='high-low'){

            $product=$product->orderBy('price','desc')->paginate(9);

        }else{
            $product=$product->paginate(9);
        }

        return view('Pages.product',[
            'products'=>$product,
            'categories'=>$categories,
            'categoryName'=>$categoryName,

        ]);


    }

    public function checkout(Request $request){
        if($request->hasMethod('post')){
            

        }else{
            $Content=Card::Content();


        }



return view('checkout')

    }


}
