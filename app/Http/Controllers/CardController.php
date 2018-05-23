<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CardController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		  

		return view('Pages.shopcard');
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
		//vaild one -> Cart::add('293ad', 'Product 1', 1, 9.99);

		Cart::add($request->id,$request->name,$request->qty,$request->price)->associate('App\Product');


          $Ccontent=Cart::content();
          $Ccount=Cart::count();

		$request->session()->flash('count',$Ccount);


		return redirect()->route('cart.index');
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
		Cart::remove($id);
		return back()->with('sucess_message','Item has been removed!');
	}

	public function saveForLater($id){
		$item=Cart::get($id);
		Cart::remove($id);
Cart::instance('wishlist')->add($item->id,$item->name,$item->qty,$item->price)->associate('App\Product');


		return redirect()->route('cart.index')->with('sucess_message','Item was Added to your WishList !');
	}
}


