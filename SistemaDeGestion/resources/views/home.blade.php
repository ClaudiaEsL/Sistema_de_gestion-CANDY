@extends('layouts.menu')

@section('contenido')
<style>
    .container{
        background-color: #e3edf0;
        margin-top:5%;
        width:80%;
    }
    .container h5{
        padding:2%;
    }
</style>
        <div class="container">
            <div class="row">
                <div class="row justify-content-center">
                    <h5>Entro al sistema {{ Auth::user()->email }}</h5>
                </div>
            </div>
        </div>
@endsection