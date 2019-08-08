@include('includes.head')

<?php $total = 0 ?>
<div class="container">
    <div class="row"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="d-flex justify-content-between">
                <img class="row" src="/images/logo/CuteCatsLogo2.png" alt="logo">
                <h3 class="row">Facture pour achat #33561</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Details de facturation</div>
                        <div class="panel-body">
                            <strong>{{ Auth::user()->name }} :</strong><br>
                            12, Place Garibaldi<br>
                            Nice<br>
                            CEDEX<br>
                            <strong>06100</strong><br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Paiement</div>
                        <div class="panel-body">
                            <strong>Type de Carte:</strong> Visa<br>
                            <strong>Numéro de Carte:</strong> ***** 332<br>
                            <strong>Date d'exp:</strong> 09/2020<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Options</div>
                        <div class="panel-body">
                            <strong>Cadeau:</strong> No<br>
                            <strong>Livraison Expresse:</strong> Yes<br>
                            <strong>Assurance:</strong> No<br>
                            <strong>Réduction:</strong> No<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Adresse de livraison</div>
                        <div class="panel-body">
                            <strong>{{ Auth::user()->name }} :</strong><br>
                            12, Place Garibaldi<br>
                            Nice<br>
                            CEDEX<br>
                            <strong>06100</strong><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Résumé de commande</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Prix unitaire</strong></td>
                                    <td class="text-center"><strong>Quantité</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $pro)

                                        <?php $total += $pro['price'] * $pro['quantity'] ?>
                                        <tr>
                                            <td>{{ $pro['name'] }}</td>
                                            <td class="text-center">{{ $pro['price'] }} €</td>
                                            <td class="text-center">{{ $pro['quantity'] }}</td>
                                            <td class="text-right">{{ $pro['price'] * $pro['quantity'] }} €</td>
                                        </tr>



                                    @endforeach
                                @endif

                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Sous-total</strong></td>
                                    <td class="highrow text-right">{{ $total }} €</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Livraison</strong></td>
                                    <td class="emptyrow text-right">20 €</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right">{{ $total + 20}} €</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>
