@extends('layout.app')

@section('title', 'Films Page')

@section('content')
<div class="films">
    <section class="container">
            <div class="description container">
                @foreach($films as $film)
                    <div>
                        <img src="{{$film->poster}}" alt="">
                        <h2>{{$film->title}}</h2>
                        <!-- <p> {{$film->description}} </p> -->
                    </div>
                @endforeach
            </div>
    </section>
</div>
@endsection