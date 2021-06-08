@extends('layouts.main')

@section('title', 'Elenco | Comics')

@section('content')

<section class="container">
    <div class="cards">

        @foreach($cards as $card)
            <div class="card">
                <img src=" {{ $card['image'] }} " alt=" {{ $card['title']}} ">
            </div>
        @endforeach

    </div>

    

</section>


@endsection