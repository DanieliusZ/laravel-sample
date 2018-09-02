@extends('layouts.app')
@section('content')
    <h2>Our PinWins</h2>
    <div class="d-flex">
        @if($cards)
        @foreach($cards as $card)
            <div class="card">
                <img class="card-img-top" style="max-width:18rem" src={{$card->image_url}} alt="Card image cap">
                <div class="card-body">
                {{-- <h3 class="card-title"><a class="card-link" href="/cards/{{$card->id}}">{{$card->title}}</a></h3> --}}
                <h3 class="card-title">{{$card->title}}</h3>
                <small>Written on {{$card->created_at}} by {{$card->user->name}}</small>
                </div>
            </div>
        @endforeach
        @else
            <p>No PinWins yet...</p>
        @endif
    </div>
@endsection