@extends('layouts.main')

@section('title', 'Elenco | Comics')

@section('content')

<section class="container flex-center">
    
    <div class="cards">

        @foreach($cards as $card)
            <div class="card">
                <img src=" {{ $card['image'] }} " alt=" {{ $card['title']}} ">
                <span class="title"> {{ $card['title'] }}</span> 
            </div>
        @endforeach

        

    </div>

    <a class="btn flex-center" href="#">load more</a>

</section>


@endsection