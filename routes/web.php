<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home');
})-> name('home');



Route::get('/prodotti', function () {
    // importare array
    $array = config('array_pasta');
    // creare array vuoto
    $type = [];
    // ciclo foreach per creare un array
    foreach ($array as $key => $prodotto) {
        // assegnare un id
        $prodotto["id"] = $key;
        //pushare in $type
        $type[$prodotto["tipo"]][] = $prodotto;
    }  
    
    return view('prodotti', ["paste" => $type]);
})-> name('prodotti');


Route::get('/prodotti/show/{id}', function ($id) {
    
    $prodotto = config("array_pasta.$id");
    // dd($prodotto);
    
    return view('sing-product', ["prodotto"=> $prodotto]);
    
    
})-> name('show');



Route::get('/news', function () {
    return view('news');
})-> name('news');

