<script>
        function convertirAMayusculas(input) {
            input.value = input.value.toUpperCase();
        }

        function convertirAMinusculas(input) {
            input.value = input.value.toLowerCase();
        }

        function numeros(event) {
            // Obtén el código de la tecla presionada
            var codigoTecla = event.which ? event.which : event.keyCode;

            // Permitir solo números (códigos de tecla del 0 al 9)
            if (codigoTecla < 48 || codigoTecla > 57) {
                event.preventDefault();
                return false;
            }
            return true;
        }
        function valida(e){
            tecla = (document.all) ? e.keyCode : e.which;
            //Tecla de retroceso para borrar, siempre la permite
            if (tecla==8){
                return true;
            }
        }
</script>



<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error al generar solicitud</strong> Favor de verificar los siguientes campos.
        </div>  
    @endif
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach         
    <h1 class="text-green font-weight-bold text-uppercase">Solicitud de Servicio Social y Prácticas
        Profesionales</h1>
    <form class="form" method='POST' action="{{route('solicitud.store')}}">
        @csrf
        <div class="input-box">
            <label> Nombre (s)</label>
            <input required placeholder="Escribe el nombre completo" type="text" name='nombre' oninput="convertirAMayusculas(this)" value="{{ old('nombre') }}">
            @error('nombre')
                <br>
                <small>*{{ $message }}</small>  
                </br>
            @enderror
        </div>
        <div class="input-box">
            <label> Apellido Paterno</label>
            <input required placeholder="Escribe el apellido paterno" type="text" name='apellido_paterno' oninput="convertirAMayusculas(this)" value="{{ old('apellido_paterno') }}">
            @error('apellido_paterno')
            <br>
            <small>*{{ $message }}</small>
            </br>
        @enderror
        </div>
        <div class="input-box">
            <label> Apellido Materno</label>
            <input required placeholder="Escribe el apellido " type="text" name='apellido_materno' oninput="convertirAMayusculas(this)" value="{{ old('apellido_materno') }}">
            @error('apellido_materno')
            <br>
            <small>*{{ $message }}</small>
            </br>
        @enderror
        </div>

        {{-- TODO: verificar que se guarde el tipo de identificación --}}
        <div class="input-box address">
            <label>Identificador del Prestador</label>
            <div class="column">
                <div class="select-box">
                    <select name='tipo_identificacion'>
                        <option hidden="">Identificador</option>
                        <option value="matricula">Matrícula</option>
                        <option value="boleta">Boleta</option>
                        <option value="cuenta">Cuenta</option>
                        <option value="controls">Control</option>
                    </select>
                </div>
                <input required placeholder="Número de identificador" type="text" oninput="convertirAMayusculas(this)" name='matricula' value="{{ old('matricula') }}">
                @error('matricula')
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
                <input required placeholder="CURP" type="text" name='curp' oninput="convertirAMayusculas(this)" value="{{ old('curp') }}">
                @error('curp')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>
            <div class="input-box">
                <label>RFC</label>
                <input required placeholder="RFC" type="text" name='rfc' oninput="convertirAMayusculas(this)" value="{{ old('rfc') }}">
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
                <input required placeholder="Lugar de Nacimiento" type="text" name='lugar_nacimiento' oninput="convertirAMayusculas(this)" value="{{ old('lugar_nacimiento') }}">
                @error('lugar_nacimiento')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>
            <div class="input-box">
                <label>Nacionalidad</label>
                <input required placeholder="Nacionalidad" type="text" name='nacionalidad' oninput="convertirAMayusculas(this)" value="{{ old('nacionalidad') }}">
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
                    <input required placeholder="Lugar de Nacimiento" type="text" name='calle' oninput="convertirAMayusculas(this)" value="{{ old('calle') }}">
                    @error('calle')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>

                <div class="input-box">
                    <label>Número Exterior</label>
                    <input required placeholder="Número Exterior" type="text" name='numero_exterior' oninput="convertirAMayusculas(this)" value="{{ old('numero_exterior') }}">
                    @error('numero_exterior')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                    @enderror
                </div>
                <div class="input-box">
                    <label>Número Interior</label>
                    <input required placeholder="Número Interio" type="text" name='numero_interior' oninput="convertirAMayusculas(this)" value="{{ old('numero_interior') }}">
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
                <input required placeholder="Colonia" type="text" name='colonia' oninput="convertirAMayusculas(this)" value="{{ old('colonia') }}">
                @error('colonia')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>
            <div class="input-box">
                <label>Código Postal</label>
                <input required placeholder="Nacionalidad" type="text" name='codigo_postal' onkeypress="return numeros(event)" value="{{ old('codigo_postal') }}">
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
                        <option hidden="">Entidad Federativa</option>


                        <option value="AGUAS CALIENTES">Aguas Calientes</option>
                        <option value="BAJA CALIFORNIA">Baja California</option>
                        <option value="BAJA CALIFORNIA SUR">Baja California Sur</option>
                        <option value="CAMPECHE">Campeche</option>
                        <option value="CHIAPAS">Chiapas</option>
                        <option value="CHIHUAHUA">Chihuahua</option>
                        <option value="COAHUILA">Coahuila</option>
                        <option value="COLIMA">Colima</option>
                        <option value="CIUDAD DE MEXICO">Ciudad de México</option>
                        <option value="DURANGO">Durango</option>
                        <option value="GUANAJUATO">Guanajuato</option>
                        <option value="GUERRERO">Guerrero</option>
                        <option value="HIDALGO">Hidalgo</option>
                        <option value="JALISCO">Jalisco</option>
                        <option value="MEXICO">México</option>
                        <option value="MICHOACAN">Michoacán</option>
                        <option value="MORELOS">Morelos</option>
                        <option value="NAYARIT">Nayarit</option>
                        <option value="NUEVO LEON">Nuevo León</option>
                        <option value="OAXACA">Oaxaca</option>
                        <option value="PUEBLA">Puebla</option>
                        <option value="QUERETARO">Querétaro</option>
                        <option value="QUINTANA ROO">Quintana Roo</option>
                        <option value="SAN LUIS POTOSI">San Luis Potosí</option>
                        <option value="SINALOA">Sinaloa</option>
                        <option value="SONORA">Sonora</option>
                        <option value="TABASCO">Tabasco</option>
                        <option value="TAMAULIPAS">Tamaulipas</option>
                        <option value="TLAXCALA">Tlaxcala</option>
                        <option value="VERACRUZ">Veracruz</option>
                        <option value="YUCATAN">Yucatán</option>
                        <option value="ZACATECAS">Zacatecas</option>




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
                <input required placeholder="Alcaldía/Municipio" type="text" name='alcaldia_municipio' oninput="convertirAMayusculas(this)" value="{{ old('alcaldia_municipio') }}">
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
                    <select name='id_modalidad' required>
                        <option value="">Modalidad</option>
                        @foreach ($modalidades as $modalidad)
                            <option value="{{$modalidad->id}}">{{$modalidad->name}}</option>    
                        @endforeach
                    </select>
                    @error('id_modalidad')
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
                <input required placeholder="Específica" type="text" name='especifica_migrante' oninput="convertirAMayusculas(this)" value="{{ old('especifica_migrante') }}">
            </div>
        </div>

        <div class="column">
            <div class="input-box">
                <label>Afrodescendencia</label>
                <div class="select-box">
                    <select name='es_afrodescendiente'>
                        <option>Afrodescendencia</option>
                        <option>Si</option>
                        <option>No</option>
                    </select>
                    @error('es_afrodescendiente')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
            </div>
            <div class="input-box">
                <label>Específica</label>
                <input required placeholder="Específica" type="text" name='especifica_afrodescendencia' oninput="convertirAMayusculas(this)" value="{{ old('especifica_afrodescendencia') }}">
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
                <input required placeholder="Específica" type="text" name='especifica_lengua_indigena' oninput="convertirAMayusculas(this)" value="{{ old('especifica_lengua_indigena') }}">
            </div>
        </div>
        <br>
        <div class="input-box address">
            <p style="text-align:center">CONTACTO</p>
            <div class="column">
                <div class="input-box">
                    <label> fijo</label>
                    <input required placeholder="Teléfono" type="telephone" name='telefono' onkeypress="return numeros(event)" value="{{ old('telefono') }}">
                    @error('telefono')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Celular</label>
                    <input required placeholder="Celular" type="telephone" name='celular' onkeypress="return numeros(event)" value="{{ old('celular') }}">
                    @error('celular')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Correo Electrónico</label>
                    <input required placeholder="Correo Electrónico" type="email" name='correo' oninput="convertirAMinusculas(this)" value="{{ old('correo') }}">
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
                    <input required placeholder="Nombre del Padre" type="text" name='nombre_padre' oninput="convertirAMayusculas(this)" value="{{ old('nombre_padre') }}">
                    @error('nombre_padre')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Domicilio</label>
                    <input required placeholder="Domicilio" type="text" name='domicilio_padre' oninput="convertirAMayusculas(this)" value="{{ old('domicilio_padre') }}">
                    @error('domicilio_padre')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Teléfono</label>
                    <input required placeholder="Teléfono" type="telephone" name='telefono_padre' onkeypress="return numeros(event)" value="{{ old('telefono_padre') }}">
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
                    <input required placeholder="Nombre del Padre" type="text" name='nombre_madre' oninput="convertirAMayusculas(this)" value="{{ old('nombre_madre') }}">
                    @error('nombre_madre')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Domicilio</label>
                    <input required placeholder="Domicilio" type="text" name='domicilio_madre' oninput="convertirAMayusculas(this)" value="{{ old('domicilio_madre') }}">
                    @error('domicilio_madre')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Teléfono</label>
                    <input required placeholder="Teléfono" type="telephone" name='telefono_madre' onkeypress="return numeros(event)" value="{{ old('telefono_madre') }}">
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
                    <label>Esposo/Esposa</label>
                    <input required placeholder="Nombre del Padre" type="text" name='nombre_conyuge' oninput="convertirAMayusculas(this)" value="{{ old('nombre_conyuge') }}">
                    @error('nombre_conyuge')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Domicilio</label>
                    <input required placeholder="Domicilio" type="text" name='domicilio_conyugue' oninput="convertirAMayusculas(this)" value="{{ old('domicilio_conyugue') }}">
                    @error('domicilio_conyugue')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Teléfono</label>
                    <input required placeholder="Teléfono" type="telephone" name='telefono_conyuge' onkeypress="return numeros(event)" value="{{ old('telefono_conyuge') }}">
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
                <input required placeholder="Escribe el nombre completo" type="text" name='nombre_contacto_emergencia' oninput="convertirAMayusculas(this)" value="{{ old('nombre_contacto_emergencia') }}">
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
                <input required placeholder="Teléfono Fijo" type="telephone" name='telefono_contacto_emergencia' onkeypress="return numeros(event)" value="{{ old('telefono_contacto_emergencia') }}">
                @error('telefono_fijo_contacto_emergencia')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>
            <div class="input-box">
                <label>Teléfono Móvil</label>
                <input required placeholder="Teléfono Móvil" type="telephone" name='telefono_celular_contacto_emergencia' onkeypress="return numeros(event)" value="{{ old('telefono_celular_contacto_emergencia') }}">
                @error('celular_emergencia')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>

            <div class="input-box">
                <label>Teléfono de Oficina o Extensión</label>
                <input required placeholder="Teléfono de Oficina o Extnsión" type="telephone" name='telefono_otro_contacto_emergencia' onkeypress="return numeros(event)" value="{{ old('telefono_otro_contacto_emergencia') }}">
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
                    <select name='id_nivel_academico' required>
                        <option value="">Nivel</option>
                        @foreach ($nivelesAcademicos as $nivel)
                            <option value="{{$nivel->id}}">{{$nivel->name}}</option>
                        @endforeach
                    </select>
                    @error('id_nivel_academico')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
            </div>
        </div>
        <div class="input-box">
            <label>Institución</label>
            <input required placeholder="Institución" type="text" name='nombre_institucion' oninput="convertirAMayusculas(this)" value="{{ old('nombre_institucion') }}">
            @error('nombre_institucion')
            <br>
            <small>*{{ $message }}</small>
            </br>
        @enderror
        </div>

        <div class="input-box">
            <label>Carrera</label>
            <input required placeholder="Carrera" type="text" name='carrera' oninput="convertirAMayusculas(this)" value="{{ old('carrera') }}">
            @error('carrera')
            <br>
            <small>*{{ $message }}</small>
            </br>
        @enderror
        </div>

        <div class="input-box">
            <label>Periodo</label>
            <input required placeholder="Periodo" type="text" name='periodo_escolar' oninput="convertirAMayusculas(this)" value="{{ old('periodo_escolar') }}">
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
                    <input required placeholder="Nombre Completo" type="text" name='nombre_referencia_personal' oninput="convertirAMayusculas(this)" value="{{ old('nombre_referencia_personal') }}">
                    @error('nombre_referencia_personal1')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Dirección</label>
                    <input required placeholder="Dirección" type="text" name='direccion_referencia_personal' oninput="convertirAMayusculas(this)" value="{{ old('direccion_referencia_personal') }}">
                    @error('direccion_referencia_personal')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Teléfono</label>
                    <input required placeholder="Teléfono" type="telephone" name='telefono_referencia_personal' onkeypress="return numeros(event)" value="{{ old('telefono_referencia_personal') }}">
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
                    <input required placeholder="Nombre Completo" type="text" name='nombre_referencia_personal_2' oninput="convertirAMayusculas(this)" value="{{ old('nombre_referencia_personal_2') }}">
                    @error('nombre_referencia_personal_2')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Dirección</label>
                    <input required placeholder="Dirección" type="text" name= 'direccion_referencia_personal_2' oninput="convertirAMayusculas(this)" value="{{ old('direccion_referencia_personal_2') }}">
                    @error('direccion_referencia_personal_2')
                    <br>
                    <small>*{{ $message }}</small>
                    </br>
                @enderror
                </div>
                <div class="input-box">
                    <label>Teléfono</label>
                    <input required placeholder="Teléfono" type="telephone" name='telefono_referencia_personal_2' onkeypress="return numeros(event)" value="{{ old('telefono_referencia_personal_2') }}">
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

