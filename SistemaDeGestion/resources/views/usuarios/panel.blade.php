@extends('layouts.menu')

@section('contenido')

<style>
    /*pagina inicial*/
    .muestras{
        display:flex;
        justify-content: center;
    }
    .muestras .seccion{
        margin-top:5%;
        width:20%;
        margin-left:5%;
        display:flex;
        flex-direction: row;
        justify-content: center;
        box-shadow: 0px 5px 5px -6px black;
    }
    .imagen{
    width:50%;
    }
    .imagen svg{
        width:100%;
        color:white;
    }
    .numero{
        width:50%;
        display:flex;
        flex-direction: column;
        justify-content: center;
    }
    .numero h5, .numero h6{
        text-align: center;
    }
</style>
            <h3 class="text-center" style="font-size: 18px;margin-top:1%;">Panel de control</h3>
            <div class="muestras">
                <div class="seccion">
                    <div class="imagen" style="background-color: #F1B459;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <div class="numero">
                        
                        <h5>10</h5>
                        <h6>Usuarios</h6>
                    </div>
                </div>
                <div class="seccion">
                    <div class="imagen" style="background-color: rgb(124, 39, 39);">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-justify-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    </div>
                    <div class="numero">
                        
                        <h5>3</h5>
                        <h6>Categorias</h6>
                    </div>
                </div>
                <div class="seccion">
                    <div class="imagen" style="background-color: #264cfd;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                    </svg>
                    </div>
                    <div class="numero">
                       
                        <h5>50</h5>
                        <h6>Productos</h6>
                    </div>
                </div>
                
            </div>
@endsection