<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo-formulario.css">
    <link rel="stylesheet" href="css/estilo-index.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Administrar prestadores</title>
</head>

<body>
    <?php
    include 'elementos/barras.php';
    ?>
    <!-- este es el padre de los div -->
    <div class="page-content pt-3 px-5" id="content">
        <!-- contenedor de los elementos -->
        <div class="contenedor">
            <h1 class="text-green font-weight-bold text-uppercase mt-2 mb-3">Administrar prestadores</h1>

            <div class="contendor-accesos-directos">
                <div class="accesos-directos pt-3" onclick="mostrarFormulario('div2')">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                        </svg>
                        <p>Modificar</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3" onclick="mostrarFormulario('div3')">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-person-slash" viewBox="0 0 16 16">
                            <path
                                d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465l3.465-3.465Zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465Zm-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                        </svg>
                        <p>Eliminar</p>
                    </div>
                </div>

                <div class="accesos-directos pt-3" onclick="mostrarFormulario('div4')">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-person-vcard" viewBox="0 0 16 16">
                            <path
                                d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                            <path
                                d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                        </svg>
                        <p>Consultar</p>
                    </div>
                </div>
            </div>
                
            @foreach($errors as $error)
            
            <div>
                <h1 class="text-green font-weight-bold text-uppercase">Solicitud de Servicio Social y Prácticas
                    Profesionales</h1>
                <form class="form" method='POST' action="{{route('solicitud.store')}}">
                    @csrf
                    <div class="input-box">
                        <label> Nombre (s)</label>
                        <input required placeholder="Escribe el nombre completo" type="text" name='nombre' value="{{ old('nombre') }}">
                        @error('nombre')
                            <br>
                            <small>*{{ $message }}</small>  
                            </br>
                        @enderror
                    </div>
                    <div class="input-box">
                        <label> Apellido Paterno</label>
                        <input required placeholder="Escribe el apellido paterno" type="text" name='apellido_paterno' value="{{ old('apellido_paterno') }}">
                        @error('apellido_paterno')
                        <br>
                        <small>*{{ $message }}</small>
                        </br>
                    @enderror
                    </div>
                    <div class="input-box">
                        <label> Apellido Materno</label>
                        <input required placeholder="Escribe el apellido " type="text" name='apellido_materno' value="{{ old('apellido_materno') }}">
                        @error('apellido_materno')
                        <br>
                        <small>*{{ $message }}</small>
                        </br>
                    @enderror
                    </div>

                    <div class="input-box address">
                        <label>Identificador del Prestador</label>
                        <div class="column">
                            <div class="select-box">
                                <select name='tipo_identificacion'>
                                    <option hidden="">Identificador</option>
                                    <option>Matrícula</option>
                                    <option>Boleta</option>
                                    <option>Cuenta</option>
                                    <option>Control</option>
                                </select>
                            </div>
                            <input required placeholder="Número de identificador" type="text" name='id_prestador' value="{{ old('id_prestador') }}">
                            @error('id_prestador')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Fecha de Nacimiento</label>
                            <input required placeholder="Fecha" type="date" name='fecha_nacimiento' value="{{ old('fecha_nacimiento') }}">
                            @error('fecha_nacimiento')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                            @enderror
                        </div>
                        <div class="input-box">
                            <label>Edad</label>
                            <input required placeholder="edad" type="telephone" name='edad' value="{{ old('edad') }}">
                            @error('edad')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>

                    <div class="input-box address">
                        <label>Género</label>
                        <div class="column">
                            <div class="select-box">
                                <select name='genero'>
                                    <option hidden="">Género</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>No Binario</option>
                                </select>
                                @error('genero')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="input-box address">
                        <label>Estado Civil</label>
                        <div class="column">
                            <div class="select-box">
                                <select name='estado_civil'>
                                    <option>Estado Civil</option>
                                    <option>Soltero</option>
                                    <option>Casado</option>
                                    <option>Otro</option>
                                </select>
                                @error('estado_civil')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>CURP</label>
                            <input required placeholder="CURP" type="text" name='curp' value="{{ old('curp') }}">
                            @error('curp')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                        <div class="input-box">
                            <label>RFC</label>
                            <input required placeholder="RFC" type="text" name='rfc' value="{{ old('rfc') }}">
                            @error('rfc')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Lugar de Nacimiento</label>
                            <input required placeholder="Lugar de Nacimiento" type="text" name='lugar_nacimiento' value="{{ old('lugar_nacimiento') }}">
                            @error('lugar_nacimiento')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                        <div class="input-box">
                            <label>Nacionalidad</label>
                            <input required placeholder="Nacionalidad" type="text" name='nacionalidad' value="{{ old('nacionalidad') }}">
                            @error('nacionalidad')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>
                    <br>
                    <div class="input-box address">
                        <p style="text-align:center">DOMICILIO</p>
                        <div class="column">
                            <div class="input-box">
                                <label>Calle</label>
                                <input required placeholder="Lugar de Nacimiento" type="text" name='calle' value="{{ old('calle') }}">
                                @error('calle')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>

                            <div class="input-box">
                                <label>Número Exterior</label>
                                <input required placeholder="Número Exterior" type="text" name='numero_exterior' value="{{ old('numero_exterior') }}">
                                @error('numero_exterior')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Número Interior</label>
                                <input required placeholder="Número Interio" type="text" name='numero_interior' value="{{ old('numero_interior') }}">
                                @error('numero_interior')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Colonia</label>
                            <input required placeholder="Colonia" type="text" name='colonia' value="{{ old('colonia') }}">
                            @error('colonia')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                        <div class="input-box">
                            <label>Código Postal</label>
                            <input required placeholder="Nacionalidad" type="text" name='codigo_postal' value="{{ old('codigo_postal') }}">
                            @error('codigo_postal')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Entidad Federativa</label>
                            <div class="select-box">
                                <select name='entidad_federativa'>
                                    <option>Entidad Federativa</option>
                                </select>
                                @error('entidad_federativa')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                        <div class="input-box">
                            <label>Alcaldía/Municipio</label>
                            <input required placeholder="Alcaldía/Municipio" type="text" name='alcaldia_municipio' value="{{ old('alcaldia_municipio') }}">
                            @error('alcaldia_municipio')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>
                    <br>
                    <div class="input-box address">
                        <p style="text-align:center">MODALIDADES</p>
                        <label>MODALIDAD</label>
                        <div class="column">
                            <div class="select-box">
                                <select name='modalidad'>
                                    <option hidden="">Modalidad</option>
                                    <option>Estadia Profesional</option>
                                    <option>Prácticas Laborales</option>
                                    <option>Prácticas Profesionales</option>
                                    <option>Residencias</option>
                                    <option>Servicio Social</option>
                                </select>
                                @error('modalidad')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>

                            <div class="select-box">
                                <select name='turno'>
                                    <option hidden="">Turno</option>
                                    <option>Matutino</option>
                                    <option>Vespertino</option>
                                </select>
                                @error('turno')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>¿Migrante?</label>
                            <div class="select-box">
                                <select name='es_migrante'>
                                    <option>Migrante</option>
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                                @error('es_migrante')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                        <div class="input-box">
                            <label>Específica</label>
                            <input required placeholder="Específica" type="text" name='especifica_migrante' value="{{ old('especifica_migrante') }}">
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Afrodescendencia</label>
                            <div class="select-box">
                                <select name='es_afrodescendencia'>
                                    <option>Afrodescendencia</option>
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                                @error('es_afrodescendencia')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                        <div class="input-box">
                            <label>Específica</label>
                            <input required placeholder="Específica" type="text" name='especifica_afrodescendencia' value="{{ old('especifica_afrodescendencia') }}">
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Lengua Indígena</label>
                            <div class="select-box">
                                <select name='es_lengua_indigena'>
                                    <option>Lengua Indígena</option>
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                                @error('es_lengua_indigena')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                        <div class="input-box">
                            <label>Especifica</label>
                            <input required placeholder="Específica" type="text" name='especifica_lengua_indigena' value="{{ old('especifica_lengua_indigena') }}">
                        </div>
                    </div>
                    <br>
                    <div class="input-box address">
                        <p style="text-align:center">CONTACTO</p>
                        <div class="column">
                            <div class="input-box">
                                <label> fijo</label>
                                <input required placeholder="Teléfono" type="telephone" name='telefono' value="{{ old('telefono') }}">
                                @error('telefono')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Celular</label>
                                <input required placeholder="Celular" type="telephone" name='celular' value="{{ old('celular') }}">
                                @error('celular')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Correo Electrónico</label>
                                <input required placeholder="Correo Electrónico" type="email" name='correo' value="{{ old('correo') }}">
                                @error('correo')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="input-box address">
                        <p style="text-align:center">DATOS FAMILIARES</p>
                        <div class="column">
                            <div class="input-box">
                                <label>Nombre del Padre</label>
                                <input required placeholder="Nombre del Padre" type="text" name='nombre_padre' value="{{ old('nombre_padre') }}">
                                @error('nombre_padre')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Domicilio</label>
                                <input required placeholder="Domicilio" type="text" name='domicilio_padre' value="{{ old('domicilio_padre') }}">
                                @error('domicilio_padre')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Teléfono</label>
                                <input required placeholder="Teléfono" type="telephone" name='telefono_padre' value="{{ old('telefono_padre') }}">
                                @error('telefono_padre')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="input-box address">
                        <div class="column">
                            <div class="input-box">
                                <label>Nombre de la Madre </label>
                                <input required placeholder="Nombre del Padre" type="text" name='nombre_madre' value="{{ old('nombre_madre') }}">
                                @error('nombre_madre')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Domicilio</label>
                                <input required placeholder="Domicilio" type="text" name='domicilio_madre' value="{{ old('domicilio_madre') }}">
                                @error('domicilio_madre')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Teléfono</label>
                                <input required placeholder="Teléfono" type="telephone" name='telefono_madre' value="{{ old('telefono_madre') }}">
                                @error('telefono_madre')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="input-box address">
                        <div class="column">
                            <div class="input-box">
                                <label>Esposa</label>
                                <input required placeholder="Nombre del Padre" type="text" name='nombre_conyuge' value="{{ old('nombre_conyuge') }}">
                                @error('nombre_conyuge')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Domicilio</label>
                                <input required placeholder="Domicilio" type="text" name='domicilio_conyuge' value="{{ old('domicilio_coyuge') }}">
                                @error('domicilio_conyuge')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Teléfono</label>
                                <input required placeholder="Teléfono" type="telephone" name='telefono_conyuge' value="{{ old('telefono_conyuge') }}">
                                @error('telefono_conyuge')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="input-box address">
                        <p style="text-align:center"> EN CASO DE EMERGENCIA CONTACTAR A:</p>
                        <div class="input-box">
                            <label> Nombre Completo</label>
                            <input required placeholder="Escribe el nombre completo" type="text" name='nombre_contacto_emergencia' value="{{ old('nombre_contacto_emergencia') }}">
                            @error('nombre_contacto_emergencia')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>

                    <div class="input-box address">
                        <div class="input-box">
                            <label>Teléfono Fijo</label>
                            <input required placeholder="Teléfono Fijo" type="telephone" name='telefono_contacto_emergencia' value="{{ old('telefono_contacto_emergencia') }}">
                            @error('telefono_fijo_contacto_emergencia')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                        <div class="input-box">
                            <label>Teléfono Móvil</label>
                            <input required placeholder="Teléfono Móvil" type="telephone" name='telefono_celular_contacto_emergencia' value="{{ old('telefono_celular_contacto_emergencia') }}">
                            @error('celular_emergencia')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>

                        <div class="input-box">
                            <label>Teléfono de Oficina o Extensión</label>
                            <input required placeholder="Teléfono de Oficina o Extnsión" type="telephone" name='Telefono_otro_contacto_emergencia' value="{{ old('telefono_otro_contacto_emergencia') }}">
                            @error('telefono_otro_contacto_emergencia')
                            <br>
                            <small>*{{ $message }}</small>
                            </br>
                        @enderror
                        </div>
                    </div>

                    <br>
                    <div class="input-box address">
                        <p style="text-align:center">INFORMACIÓN ACADÉMICA</p>
                        <label>NIVEL ACADÉMICO</label>
                        <div class="column">
                            <div class="select-box">
                                <select name='nivel_academico'>
                                    <option hidden="">Nivel</option>
                                    <option>Bachillerato</option>
                                    <option>Técnico</option>
                                    <option>Comercial</option>
                                    <option>T.S.U</option>
                                    <option>Licenciatura</option>
                                </select>
                                @error('nivel_academico')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <label>Institución</label>
                        <input required placeholder="Institución" type="text" name='nombre_institucion' value="{{ old('nombre_institucion') }}">
                        @error('nombre_institucion')
                        <br>
                        <small>*{{ $message }}</small>
                        </br>
                    @enderror
                    </div>

                    <div class="input-box">
                        <label>Carrera</label>
                        <input required placeholder="Carrera" type="text" name='carrera' value="{{ old('carrera') }}">
                        @error('carrera')
                        <br>
                        <small>*{{ $message }}</small>
                        </br>
                    @enderror
                    </div>

                    <div class="input-box">
                        <label>Periodo</label>
                        <input required placeholder="Periodo" type="text" name='periodo_escolar' value="{{ old('periodo_escolar') }}">
                        @error('periodo_escolar')
                        <br>
                        <small>*{{ $message }}</small>
                        </br>
                    @enderror
                    </div>

                    <br>
                    <br>
                    <div class="input-box address">
                        <p style="text-align:center">REFERENCIAS PERSONALES</p>
                        <label>REFERENCIA 1</label>
                        <div class="column">
                            <div class="input-box">
                                <label>Nombre Completo</label>
                                <input required placeholder="Nombre Completo" type="text" name='nombre_referencia_personal' value="{{ old('nombre_referencia_personal') }}">
                                @error('nombre_referencia_personal1')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Dirección</label>
                                <input required placeholder="Dirección" type="text" name='direccion_refencia_personal' value="{{ old('direccion_referencia_personal') }}">
                                @error('direccion_refencia_personal1')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Teléfono</label>
                                <input required placeholder="Teléfono" type="telephone" name='telefono_referencia_personal' value="{{ old('telefono_referencia_personal') }}">
                                @error('telefono_referencia_personal')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="input-box address">
                        <label>REFERENCIA 2</label>
                        <div class="column">
                            <div class="input-box">
                                <label>Nombre Completo</label>
                                <input required placeholder="Nombre Completo" type="text" name='nombre_referencia_personal_2' value="{{ old('nombre_referencia_personal_2') }}">
                                @error('nombre_referencia_personal_2')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Dirección</label>
                                <input required placeholder="Dirección" type="text" name= 'direccion_referencia_personal_2' value="{{ old('direccion_referencia_personal_2') }}">
                                @error('direccion_referencia_personal_2')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                            <div class="input-box">
                                <label>Teléfono</label>
                                <input required placeholder="Teléfono" type="telephone" name='telefono_referencia_personal_2' value="{{ old('telefono_referencia_personal_2') }}">
                                @error('telefono_referencia_personal_2')
                                <br>
                                <small>*{{ $message }}</small>
                                </br>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button>Guardar</button>
                    <br>
                    <br>
                </form>
            </div>
        
            @endforeach 
            

            <div id="div2" style="display: none;">
                <h1 class="text-green font-weight-bold text-uppercase">Modificar</h1>
                <div class="input-container">
                    <input type="text" name="text" class="input" placeholder="Buscar...">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" class="icon">
                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                        <g id="SVGRepo_iconCarrier">
                            <rect fill="white" height="24" width="24"></rect>
                            <path fill=""
                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="column" id="div3" style="display: none;">
                <h1 class="text-green font-weight-bold text-uppercase">Eliminar</h1>
                <div class="input-container">
                    <input type="text" name="text" class="input" placeholder="Buscar...">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" class="icon">
                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                        <g id="SVGRepo_iconCarrier">
                            <rect fill="white" height="24" width="24"></rect>
                            <path fill=""
                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </g>
                    </svg>
                
            </div>

            <div class="column" id="div4" style="display: none;">
                <h1 class="text-green font-weight-bold text-uppercase">Consultar</h1>
                <div class="input-container">
                    <input type="text" name="text" class="input" placeholder="Buscar...">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" class="icon">
                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                        <g id="SVGRepo_iconCarrier">
                            <rect fill="white" height="24" width="24"></rect>
                            <path fill=""
                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="js/fecha.js"></script>
<script src="js/formularios.js"></script>
