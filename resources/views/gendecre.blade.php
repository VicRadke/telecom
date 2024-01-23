@extends('layouts.app')
@section('content')

    <head>
        {{-- <link rel="stylesheet" href="css/estilo-formulario.css"> --}}
        <link rel="stylesheet" href="css/estilo-index.css">
        <link rel="stylesheet" href="css/estilo-credencial.css">
    </head>
    <!-- contenedor de los elementos -->
    <div class="contenedor">
        <h1 class="text-green font-weight-bold text-uppercase">Generacion de credencial</h1>
        <label for="nombrePrestador">Nombre del Prestador:</label>
        <input type="text" id="nombrePrestador" required>

        <button onclick="generarCredencial()"><a href="{{ route('imprimir') }}"
                target="_blank"
            >Generar credencial</a></button>

    </div>


    </head>

    <body>
        <div>


            <!-- este es el padre de los div -->
            {{-- <div class="page-content pt-3 px-5" id="content"> --}}
                <!-- contenedor de los elementos -->
                <div class="contenedor">
                    {{-- <h1 class="text-green font-weight-bold text-uppercase">Generacion de credencial</h1> --}}
                    <br>
                    <div class='box'>

                        <div class="form-container" id="credencial-enfrente">
                            <form class="form">
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
                                                        <form class="form">
                                                            <div class="input-box">
                                                                <label> Nombre</label>
                                                                <input class="input" required=""
                                                                    placeholder="Escribe el nombre completo" type="text">
                                                            </div>
                                                            <div class="input-box">
                                                                <label> Vigencia</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="inicio" type="text">
                                                                <input class="input input-corto" required=""
                                                                    placeholder="final" type="text">
                                                            </div>
                                                            <div class="input-box">
                                                                <label> Horario</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="entrada" type="text">
                                                                <input class="input input-corto" required=""
                                                                    placeholder="salida" type="text">
                                                            </div>
                                                            <div class="input-box">
                                                                <label>Tipo de servicio</label>
                                                                <div class="column">
                                                                    <div>
                                                                        <select class="input-box">
                                                                            <option>RESIDENCIA PROFESIONAL</option>
                                                                            <option>SERVICIO SOCIAL</option>
                                                                            <option>ETC</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>


                        <div class="form-container" id="credencial-atras">
                            <form class="form">
                                <div class="column">
                                    <div class="card shadow">
                                        <div class="credencial">
                                            <div class="header">

                                            </div>
                                            <div class="contenido">
                                                <div id=>
                                                </div>
                                                <div class="info">
                                                    <!-- <p><small>Este gafete credencial es personal e instranferible y es obligación del portador manteniendo visible dentrodel área de trabajo. En caso de extravío o deterioro por parte del portador la reposición correra por su cuenta. Este gafete credencial será entregado en la Coordinación de Reclutamiento y Selección de Personal al termino del periodo de vigencia </small></p> -->
                                                    <div>
                                                        <form class="form">
                                                            <div class="input-box">
                                                                <label>Adscripción:</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="adscripción" type="text">
                                                            </div>
                                                            <div class="input-box">
                                                                <label>Domicilio Particular:</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="domicilio" type="text">
                                                            </div>
                                                            <div class="input-box">
                                                                <label>Colonia:</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="colonia" type="text">
                                                            </div>
                                                            <div class="input-box">
                                                                <label>Alc/Mun:</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="Alc/Mun" type="text">
                                                            </div>
                                                            <div class="input-box">
                                                                <label>Teléfono Particular:</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="Teléfono" type="telephone">
                                                            </div>
                                                            <div class="input-box">
                                                                <label>Teléfono de Emergencia:</label>
                                                                <input class="input input-corto" required=""
                                                                    placeholder="Teléfono" type="telephone">
                                                            </div>

                                                            <!-- <label>AutorizaㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤFirma</label> -->

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

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                            </form>
                        </div>
                    </div>

                </div>







                {{-- <script>
            function generarCredencial() {
              var nombrePrestador = document.getElementById('nombrePrestador').value;
        
              // Aquí puedes agregar lógica para generar la credencial con el nombre del prestador
              alert('Credencial generada para ' + nombrePrestador);
            }
          </script>
          scrip para pop out
         --}}
    </body>
    </div>

    <!-- aqui podrias poner el footer         -->
    <div>.</div>
    <script src="js/fecha.js"></script>
@endsection
