@extends('layouts.main')

@php
  // importare array tipi pasta
  $array = config('array_pasta');
  // creare i tre array vuoti
  
  $lunga =[];

  $corta= [];

  $cortissima = [];

  // pusshare nei tre diffetenti array in base al tipo
 foreach ($array as $k => $product) {
   if($product['tipo'] == 'lunga'){
     $lunga[] = $product;
   } elseif ($product['tipo'] == 'corta') {
     $corta[] = $product;
   } elseif ($product['tipo'] == 'cortissima') {
     $cortissima[] = $product;
   }
 }

@endphp

@section('title')
  HOME-LA MOLISANA
@endsection

@section('mainContent')
  <main>
    <!--template array pasta lunga lunga-->
    @foreach ($lunga as $j)
      <h2>{{$j['tipo']}}</h2> 
      <img src="{{$j['src']}}" alt=""> 
    @endforeach

    <!--template array pasta corta-->
    @foreach ($corta as $j)
      <h2>{{$j['tipo']}}</h2> 
      <img src="{{$j['src']}}" alt=""> 
    @endforeach

    <!--template array pasta cortissima-->
    @foreach ($cortissima as $j)
      <h2>{{$j['tipo']}}</h2> 
      <img src="{{$j['src']}}" alt=""> 
    @endforeach
  </main>
@endsection


    
    

  