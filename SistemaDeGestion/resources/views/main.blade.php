<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
        }
        .options{
            display:flex;
            flex-direction: row;
            justify-content: center;
        }
        .mensajes{
            display:flex;
            flex-direction: row;
            justify-content: center;
        }
        .content{
            
            width:60%;
            margin-top:5%;

        }
        .content h3{
            padding-top:2%;
            padding-bottom: 2%;
            color:white;
            text-align:center;
            background-color: #2B99DD;
        }
        body{
            width:100%;
            display:flex;
            justify-content: center;
        }
        /*Menu */
        ul{
            margin-top:5%;
            background-color: #E5E5E5;
        }
        .opcion{
            color:#012B46;
            text-decoration: none;
            font-size:18px;
            margin-bottom: 2%;
        }
    </style>
</head>
<body>
        
    <div class="content">
        <h1>Bienvenido al sistema</h1>
        <h3>Sistema de control - CANDY productos congelados</h3>
        <ul>
            <li><a href="/" class="opcion">Almacenamiento y administracion de accesos</a></li>
            <li><a href="#" class="opcion">Ventas y facturacion</a></li>
            <li><a href="#" class="opcion">Reportes</a></li>
        </ul>
        
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>