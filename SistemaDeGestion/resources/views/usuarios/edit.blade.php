@extends('layouts.menu')

@section('contenido')
<div>
    <div class="row" style="display:flex;justify-content: center; margin-top:5%;">
        <div style="display:flex;justify-content:center;">
            <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
            @method('PATCH')
            @csrf
                    <h5 class="btn-primary" style="padding:1%">Registrar nuevo usuario</h5>
                        <div class="nombre_usuario">
                            <h5 style="background-color:orange;"> </h5> 
                        </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Ingrese el nombre">
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">Usuario:</label>
                            <input type="email" class="form-control" name="email"  value="{{ $user->email }}"  placeholder="Ingrese su usuario">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </form>
        </div>
    </div>
</div>



@endsection