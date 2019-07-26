@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h3 class="my-4">LOLCATS</h3>
        <p>LOLcats are image macros consisting of humorous photos of cats with superimposed text written in a form of broken English known as lolspeak.</p>
        <p>LOLcat meme gained much of its traction through the weekly ritual of Caturday on 4chan and I Can Has Cheezburger.</p>
      </div>

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>

        <div class="row">
            @include('includes.product')
        </div>
      </div>
    </div>
</div>


@endsection
