@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h2 class="my-4">Chats sportifs</h2>
        <p>Cette sélection de photo s'adresse à tous les fans de félins actifs ! Retrouvez ici nos chats les plus joueurs et dynamiques :D.</p>
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
