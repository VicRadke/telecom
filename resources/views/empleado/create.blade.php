
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
  @csrf  
<label for="Nombre"> Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br> 

    <label for= "Nombre"> Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
    <br>

    <label for="Nombre"> ApellidoMaterno</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
    <br>

    <label for="Nombre"> Numero tel</label>
    <input type="text" name="Numero tel" id="Numero tel">
    <br>

    <label for="Nombre"> Foto</label>
    <input type="file" name="Foto" id="Foto">
    <br>

    
    <input type="submit" value="Guardar datos">
    <br>
    

</form>