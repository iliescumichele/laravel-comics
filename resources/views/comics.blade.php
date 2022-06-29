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

            @dump($comics)


            <div class="cards">

                <!--
                <cardComp 
                    v-for="(cardItem, index) in cardList"
                    :key="`card${index}`"
                    :cardData="cardItem"
                />
                -->


            </div>
        </div>
    </div>

@endsection