@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">LOLCATS</h1>
        <p>LOLcats are image macros consisting of humorous photos of cats with superimposed text written in a form of broken English known as lolspeak.</p>
        <p>LOLcat meme gained much of its traction through the weekly ritual of Caturday on 4chan and I Can Has Cheezburger.</p>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          {{-- <div class="carousel-inner" role="listbox"> --}}
          <?php
            // $x=0;
            // foreach ($product as $pro){
            //     $x=$x+1;
            //     echo '<div class="carousel-item';
            //     if ($x==1){echo ' active';}
            //     echo '">';
            //     echo '<img class="d-block img-fluid" src="'.$pro->image_url.'" >';
            //     echo '</div>';
            // }
          ?>
         {{-- </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> --}}

        <div class="row">
            @include('includes.product')
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>


@endsection
