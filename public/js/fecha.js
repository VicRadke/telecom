function fecha(){
    var meses=new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    var f=new Date();
    document.getElementById("fecha-hoy").innerHTML =diasSemana[f.getDay()]+ ", " + f.getDate()+" de "+meses[f.getMonth()]+ " de "+f.getFullYear();
}
fecha();
