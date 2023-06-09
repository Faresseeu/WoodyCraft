@extends('user_template.layouts.template')
@section('main-content')
    @section('main-content')
        <h2>Dernière étape pour valider la commande</h2>
        <div class="row">
            <div class="col-8">
                <div class="box_main">
                    Adresse de livraison
                    <p>Ville - {{$shipping_address->city_name}} </p>
                    <p>Code postal- {{$shipping_address->postal_code}} </p>
                    <p>Numéro de téléphone- {{$shipping_address->phone_number}}</p>
                </div>
            </div>

            <div class="col-4">
                <div class="box_main">
                    <h3>Votre commande finnal : </h3>
                    <div table="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nom du produit</th>
                                <th>Quantité</th>
                                <th>prix</th>
                            </tr>
                            @php
                                $total = 0 ;
                            @endphp


                            @foreach ($cart_items as $item)
                                <tr>
                                    @php
                                        $product_name = App\Models\Product::where('id',$item->product_id)->value('product_name');
                                    @endphp
                                    <td>{{$product_name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->price}}</td>
                                </tr>

                                @php
                                    $total = $total + $item->price
                                @endphp

                            @endforeach

                                <tr>
                                    <td></td>
                                    <td >Total</td>
                                    <td >{{$total}}</td>
                                </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-4" style="position: relative; left: 760px;">
                <div class="box_main">
                    <h3>entrez les information de la carte de crédit</h3>
                    <form>
                        <label for="ccn">Nom du propriétaire :</label>
                        <input type="text" class="form-control" name="name_card" placeholder="Nom" >
                        <label for="ccn">numéro de la carte :</label>
                        <input type="tel" class="form-control" name="number_card"  placeholder="XXXX XXXX XXXX XXXX" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" required>
                        <label for="ccn">numéro de sécurité : </label>
                        <input type="tel" class="form-control" name="secutity_number_card" placeholder="XXX" min = "001" max="999" maxlength="3" required  >
                        <label for="ccn">date d'expiration : </label>
                        <input type="month" class="form-control" name="date_expiration_card"  placeholder="XX/XX" required>
                    </form>
                </div>
            </div>


            <form action="{{route('placeorder')}}" method ="POST"  >
                @csrf
                <input type ="submit" value="Valider" class="btn btn-primary  " style=" position: relative; left:665px; top:400px;">
            </form>
        </div>

    @endsection
