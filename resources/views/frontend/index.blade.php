@extends('frontend.master')

@section('content')
<div class="home">
    <div class="bg">
        <div class="slide">
            <img src="{{asset('img/bg1.jpg')}}" alt="bg images" />
        </div>
        <div class="slide">
            <img src="{{asset('img/bg2.jpg')}}" alt="bg images" />
        </div>
        <div class="slide">
            <img src="{{asset('img/bg3.jpg')}}" alt="bg images" />
        </div>
    </div>
    <h1 class="fade-in col-6">Cafe Shop</h1>
    <h2 class="welcome col-6">Welcome from Cafe shop.</h2>
    <!-- <button class="let-order"><a href="home.html">Let's order</a></button> -->
    <!-- <div class="testing"> 
            <button>Let's order</button><br>
            <p>Thanks for ordering to us, we will try our best.</p>
        </div> -->
    <!-- <nav class="lets-order">
            <button>Let's order</button>
            <p>Thanks for ordering to us, we will try our best.</p>
        </nav> -->
    <button class="lets-order mt-4 ml-2" onclick="letsOrder()">
        Let's order
    </button>
</div>
@endsection