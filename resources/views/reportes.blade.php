@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/estilo-formulario-reporte.css">
<div class="page-content pt-3 px-5" id="content">

    <body class="full-cover-background" style="background-image:url(assets/img/font-login.jpg);">
    <!-- contenedor de los elementos -->
    <div class="contenedor">
        <h1 class="text-green font-weight-bold text-uppercase">Reportes</h1>

        <form action="/my-handling-form-page" method="post">
            <ul>
                <li>
                    <label for="name">Tipo de Sero:</label>
                    <select name="select">
                        <option value="value1">opcion1</option>
                        <option value="value2">opcion2</option>
                        <option value="value3">opcion3</option>
                    </select>
                    <!-- <input type="text" id="Tservicio" name="user_name" /> -->
                </li>
                <li>
                    <label for="name">Adscripción:</label>
                    <select name="select">
                        <option value="value1">opcion1</option>
                        <option value="value2">opcion2</option>
                        <option value="value3">opcion3</option>
                    </select>
                </li>
                <li>
                    <label for="name">Programa:</label>
                    <select name="select">
                        <option value="value1">opcion1</option>
                        <option value="value2">opcion2</option>
                        <option value="value3">opcion3</option>
                    </select>
                </li>
                <li>
                    <label for="name">Estatus:</label>
                    <select name="select">
                        <option value="value1">opcion1</option>
                        <option value="value2">opcion2</option>
                        <option value="value3">opcion3</option>
                    </select>
                </li>
            </ul>
            <div class="container">
                <div class="btn"><a href="#">Aceptar</a></div>

            </div>
        </form>

    </div>

@endsection
