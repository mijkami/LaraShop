@extends('layouts.app')

@section('content')
@include('includes.carousel')
<div class="container">

    <div class="row">
      <!-- /.col-lg-3 -->

      <div class="col-lg-12">

        <div class="row">
        <?php
        $i=0;
        foreach ($productCute as $pro){
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
            $i++;
            if($i==3) break;
        }

        $i=0;
        foreach ($productSport as $pro){
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
            $i++;
            if($i==3) break;
        }

        $i=0;
        foreach ($productLol as $pro){
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
            $i++;
            if($i==3) break;
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
