@extends('layouts.app')
@section('content')  
<div class="page-content pt-3 px-5" id="content">           
  <!-- contenedor de los elementos -->                
  {{--     --}}
  <h1 class="text-green font-weight-bold text-uppercase">Autorizacion de pago</h1>
  </div>  
  <div class="contendor-accesos-directos">
      <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
<path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
<path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>   
          <p>Lista de Activos</p>
      </div></div>
      <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
<path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
<path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
</svg>
          <p>Reporte de Pagos</p>
      </div></div>
      
          <div class="accesos-directos pt-3" onclick="mostrar('div-')"><div>
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
<path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
</svg>
          <p>Generar Excel</p>
      </div></div>
  </div>

  <h1 class="text-green font-weight-bold text-uppercase">CONSULTA POR QUINCENA</h1>
  <div class="form-container">
<form class="form">

  <div>
              <label>Año</label>
              <div class="column">
                  <div>
                  <select class="input">
                            <option hidden="">2023</option>
                        </select>
                  </div>
              </div>
          </div>

          <div>
              <label>Periodo</label>
              <div class="column">
                  <div>
                  <select class="input">
                            <option>Elija una opción</option>
                            <option>Enero</option>
                            <option>Febrero</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                            <option>Julio</option>
                            <option>Agosto</option>
                            <option>Septiembre</option>
                            <option>Octubre</option>
                            <option>Noviembre</option>
                            <option>Diciembre</option>
                        </select>
                  </div>
              </div>
          </div>



  
          <button class="form-btn">ACEPTAR</button>
</form>

</div>
@endsection