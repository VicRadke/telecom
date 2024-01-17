<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error al generar solicitud</strong> Favor de verificar los siguientes campos.
        </div>
    @endif
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach         
    <form class="form" method='POST' action="{{route('empleado.update', $empleado)}}">
        @method('patch')
        @csrf
        <div class="input-box">
            <label> Nombre (s)</label>
            <input required placeholder="Escribe el nombre completo" type="text" name='nombre' value="{{ $empleado->nombre }}">
            @error('nombre')
                <br>
                <small>*{{ $message }}</small>  
                </br>
            @enderror
        </div>
        <div class="input-box">
            <label> Apellido Paterno</label>
            <input required placeholder="Escribe el apellido paterno" type="text" name='apellido_paterno' value="{{ $empleado->apellido_paterno }}">
            @error('apellido_paterno')
            <br>
            <small>*{{ $message }}</small>
            </br>
        @enderror
        </div>
        <div class="input-box">
            <label> Apellido Materno</label>
            <input required placeholder="Escribe el apellido " type="text" name='apellido_materno' value="{{ $empleado->apellido_materno }}">
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
                <input required placeholder="Número de identificador" type="text" name='id_prestador' value="{{ $empleado->id_prestador }}">
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
                <input required placeholder="Fecha" type="date" name='fecha_nacimiento' value="{{ $empleado->fecha_nacimineto }}">
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
                        <option value="M" {{ $empleado->genero == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $empleado->genero == 'F' ? 'selected' : '' }}>Femenino</option>
                        <option value="O" {{ $empleado->genero == 'O' ? 'selected' : '' }}>No Binario</option>
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
                        <option {{ $empleado->estado_civil == 'Soltero' ? 'selected' : '' }}> Soltero</option>
                        <option {{ $empleado->estado_civil == 'Casado' ? 'selected' : '' }}>Casado</option>
                        <option {{ $empleado->estado_civil == 'Otro' ? 'selected' : '' }}>Otro</option>
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
                <input required placeholder="CURP" type="text" name='curp' value="{{ $empleado->curp }}">
                @error('curp')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>
            <div class="input-box">
                <label>RFC</label>
                <input required placeholder="RFC" type="text" name='rfc' value="{{ $empleado->rfc }}">
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
                <input required placeholder="Lugar de Nacimiento" type="text" name='lugar_nacimiento' value="{{ $empleado->lugar_nacimiento }}">
                @error('lugar_nacimiento')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>
            <div class="input-box">
                <label>Nacionalidad</label>
                <input required placeholder="Nacionalidad" type="text" name='nacionalidad' value="{{ $empleado->nacionalidad }}">
                @error('nacionalidad')
                <br>
                <small>*{{ $message }}</small>
                </br>
            @enderror
            </div>
        </div>
        <br>
        {{-- <div class="input-box address">
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
                    <input required placeholder="Domicilio" type="text" name='domicilio_conyugue' value="{{ old('domicilio_conyugue') }}">
                    @error('domicilio_conyugue')
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
                <input required placeholder="Teléfono de Oficina o Extnsión" type="telephone" name='telefono_otro_contacto_emergencia' value="{{ old('telefono_otro_contacto_emergencia') }}">
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
                    <input required placeholder="Dirección" type="text" name='direccion_referencia_personal' value="{{ old('direccion_referencia_personal') }}">
                    @error('direccion_referencia_personal')
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
        <br> --}}
        <button>Actualizar empleado</button>
        <br>
        <br>
    </form>
</div>