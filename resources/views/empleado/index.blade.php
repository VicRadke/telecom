<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo-formulario.css">
    <link rel="stylesheet" href="css/estilo-index.css">
    <title>Administrar prestadores</title>
</head>

<body>
    <?php
    include("elementos/barras.php");
    ?>
    <!-- este es el padre de los div -->
    <div class="page-content pt-3 px-5" id="content">
        <!-- contenedor de los elementos -->
        <div class="contenedor">
            <h1 class="text-green font-weight-bold text-uppercase">Administrar prestadores</h1>

            <div class="contendor-accesos-directos">
                    <a href="administrar-prestadores.php" class="accesos-directos pt-3"><div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                          <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>    
                        <p>Crear Solicitud</p>
                    </div></a>
                    <a href="administrar-prestadores.php" class="accesos-directos pt-3"><div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                          <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                        </svg>
                        <p>Modificar</p>
                    </div></a>
                    
                     <a href="administrar-prestadores.php"class="accesos-directos pt-3"><div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-slash" viewBox="0 0 16 16">
                          <path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465l3.465-3.465Zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465Zm-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <p>Eliminar</p>
                    </div></a>

                    <a href="administrar-prestadores.php"class="accesos-directos pt-3"><div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                      <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                      <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                    </svg>
                        <p>Consulatr</p>
                    </div></a>
                </div>
                
                <h1 class="text-green font-weight-bold text-uppercase">Solicitud de Servicio Social y Prácticas Profesionales</h1>
            <div class="column">
                <form class="form" action="#">
                    <div class="input-box">
                        <label> Nombre (s)</label>
                        <input required="" placeholder="Escribe el nombre completo" type="text">
                    </div>
                    <div class="input-box">
                        <label> Apellido Paterno</label>
                        <input required="" placeholder="Escribe el apellido paterno" type="text">
                    </div>
                    <div class="input-box">
                        <label> Apellido Materno</label>
                        <input required="" placeholder="Escribe el apellido " type="text">
                    </div>

                    <div class="input-box address">
                        <label>Identificador del Prestador</label>
                        <div class="column">
                            <div class="select-box">
                                <select>
                                    <option hidden="">Identificador</option>
                                    <option>Matrícula</option>
                                    <option>Boleta</option>
                                    <option>Cuenta</option>
                                    <option>Control</option>
                                </select>
                            </div>
                            <input required="" placeholder="Número de identificador" type="text">
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Fecha de Nacimiento</label>
                            <input required="" placeholder="Fecha" type="date">
                        </div>
                        <div class="input-box">
                            <label>Edad</label>
                            <input required="" placeholder="edad" type="telephone">
                        </div>
                    </div>
                    
                    <div class="input-box address">
                        <label>Género</label>
                        <div class="column">
                            <div class="select-box">
                                <select>
                                    <option hidden="">Género</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>No Binario</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="input-box address">
                        <label>Estado Civil</label>
                        <div class="column">
                            <div class="select-box">
                                <select>
                                    <option>Estado Civil</option>
                                    <option>Soltero</option>
                                    <option>Casado</option>
                                    <option>Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>CURP</label>
                            <input required="" placeholder="CURP" type="text">
                        </div>
                        <div class="input-box">
                            <label>RFC</label>
                            <input required="" placeholder="RFC" type="text">
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Lugar de Nacimiento</label>
                            <input required="" placeholder="Lugar de Nacimiento" type="text">
                        </div>
                        <div class="input-box">
                            <label>Nacionalidad</label>
                            <input required="" placeholder="Nacionalidad" type="text">
                        </div>
                    </div>

                    <div class="input-box address">
                        <label>DOMICILIO</label>
                        <div class="column">
                        <div class="input-box">
                            <label>Calle</label>
                            <input required="" placeholder="Lugar de Nacimiento" type="text">
                        </div>
                        <div class="input-box">
                            <label>Número Exterior</label>
                            <input required="" placeholder="Número Exterior" type="text">
                        </div>
                        <div class="input-box">
                            <label>Número Interior</label>
                            <input required="" placeholder="Número Interio" type="text">
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Colonia</label>
                            <input required="" placeholder="Colonia" type="text">
                        </div>
                        <div class="input-box">
                            <label>Código Postal</label>
                            <input required="" placeholder="Nacionalidad" type="text">
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Entidad Federativa</label>
                            <div class="select-box">
                                <select>
                                    <option>Entidad Federativa</option>
                                    <option>Aguascalientes</option>
                                    <option>Baja California</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-box">
                            <label>Alcaldía/Municipio</label>
                            <input required="" placeholder="Alcaldía/Municipio" type="text">
                        </div>
                    </div>
                    
                    <div class="input-box address">
                        <label>CONTACTO</label>
                        <div class="column">
                        <div class="input-box">
                            <label>Teléfono</label>
                            <input required="" placeholder="Teléfono" type="telephone">
                        </div>
                        <div class="input-box">
                            <label>Celular</label>
                            <input required="" placeholder="Celular" type="telephone">
                        </div>
                        <div class="input-box">
                            <label>Correo Electrónico</label>
                            <input required="" placeholder="Correo Electrónico" type="email">
                        </div>
                    </div>

                    <div class="input-box address">
                        <label>MODALIDADES</label>
                        <div class="column">
                            <div class="select-box">
                                <select>
                                    <option hidden="">Modalidad</option>
                                    <option>Estadia Profesional</option>
                                    <option>Prácticas Laborales</option>
                                    <option>Prácticas Profesionales</option>
                                    <option>Residencias</option>
                                    <option>Servicio Social</option>
                                </select>
                            </div>
                            
                            <div class="select-box">
                                <select>
                                    <option hidden="">Turno</option>
                                    <option>Matutino</option>
                                    <option>Vespertino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="input-box address">
                        <label>DATOS FAMILIARES</label>
                        

                            

                    <button>Submit</button>
                </form>
                </section>

                <!-- pie de pagina         -->
                <div>piee</div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="js/fecha.js"></script>