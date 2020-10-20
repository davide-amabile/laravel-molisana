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

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
      <title>Pasta Molisana</title>
  </head>
  <body>
    <header>
      <!-- logo pasta molisana-->
      <div class="img_container">
        <img class="img_logo" src="{{asset("images/logo_molisana.png")}}" alt="">
      </div>
      <!-- logo pasta molisana-->
      <!-- nav menu -->
      <div class="nav_pagine">
        <ul>
        <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('prodotti')}}">Prodotti</a></li>
          <li><a href="{{route('news')}}">News</a></li>
        </ul>
      </div>
      <!--/ nav menu -->
    </header>
    
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

    <footer>

    </footer>

    
  </body>
</html>