@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h2 class="my-4">Chats mignons</h2>
        <p>Retrouvez toutes les chats les plus mignons possibles à travers notre liste de photos sélectionnées avec soin par notre équipe !</p>

      </div>
      <div class="col-lg-9">

        {{-- <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol> --}}
        <div class="row mt-4">
            @include('includes.product')
        </div>
      {{-- </div> --}}
    </div>
</div>


@endsection
