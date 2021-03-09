@extends('layouts.menu')

@section('contenido')
<style>
    .contenido-alineado{
        display: flex;
        justify-content: center;      
        padding:5%;
    }
    form{
        width: 60%;
        margin-top:2%;
    }
</style>
        <div class="contenido-alineado ">
            <form action="/usuarios" method="POST">
            @csrf
                    <h5 class="btn-primary" style="padding:1%">Registrar nuevo usuario</h5>
                    <?php if(!empty($mensaje_verificacion )):?>
                        <div class="nombre_usuario">
                            <h5 style="background-color:orange;"> <?= $mensaje_verificacion ?></h5> 
                        </div>
                    <?php endif;?>
                    <div class="row align-items-start">
                        <div class="col">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre">
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">Usuario:</label>
                            <input type="email" class="form-control" name="email" placeholder="Ingrese su usuario">
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar datos</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                    
                </form>
        </div>



@endsection