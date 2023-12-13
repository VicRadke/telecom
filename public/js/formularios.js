function mostrarFormulario(id) {
  // Oculta todos los formularios
  document.getElementById('div1').style.display = 'none';
  document.getElementById('div2').style.display = 'none';
  document.getElementById('div3').style.display = 'none';
  document.getElementById('div4').style.display = 'none';

  // Muestra el formulario correspondiente
  document.getElementById(id).style.display = 'block';
}