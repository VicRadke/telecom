<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo-catalogo.css">
    <link rel="stylesheet" href="css/estilo-formulario.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cátalogos</title>
</head>

<body>
    <?php
    include("elementos/barras.php");
    ?>
    <!-- este es el padre de los div -->
    <div class="page-content pt-3 px-5" id="content">
        <!-- contenedor de los elementos -->
        <div class="contenedor">
            <h1 class="text-green font-weight-bold text-uppercase">Cátalogos</h1>
        </div>

        <div class="contendor-accesos-directos">
            <div class="accesos-directos pt-3" onclick="mostrarModalidad('div-modalidad')">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                        <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z" />
                    </svg>
                    <p>Modalidades</p>
                </div>
            </div>

            <div class="accesos-directos pt-3" onclick="mostrarNivelEstudios('div-nivelEstudios')">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                        <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5" />
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12z" />
                    </svg>
                    <p>Nivel de Estudio</p>
                </div>
            </div>

            <div class="accesos-directos pt-3" onclick="mostrarProgramas('div-nivelProgramas')">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                    </svg>
                    <p>Programas</p>
                </div>
            </div>
        </div>

        <!-- ESTE ES EL PADRE DE LOS BOTONES AGREGAR, ELIMINAR, CONSULTAR Y MODIFICAR, TAMBIEN DE TODOS LOS FORMULARIOS -->
        <div id="div-modalidad" style="display: none;">
            <div class="contendor-accesos-directos">
                <div class="accesos-directos pt-3" onclick="modalidad('agregar-modalidad')">
                    <div>
                        <p>AGREGAR</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3">
                    <div>
                        <p>MODIFICAR</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3">
                    <div>
                        <p>ELIMINAR</p>
                    </div>
                </div>
                <div class="accesos-directos pt-3">
                    <div>
                        <p>CONSULTAR</p>
                    </div>
                </div>
            </div>
            <div id="agregar-modalidad" style="display: none;">
                <h1 class="text-green font-weight-bold text-uppercase">NUEVA MODALIDAD</h1>
                <form class="form" action="#">
                    <div class="input-box">
                        <label>Modalidad</label>
                        <input required="" placeholder="Modalidad" type="text">
                    </div>

                    <div class="input-box address">
                        <label>Nivel</label>
                        <div class="column">
                            <div class="select-box">
                                <select>
                                    <option hidden="">Nivel</option>
                                    <option>nddoik</option>
                                    <option>kdqjiodw</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="input-box address">
                        <p style="text-align:center">HORAS</p>
                        <div class="column">
                            <div class="input-box">
                                <label>Horas por Periodo</label>
                                <input required="" placeholder="Horas por periodo" type="text">
                            </div>

                            <div class="input-box">
                                <label>Horas por Día</label>
                                <input required="" placeholder="Horas por día" type="text">
                            </div>
                            <div class="input-box">
                                <label>Horas por Semana</label>
                                <input required="" placeholder="Horas por semana" type="text">
                            </div>

                            <div class="input-box">
                                <label>Horas por Mes</label>
                                <input required="" placeholder="Horas por mes" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="input-box address">
                        <div class="column">
                            <div class="input-box">
                                <label>Duración (Periodo)</label>
                                <input required="" placeholder="Duración" type="text">
                            </div>
                            <div class="input-box">
                                <label>Pago por Mes</label>
                                <input required="" placeholder="Pago por mes" type="text">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button>Guardar Registro</button>
                    <br>
                    <br>
                </form>
            </div>
        </div>


        <div id="div-nivelEstudios" style="display: none;">
            <div class="contendor-accesos-directos">
                <div class="accesos-directos pt-3" onclick="nivelEstudios('agregar-nivel')">
                    <div>
                        <p>AGREGAR</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3">
                    <div>
                        <p>MODIFICAR</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3">
                    <div>
                        <p>ELIMINAR</p>
                    </div>
                </div>
                <div class="accesos-directos pt-3">
                    <div>
                        <p>CONSULTAR</p>
                    </div>
                </div>
            </div>
            <div id="agregar-nivel" style="display: none;">
                <h1 class="text-green font-weight-bold text-uppercase">NIVEL DE ESTUDIOS</h1>
                <form class="form" action="#">
                    <div class="input-box">
                        <label>Descripción del nivel</label>
                        <input required="" placeholder="Descripción del nivel" type="text">
                    </div>


                    <br>
                    <button>Guardar Registro</button>
                    <br>
                    <br>
                    <br>
                </form>
            </div>

        </div>


        <div id="div-nivelProgramas" style="display: none;">
            <div class="contendor-accesos-directos">
                <div class="accesos-directos pt-3" onclick="nivelProgramas('agregar-programa')">
                    <div>
                        <p>AGREGAR</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3">
                    <div>
                        <p>MODIFICAR</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3">
                    <div>
                        <p>ELIMINAR</p>
                    </div>
                </div>
                <div class="accesos-directos pt-3">
                    <div>
                        <p>CONSULTAR</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3">
                    <div>
                        <p>CARRERA/DEPTO</p>
                    </div>
                </div>
                <div class="accesos-directos pt-3">
                    <div>
                        <p>ASIGNAR ACTIVIDADES</p>
                    </div>
                </div>
            </div>
            <div id="agregar-programa" style="display: none;">
                <h1 class="text-green font-weight-bold text-uppercase">NUEVO PROGRAMA</h1>
                <form class="form" action="#">
                    <div class="input-box">
                        <label>Nombre </label>
                        <input required="" placeholder="Nombre Completo" type="text">
                    </div>

                    <div class="column">

                        <div class="input-box">
                            <label>Clave</label>
                            <input required="" placeholder="Clave" type="telephone">
                        </div>
                        <div class="input-box">
                            <label>Vigencia</label>
                            <input required="" placeholder="Fecha" type="date">
                        </div>

                        <div class="input-box">
                            <label>Cupo</label>
                            <input required="" placeholder="Cupo" type="telephone">
                        </div>
                    </div>


                    <br>
                    <button>Guardar Registro</button>
                    <br>
                    <br>
                    <br>
                </form>
            </div>

        </div>





        <div class="mt-5 contendor-accesos-directos">
            <a href="administrar-prestadores.php" class="accesos-directos pt-3">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z" />
                        <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z" />
                    </svg>
                    <p>Instituciones</p>
                </div>
            </a>

            <a href="catalogos.php" class="accesos-directos pt-3">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                        <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72l-.25-1Z" />
                    </svg>
                    <p>Escuelas</p>
                </div>
            </a>

            <a href="generacion-de-credencial.php" class="accesos-directos pt-3">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
                        <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6M6 8a2 2 0 1 1 4 0 2 2 0 0 1-4 0m-.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z" />
                        <path d="M3.232 1.776A1.5 1.5 0 0 0 2 3.252v10.95c0 .445.191.838.49 1.11.367.422.908.688 1.51.688h8a2 2 0 0 0 2-2V4a2 2 0 0 0-1-1.732v-.47A1.5 1.5 0 0 0 11.232.321l-8 1.454ZM4 3h8a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1" />
                    </svg>
                    <p>Carreras</p>
                </div>
            </a>
        </div>
        


        

        <!-- aqui podrias poner el footer         -->
        <div>piee</div>
    </div>
</body>

</html>
<script src="js/fecha.js"></script>
<script src="js/formulariomodalidad.js"></script>   