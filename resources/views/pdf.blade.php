<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
body {
  font-family: sans-serif;
  font-size: 15px;
  
}

.row {
  display: flex;
  flex-wrap: wrap;
  
}

.col-md-6 {
  flex: 0 0 50%;
  max-width: 50%;
  
}

.card {
  width: 90%;
  height: 600px;
  border: 1px solid #ccc;
  padding: 20px;
  
}

.rounded {
  border-radius: 15px;
  
}

.card-img-top {
  width: 100%;
  height: 200px;
  
}

.card-title {
  font-size: 16px;
  font-weight: bold;
  text-align:center;
}

.card-text {
  font-size: 16px;
  text-align:center;
}

.list-group-item {
  padding: 10px 20px;
 
}
.img {
  text-align:center;
}

    </style>
    </head>
<body>
    <div class="row">
        <div class="col-md-6">
          <div class="card rounded">
           
            <div class="card-body">
              
               <div class= "img" >
                 <img src="image.png" alt="Identificación">
              </div>
              <h5 class="card-title">José Márquez Gutiérrez</h5>
              <p class="card-text">
                Residente Profesional
                <br>
                Financiera para Bienestar
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Adscripción: Gerencia de Capacitación</li>
                <li class="list-group-item">Domicilio: 2DA DE LUIS ARAIZA S.MZ. 5 MZ. 19 LT. 57</li>
                <li class="list-group-item">Colonia: Vicente Guerrero</li>
                <li class="list-group-item">Alcaldía/Municipio: Iztapalapa</li>
                <li class="list-group-item">Código Postal: 09200</li>
                <li class="list-group-item">Teléfono Particular: 5548292369</li>
                <li class="list-group-item">Teléfono de Emergencia: 5532887756</li>
              </ul>
              <p class="card-text">
                Vigencia: 01/09/2023 - 08/01/2024
                <br>
                Horario: 9:00 a 15:00
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card rounded">
            <div class="card-body">
              <p class="card-text">
 
                <br>
   
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Adscripción: Gerencia de Crédito</li>
                <li class="list-group-item">Domicilio: CALLE 1 NO. 234 COL. CENTRO CP 09200</li>
                <li class="list-group-item">Colonia: Vicente Guerrero</li>
                <li class="list-group-item">Alcaldía/Municipio: Iztapalapa</li>
                <li class="list-group-item">Código Postal: 09200</li>
                <li class="list-group-item">Teléfono Particular: 5548292369</li>
                <li class="list-group-item">Teléfono de Emergencia: 5532887756</li>
              </ul>
              <p class="card-text">

                <br>

              </p>
            </div>
          </div>
        </div>
      </div>
      
</body>
</html>