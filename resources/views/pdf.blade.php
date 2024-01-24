<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <style>
        @page {
            size: 27.94cm 21.59cm;
            margin: 1mm 1mm 1mm 1mm;
        }

        .row{
            width: 100%;
            margin: 0 auto;
            height: 100%;
        }
        .block {
            padding: 20px;
            width: 10cm;
            height: 15cm;
            margin: 20px;
            display: inline-block;
            background-image: url("images/credencial.png.jpg");
            /* background-color: yellow; */
            background-repeat: no-repeat;
            vertical-align: top;
        }
        .contenido-credencial{
            align-items: center;
        }
        .logo-header-card{
            height: 2cm;
        }
        .photo-card{
            height: 3cm;
            align-items: center;
        }
        .photo-card-content{
            margin: 0 auto;
            height: 3cm;
            width: 3cm;
            border: 1px solid black;
        }
        .personal-data-card{
            height: 8cm;
            align-items: center;
            margin-top: 1cm;
        }
        .personal-data-card-content{
            margin: 0 auto;
            text-align: center;
            font-size: 0.5cm;
            height: 8cm;
            width: 8cm;
        }
        .personal-data-card-content-item{
            display: block;
            margin-top: 0.5cm;
        }
    </style>
</head>

<body>
    <div class="" >
        {{-- Credencial delantera --}}
        <div class="block" style="display: inline-block;">
            {{-- Logo arriba --}}
            <div class="contenido-credencial" >
                <div class="logo-header-card">
                    <img src="images/logo.jpg" alt="Logo"
                    style="display: block; margin-center: auto; margin-right: auto; width: 2cm; height: auto;"/>
                </div>
            </div>

            {{-- Cuerpo --}}
            <div class="body-card">
                {{-- Cuadro para pegar foto --}}
                <div class="photo-card">
                    <div class="photo-card-content">
                    </div>
                </div>

                {{-- Datos personales --}}
                <div class="personal-data-card">
                    <div class="personal-data-card-content">
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Nombre:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                {{ $empleado->nombre }}
                            </div>
                        </div>
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Apellidos:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                {{ $empleado->apellido_paterno }} {{ $empleado->apellido_materno }}
                            </div>
                        </div>
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Vigencia:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                11/11/2024
                            </div>
                        </div>
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Email:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                test@test.mx
                            </div>
                        </div>

                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Tipo de servicio
                            </div>
                            <div class="personal-data-card-content-item-value">
                                Residencia profesional
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Credencial trasera --}}
        <div class="block" style="display: inline-block;">
            {{-- Cuerpo --}}
            <div class="body-card">
                {{-- Datos personales --}}
                <div class="personal-data-card">
                    <div class="personal-data-card-content">
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Adscripción:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                Por asignar
                            </div>
                        </div>
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Matricula:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                {{ $empleado->id_prestador }}
                            </div>
                        </div>
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Fecha de nacimiento:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                {{ $empleado->fecha_nacimineto}}
                            </div>
                        </div>
                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Email:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                test@test.mx
                            </div>
                        </div>

                        <div class="personal-data-card-content-item">
                            <div class="personal-data-card-content-item-title">
                                Tipo de servicio:
                            </div>
                            <div class="personal-data-card-content-item-value">
                                Residencia profesional
                            </div>
                            <div class="centrado">
                                <strong>Autoriza</strong>
                                <div class="linea"></div>
                                <p>______________________________</p>
                                <p>Responsable de servicio Social</p>
                            </div>

                            <div class="centrado">
                                <strong>Prestador</strong>
                                <div class="linea"></div>
                                <p>______________________________</p>
                                <p>Firma</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>
