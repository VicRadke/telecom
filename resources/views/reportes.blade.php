@extends('layouts.app')
@section('content')

{{-- <div class="page-content pt-3 px-5" id="content"> --}}

    {{-- <div class="page-content pt-3 px-5" id="content"> --}}
        <!-- contenedor de los elementos -->
        <div class="contenedor">
          <h1 class="text-green font-weight-bold text-uppercase">Reportes</h1>
    
          <div class="contendor-accesos-directos">
                    <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>    
                        <p>Reporte General</p>
                    </div></div>
                    <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                        </svg>
                        <p>Reporte Alfabético</p>
                    </div></div>
                    
                        <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-slash" viewBox="0 0 16 16">
                            <path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465l3.465-3.465Zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465Zm-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                        </svg>
                        <p>Reporte de faltas</p>
                    </div></div>
                </div>
    
    
                <div class='box'>
    
                <div class="form-container">
          <form class="form">
        
                <div class="input-box address">
                            <label>Tipo de Servicio</label>
                            <div class="column">
                                <div>
                                <select class="input">
                                          <option hidden=""></option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                          <option>No Binario</option>
                               </select>
                                </div>
                            </div>
                        </div>
    
                        <div class="input-box address">
                            <label>Adscripción</label>
                            <div class="column">
                                <div>
                                <select class="input">
                                          <option hidden=""></option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                          <option>No Binario</option>
                               </select>
                                </div>
                            </div>
                        </div>
    
                        <div class="input-box address">
                            <label>Tipo de Servicio</label>
                            <div class="column">
                                <div>
                                <select class="input">
                                          <option hidden=""></option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                          <option>No Binario</option>
                               </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-box address">
                            <label>Programa</label>
                            <div class="column">
                                <div>
                                <select class="input">
                                          <option hidden=""></option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                          <option>No Binario</option>
                               </select>
                                </div>
                            </div>
                        </div>
    
                        <div class="input-box address">
                            <label>Estatus</label>
                            <div class="column">
                                <div>
                                <select class="input">
                                          <option hidden=""></option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                          <option>No Binario</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <button class="form-btn">ACEPTAR</button>
          </form>
    
        </div>
    
    
                </div>
    
          
              
          <!-- aqui podrias poner el footer         -->
          
        
        </div>
    </body>

@endsection
