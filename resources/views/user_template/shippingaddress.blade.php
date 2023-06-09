@extends('user_template.layouts.template')
@section('main-content')
    @section('main-content')
        <h2>Fournissez vos informations d'expédition</h2>
        <div class="row">
            <div class="col-12">
                <div class="box_main">
                    <form action="{{route('addshippingaddress')}}" methode="POST">
                        @csrf
                        <div class="form-group">
                            <label for="phone_number">Numéro de téléphone</label>
                            <input type="text" class="form-control" name="phone_number" required>
                        </div>

                        <div class="form-group">
                            <label for="city_name">Ville</label>
                            <input type="text" class="form-control" name="city_name" required>
                        </div>

                        <div class="form-group">
                            <label for="postal_code">Code Postal</label>
                            <input type="text" class="form-control" name="postal_code" required>
                        </div>

                        <input type="submit" value="Next" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    @endsection
