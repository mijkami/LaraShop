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
        <?php
        foreach ($product as $pro){
            echo '<div class="col-lg-4 col-md-6 mb-4">';
            echo '<div class="card h-100">';
            echo '<a href="#"><img class="card-img-top" src="'.$pro->image_url.'" alt=""></a>';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">';
            echo '<a href="#">'.$pro->price.' euros</a>';
            echo '</h4>';
            echo '<h5>'.$pro->name.'</h5>';
            echo '<p class="card-text">Type : '.$pro->typ.'<br>Commentaire : '.$pro->comment.'</p>';
            echo '</div>';
            echo '<div class="card-footer text-center">';
                if ($pro->stars==1){$a="&#9733; &#9734; &#9734; &#9734; &#9734;";}
                elseif($pro->stars==2){$a="&#9733; &#9733; &#9734; &#9734; &#9734;";}
                elseif($pro->stars==3){$a="&#9733; &#9733; &#9733; &#9734; &#9734;";}
                elseif($pro->stars==4){$a="&#9733; &#9733; &#9733; &#9733; &#9734;";}
                elseif($pro->stars==5){$a="&#9733; &#9733; &#9733; &#9733; &#9733;";}
            echo '<small class="col-auto float-left text-muted">'.$a.'</small>';
            echo '<a class="float-right" href="/'.$pro->id.'/addtocart"><img class="w-25" src="/images/logo/Cart-45.png" alt="Cart">Acheter</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
@endsection
