
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mi Página Web</title>
  <style>
    /* Estilos del sidebar */
    .sidebar {
      width: 250px;
      background-color: #332;
      color: #fff;
      padding: 20px;
      position: fixed;
      height: 100%;
    }
    
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      margin-bottom: 20px;
    }

    /* Estilos de la barra de navegación */
    .navbar {
      background-color: #444;
      color: #fff;
      padding: 40px;
    }

    .navbar a {
      color: #fff;
      text-decoration: none;
      margin-right: 80px;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  
  <div class="sidebar">
    <h2>Sidebar</h2>
    <a href="#">Enlace 1</a>
    <a href="#">Enlace 2</a>
    <a href="#">Enlace 3</a>
    <a href="#">Enlace 4</a>
    <a href="#">Enlace 5</a>
    <a href="#">Enlace 6</a>
    <a href="#">Enlace 7</a>
    <a href="#">Enlace 8</a>
  </div>

  <!-- Contenido principal -->
  <div style="margin-left: 300px; padding: 0px;">
    <!-- Barra de navegación -->
    <div class="navbar">
      <a href="#">Inicio</a>
      <a href="#">Acerca de</a>
      <a href="#">Servicios</a>
      <a href="#">Contacto</a>
      <a href="#">Usuario</a> <!-- Enlace para el usuario -->
    </div>
    
    <!-- Contenido de la página -->
    <h1>Bienvenido a mi página web</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>
  </div>
</body>
</html>