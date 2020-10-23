@extends('layouts.main')

@section('title')
    molisan-prodotti
@endsection
@section('mainContent')
<main>
    <div id="wrapper_sign">
        {{-- container per immagini --}}
        <div class="container_small">
            <div class="titolo_prodotto">
                <h1>{{$prodotto["titolo"]}}</h1>
            </div>
            <img class="up_img" src="{{$prodotto["src-h"]}}" alt="">
            <img class="bottom_img" src="{{$prodotto["src-p"]}}" alt="">
            <div class="descrizione">
                {!!$prodotto["descrizione"]!!}
            </div>
        </div>
        {{-- fine container small --}}
    </div>
</main>

@endsection