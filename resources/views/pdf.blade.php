<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo-credencial.css">

    <title>Credencial prestador</title>
    <style>
        @page {
            size: 27.94cm 21.59cm;
            margin: 1mm 1mm 1mm 1mm;
        }

        .container {}

        .content {
            text-align: center;
            background-color: tomato;
        }


        #parent-container {
            background-color: #bfa421;
        }

        #carrusel-caja {
            -moz-animation: automatizacion 15s infinite linear;
            -o-animation: automatizacion 15s infinite linear;
            -webkit-animation: automatizacion 15s infinite linear;
            animation: automatizacion 15s infinite linear;
            -webkit-transition: all 0.75s ease;
            -moz-transition: all 0.75s ease;
            -ms-transition: all 0.75s ease;
            -o-transition: all 0.75s ease;
            transition: all 0.75s ease;
            height: 500px;
            width: 300%;
        }

        #carrusel-contenido {
            margin: 0 auto;
            overflow: hidden;
            text-align: left;
        }

        .imagenes {
            height: 500px;
            width: 100%;
        }

        .carrusel-elemento {
            float: left;
            width: 33.333%;
        }

        @-moz-keyframes automatizacion {
            0% {
                margin-left: 0;
            }

            30% {
                margin-left: 0;
            }

            35% {
                margin-left: -100%;
            }

            65% {
                margin-left: -100%;
            }

            70% {
                margin-left: -200%;
            }

            95% {
                margin-left: -200%;
            }

            100% {
                margin-left: 0;
            }
        }

        @-webkit-keyframes automatizacion {
            0% {
                margin-left: 0;
            }

            30% {
                margin-left: 0;
            }

            35% {
                margin-left: -100%;
            }

            65% {
                margin-left: -100%;
            }

            70% {
                margin-left: -200%;
            }

            95% {
                margin-left: -200%;
            }

            100% {
                margin-left: 0;
            }
        }

        @keyframes automatizacion {
            0% {
                margin-left: 0;
            }

            30% {
                margin-left: 0;
            }

            35% {
                margin-left: -100%;
            }

            65% {
                margin-left: -100%;
            }

            70% {
                margin-left: -200%;
            }

            95% {
                margin-left: -200%;
            }

            100% {
                margin-left: 0;
            }
        }

        .contendor-accesos-directos {
            /* background-color: red; */
            width: 100%;
            display: inline-flex;
        }

        .accesos-directos {
            /* background: linear-gradient(to top left , #cea500cc 0%, #d6ac0094 46%, #d9ae025b 100%); */
            background: -webkit-gradient(linear, left top, right bottom, from(#d6c5a0), to(#fadd6728));
            display: flex;
            flex: 1;
            margin: 0 2rem 2rem 2rem;
            border-radius: 25px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .accesos-directos svg,
        .accesos-directos p {
            color: #02614b;
            font-weight: 500;
            font-size: large;
        }

        .accesos-directos {
            transition: background-color 0.5s ease, transform 0.5s ease;
        }

        .accesos-directos:hover {
            background: linear-gradient(43deg, #02614b 0%, #02614bb6 46%, #02614b7d 100%);

            transform: translate(10px, -20px);
        }

        .accesos-directos:hover svg,
        .accesos-directos:hover p {
            color: #ffffff;
            /* Cambia el color del texto y los elementos SVG */
        }

        /* Estilo-index.css */
        .form-container {
            width: 200px;
            height: 200px;
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 10px;
            box-sizing: border-box;
            padding: 20px 30px;
        }

        .title {
            text-align: center;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
            margin: 10px 0 30px 0;
            font-size: 28px;
            font-weight: 800;
        }

        .form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-bottom: 15px;
        }

        .input {
            height: 90%;
            width: 90%;
            border-radius: 10px;
            border: 1px solid #c0c0c0;
            outline: 0 !important;
            box-sizing: border-box;
            padding: 6px 5px;
        }

        .page-link {
            text-decoration: underline;
            margin: 0;
            text-align: end;
            color: #747474;
            text-decoration-color: #747474;
        }

        .page-link-label {
            cursor: pointer;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
            font-size: 9px;
            font-weight: 700;
        }

        .page-link-label:hover {
            color: #000;
        }

        .form-btn {
            padding: 10px 15px;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
            border-radius: 20px;
            border: 0 !important;
            outline: 0 !important;
            background: rgb(128, 0, 6);
            color: white;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .form-btn:active {
            box-shadow: none;
        }

        .sign-up-label {
            margin: 0;
            font-size: 10px;
            color: #747474;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        .sign-up-link {
            margin-left: 1px;
            font-size: 11px;
            text-decoration: underline;
            text-decoration-color: teal;
            color: teal;
            cursor: pointer;
            font-weight: 800;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        .buttons-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-top: 20px;
            gap: 15px;
        }

        .apple-login-button,
        .google-login-button {
            border-radius: 20px;
            box-sizing: border-box;
            padding: 10px 15px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
                rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", "Geneva", "Verdana", "sans-serif";
            font-size: 11px;
            gap: 5px;
        }

        .apple-login-button {
            background-color: #000;
            color: #fff;
            border: 2px solid #000;
        }

        .google-login-button {
            border: 2px solid #747474;
        }

        .apple-icon,
        .google-icon {
            font-size: 18px;
            margin-bottom: 1px;
        }

        .address :where(input, .select-box) {
            margin-top: 10px;
        }

        .select-box select {
            height: 90%;
            width: 90%;
            outline: none;
            border: 1px solid #c0c0c0;
            color: #808080;
            font-size: 1rem;
        }

        #credencial-enfrente,
        #credencial-atras {}

        #credencial-enfrente,
        #credencial-atras {
            background-image: url("images/credencial.png.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            width: 10cm;
            height: 15cm;
            display: inline-block;
        }

        .input-corto {
            width: 100px;
        }

        .input-box {
            margin: 1em 0.5em;
        }

        #foto {
            width: 100px;
            height: 100px;
            margin: 10px auto;
            border: 1px solid #000;
        }

        .linea {
            border-top: 1px solid black;
            height: 2px;
            max-width: 200px;
            padding: 0;
            margin: 30px auto 0 auto;
        }

        .centrado {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="" id="credencial-enfrente">
                <div class="column">
                    <div class="card shadow">
                        <div class="credencial">
                            <div class="header">
                                <img src="images/logo.jpg" width="100px" height="55px" alt="Logo">
                            </div>
                            <div class="contenido">
                                <div id="foto"></div>
                                <div class="info">
                                    <div>
                                        <div class="input-box">
                                            <label> Nombre</label>
                                            <div>Pablito</div>
                                        </div>
                                        <div class="input-box">
                                            <label> Vigencia</label>
                                            <div>01/01/2021</div>
                                        </div>
                                        <div class="input-box">
                                            <label> Horario</label>
                                            <div>8:00 - 14:00</div>
                                        </div>
                                        <div class="input-box address">
                                            <label>Tipo de servicio</label>
                                            <div class="column">
                                                <div class="select-box">
                                                    <div>
                                                        Prácticas profesionales
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div id="credencial-atras">
                <div class="column">
                    <div class="card shadow">
                        <div class="credencial">
                            <div class="header">

                            </div>
                            <div class="contenido">
                                <div id=>
                                </div>
                                <div class="info">
                                    <!-- <p><small>Este gafete credencial es personal e instranferible y es obligación del portador manteniendo visible dentrodel área de trabajo. En caso de extravío o deterioro por parte del portador la reposición correra por su cuenta. Este gafete credencial será entregado en la Coordinación de Reclutamiento y Selección de Personal al termino del periodo de vigencia </small></p> -->
                                    <div>
                                        <div class="">
                                            <label>Adscripción:</label>
                                            <div>TEST</div>
                                        </div>
                                        <div class="input-box">
                                            <label>Domicilio Particular:</label>
                                            <div>TEST</div>
                                        </div>
                                        <div class="input-box">
                                            <label>Colonia:</label>
                                            <div>TEST</div>
                                        </div>
                                        <div class="input-box">
                                            <label>Alc/Mun:</label>
                                            <div>TEST</div>
                                        </div>
                                        <div class="input-box">
                                            <label>Teléfono Particular:</label>
                                            <div>TEST</div>
                                        </div>
                                        <div class="input-box">
                                            <label>Teléfono de Emergencia:</label>
                                            <div>TEST</div>
                                        </div>
                                        <div class="centrado">
                                            <strong>Autoriza</strong>
                                            <div class="linea"></div>
                                            <p>Responsable de servicio Social</p>
                                        </div>

                                        <div class="centrado">
                                            <strong>Prestador</strong>
                                            <div class="linea"></div>
                                            <p>Firma</p>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
