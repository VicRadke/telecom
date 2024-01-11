/*ESTA FUNCION SE MANDA A LLAMAR EN EL BOTON QUE TIENE ICONO*/
function actualizaOpciones(id, idbutton) {
  const container_class_modalidades = 'sub-buttons';
  // a todos los hijos les ponemos display none
  const elements = document.getElementsByClassName(container_class_modalidades);
  const buttonElement = document.getElementById(idbutton);
  for (let i = 0; i < elements.length; i++) {
    elements[i].style.display = 'none';
    console.log(elements[i]);
  }
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  // quitamos todas las clases selected
  const buttons = document.getElementsByClassName('accesos-directos-selected');
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove('accesos-directos-selected');
  }
  buttonElement.classList.toggle('accesos-directos-selected');
}

/*ESTA FUNCION ES PARA LOS BOTONES QUE MUESTRAN LOS FORMULARIOS*/
function modalidad(id){
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function nivelEstudios(id){
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

/*BOTON DE PROGRAMAS*/
function mostrarProgramas(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function nivelProgramas(id){
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


/*BOTON DE INSTITUCIONES*/
function mostrarInstituciones(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function nivelInstituciones(id){
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


/*BOTON DE CARRERAS*/
function mostrarCarreras(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function nivelCarreras(id){
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
