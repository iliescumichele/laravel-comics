@extends('layouts.layout-comics')

@section('content-comics')
    <div class="jumbotron">
        <!-- img inserita in css -->
    </div>

    <div class="main-cards-comp">
        <div class="container">
            <div class="curent-series">
                <strong>CURENT SERIES</strong>
            </div>

            <div class="cards">

                @foreach ($comics as $item)
                    <div class="card">
                        <div class="card-img">
                            <a href="">
                                <img src="{{ $item->image }}" :alt="{{ $item->title }}">
                            </a>
                        </div>
                        <a href=""><p>{{ $item->title }}</p></a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection