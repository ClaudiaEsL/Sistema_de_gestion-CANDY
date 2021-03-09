<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!--CSS Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    /*google fonts  */
    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

    body{
        margin: 0;
        padding: 0;
    }
    .content{
        display:flex;
        flex-direction: row;
    }
    .contenedor-menu{
        background-color: #e4e4e4;
        height: 625px;
    }
    .menu{
        min-width: 300px;
        max-width: 300px;
    }
    #menu{
        display:flex;
    }
    #abrir{
        display:none;
    }
    .menu .titulo{
        display:flex;
        background-color: #264cfd;
        justify-content: space-between;
        color:white;
    }
    .menu .titulo h5{
        font-size:20px!important;
        padding:5% 2% 2% 5%;
    }
    .menu .opciones{
        background-color: #e4e4e4;
    }
    .menu div h3{
        text-align: center;
    }
    .menu ul{
        display:flex;
        flex-direction: column;
    }
    .menu ul li{
        padding:10%;
        list-style: none;
    }
    .menu ul li a{
        text-decoration: none;
        color:#201627;
        font-size:15px;
    }
    /*Contenido */
    .contenido{
        width:100%;
    }
    /*Barra de sesion */
    .sesion{
        height: 50px;
        display:flex;
        justify-content: space-between;
        box-shadow: 0px 1px 10px -6px black;
    }
    .sesion .cerrar_sesion h5{
        font-size:13px;
        color:black;
    }
    .sesion .cerrar_sesion a{
        text-decoration: none;
        color:black;
        font-weight: bolder;
        font-family: 'Lato', sans-serif;
    }
    .sesion .cerrar_sesion{
        text-align: right;
        padding-right:1%;
        width:50%;
        padding-top:1%;
    }
    .sesion .nombre_usuario {
        padding-top:1%;
        padding-left:1%;
        width:50%;
    }
    .sesion .nombre_usuario h5{
        font-family: 'Lato', sans-serif;
        font-size:15px!important;
        font-weight: bolder;
    }
    @media only screen and (max-width: 768px) {
    .contenedor-menu{
        max-height: 400px;
        position: fixed;
    }
    /*Sesion*/
    .sesion .cerrar_sesion{
        text-align: right;
        padding-right:1%;
        width:20%;
    }
    .sesion .nombre_usuario {
        padding-left:1%;
        width:80%;
    }
    

}
    </style>
</head>
<body>
    <div class="content">
        <div class="contenedor-menu" id="menu">

            <div class="menu" id="sidebar">
                <div class="titulo">
                    <h5>CANDY - INVENTARIO</h5>
                    <div class="">
                        <button class="btn" id="cerrar" onclick="cerrar()" style="color:white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="opciones">
                    <ul>
                        <li>
                            <a href="{{ url('/usuarios/panel') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                </svg>
                                Panel de control
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/usuarios') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                Accesos
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/usuarios/categoria') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-justify-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                Categorias
                            </a>
                        </li>
                        <li>
                            
                            <a href="{{ url('/usuarios/productos') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                                </svg>
                                Productos
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="contenido">
            <div class="sesion">
            <button class="btn" id="abrir" onclick="abrir()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" >
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                </button>
                <div class="nombre_usuario">
                    <h5>Bienvenida al sistema {{ Auth::user()->name }}</h5> 
                </div>
                <div class="cerrar_sesion">
                    <h5>
                    <a type="button" href="{{ route('logout') }}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesion') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </h5>
                </div>
            </div>
            <div class="contenido-principal">
                @yield('contenido')
            </div>
        </div>
    </div>
    <!--JS Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function abrir() {
            document.getElementById("menu").style.width = "300px";
            document.getElementById("menu").style.display = "flex";
            document.getElementById("abrir").style.display = "none";
            document.getElementById("cerrar").style.display = "block";
        }
        function cerrar() {
            document.getElementById("menu").style.width = "0";
            document.getElementById("menu").style.display = "none";
            document.getElementById("abrir").style.display = "block";
            document.getElementById("cerrar").style.display = "none";
        }
    </script>
</body>
</html>