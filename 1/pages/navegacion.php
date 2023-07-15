<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Estilos para el encabezado */
        header {
            background-color: #faa200a5;
            padding: 20px;
            display: flex;
            align-items: center;
        }

        header h1 {
            margin-right: 10px;
        }

        header img {
            width: 150px;
            height: 90px;
        }

        /* Estilos para el menú de navegación */
        nav {
            background-color: #000000;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Estilos para la sección del menú */
        .menu {
            padding: 20px;
        }

        .menu-item {
            margin-bottom: 20px;
        }

        .menu-item h3 {
            margin: 0;
        }

        .price {
            color: #555;
            font-weight: bold;
        }

        /* Estilos para el pie de página */
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Estilos responsivos */
        @media screen and (max-width: 600px) {

            /* Estilos para pantallas pequeñas */
            header {
                padding: 10px;
            }

            nav {
                padding: 5px;
            }

            nav ul li {
                display: block;
                margin: 5px 0;
            }
        }
    </style>
    <title>pagina 1</title>
</head>

<body>

    <header>
        <h1>EmparedaCheems</h1>
        <img src="photos/sandwicheems.png" alt="">
    </header>

    <nav>
        <ul>
            <li><a href="?p=inicio">Inicio</a></li>
            <li><a href="?p=menu">Menú</a></li>
            <li><a href="?p=promociones">Promociones</a></li>
        </ul>
    </nav>