<?php



Route::get('Lang/{lang}',function($lang){

    if(in_array($lang,['en','ar'])){
        if(session()->has('lang')){
            session()->forget('lang');
        }
        session()->put('lang',$lang);
    }
    else{
        session()->put('lang','en');
    }

    return back();
});

//ةmiddleware lang
Route::group(['middleware'=>'Lang'],function(){


Route::get('/','index@index')->name('homepage');


Route::group(['prefix' => 'product'], function () {

    Route::get('/','productController@allProduct')->name('product');

    Route::get('{id}','shopmachine@productDetails');


});
Route::group(['prefix' => 'cart'], function () {

    Route::get('/','CardController@index')->name('cart.index');
    Route::post('/','CardController@store')->name('cart.index');

    Route::get('destroy',function(){
        Cart::destroy();
        return redirect()->route('cart.index')->with('sucess_message','Shop Card Is Destroyed !');
    });

    Route::delete('{id}','CardController@destroy')->name('cart.delete');

    Route::post('{id}','CardController@saveForLater')->name('cart.wishlist');




});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



});

