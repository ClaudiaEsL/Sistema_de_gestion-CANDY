@extends('layouts.menu')

@section('contenido')
<style>
      .container{
        width:100%;
        display:flex;
        justify-content: center;
      }
      .content-table{
        margin-top:5%;
      }
      .titulo button{
        width:100%;
        margin-top:5%;
        margin-bottom: 5%;
      }
      .titulo{
        margin-bottom: 5%;
      }
</style>
<div class="container">
  <div class="content-table">
      <div style="width:700px;margin-bottom:5%;">
            <h5 class="btn-primary" style="padding:1%">Lista de productos</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Opciones</th>

                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Producto</td>
                            <td>18 Bs</td>
                            <td>Frutas congeladas</td>
                            <td>300</td>
                            <td>
                                <form action="" method="POST" style="display:flex;">
                                    <a href=""><button type="button" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                    </svg>
                                    </button></a>
                                
                                    <button type="submit" class="btn btn-danger" style="margin-left:2%; font-size:10px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                </tbody>
            </table>
      </div>
      <div class="formulario" style="width:700px;margin-bottom:5%;">
        <div class="contenido-alineado ">
            <form action="" method="POST">
                    <h5 class="btn-primary" style="padding:1%">Registrar nuevo producto</h5>
                    <div class="row align-items-start">
                        <div class="col">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" placeholder="">
                        </div>
                        <div class="col">
                            <label for="precio" class="form-label">Precio:</label>
                            <input type="doubleval" class="form-control" name="precio" placeholder="">
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <label for="descripcion" class="form-label">Descripcion:</label>
                            <input type="text" class="form-control" name="descripcion" placeholder="">
                        </div>
                        <div class="col">
                            <label for="stock" class="form-label">Stock:</label>
                            <div class="texto" style="display:flex;">
                                <input type="number" class="form-control" name="stock" placeholder="" style="width: 50%; margin-right:5%;">
                                <label for="stock">Unidades</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Registrar nuevo producto</button>
                </form>
         </div>
      </div>
  </div>
</div>
<script>

</script>
@endsection