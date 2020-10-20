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
    <div class="big_container">
      <div class="wrapper_img">
          <!--template array pasta lunga lunga-->
        <h2>LE LUNGHE</h2>
        <div class="box_type">
          @foreach ($lunga as $j)
          <div class="box_pasta">
            <img class="img_pasta" src="{{$j['src']}}" alt="">
          </div>
        @endforeach
        </div>
        
        <h2>LE CORTE</h2>
        <div class="box_type">
          <!--template array pasta corta-->
          @foreach ($corta as $j)
            <div class="box_pasta">
              <img class="img_pasta" src="{{$j['src']}}" alt="">
            </div>
          @endforeach
        </div>
        
        <h2>LE CORTISSIME</h2>
        <div class="box_type">
          <!--template array pasta cortissima-->
          @foreach ($cortissima as $j)
            <div class="box_pasta">
              <img class="img_pasta" src="{{$j['src']}}" alt="">
            </div>
          @endforeach 
        </div>
      </div> 
    </div>
  </main>
@endsection


    
    

  