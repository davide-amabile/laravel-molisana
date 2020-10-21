@extends('layouts.main')

@section('title')
  PRODOTTI
@endsection

@section('mainContent')
<main>
  <div class="big_container">
    <div class="wrapper_img">
        @foreach ($paste as $key => $varieta)
        <div class="box_type">
        <div class=title>
          <h2>{{$key}}</h2>
        </div>
        @foreach ($varieta as $prodotto)
          <div class="box_pasta">
            <img class="img_pasta" src="{{$prodotto['src']}}" alt="">
            {{-- overlay --}}
            <div class="overlay">
            <a href="{{route('show', $prodotto['id'])}}">{{$prodotto['titolo']}}</a>
              <img class='icn_img' src="{{asset("images/icon_1.svg")}}" alt="">
            </div>
          </div>  
        @endforeach
      @endforeach
      </div> 
  </div>
</main>
@endsection