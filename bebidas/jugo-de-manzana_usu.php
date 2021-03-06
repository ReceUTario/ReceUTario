<?php
session_start();
$usuario = $_SESSION['nombre'];

?>
<!DOCTYPE HTML>
<HTML lang = "es-MX" >
<HEAD>
    <title>Jugo de manzana</title>
   <link  rel="icon"  href="../Img/ReceUtario_Logo_sin_fondo1.png" type="image/png" />
<link rel="stylesheet" href="../Css/estilos.css" >
<link rel="stylesheet" href="../Css/bootstrap.min.css">
<link rel="stylesheet" href="../Css/receta.css">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </HEAD>
<header>
    <?php
       if (isset($_SESSION['loggedin'])) {  
    }
    else {
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Necesita iniciar sesión para acceder a esta página.</h4>
        <p><a href='../app/login.html'>Inicie sesión aqui!</a></p></div>";
        exit;
    }
// verificando la hora ahora cuando comienza la página check-login.php
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Tu sesión ha expirado!</h4>
        <p><a href='../app/login.html'>Inicia sección aqui</a></p></div>";
        exit;
        }
        
    ?>
  <!--Barra de navegacion --> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav">
  <a href="../Index_usuario.php"><img src="../Img/Logo.png" alt="Logo" height="30" width="150" class="img-fluid logo" ></a>
  <div class="container bast w-60" style="  margin: auto; text-align:center;">
  <div class="container text-center">
  <form class="form-inline my-2 my-lg-0 w-100">
      <input class="form-control mr-sm-2 w-80 "type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      </div>
   </div>

         <div style="margin-right: 30px;">
      <div class="dropdown">
  <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Opciones
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="../APP/login_usu.html">Cambiar de usuario</a>
    <a class="dropdown-item" href="../app/logout.php">Cerrar sesiòn</a>
    <a class="dropdown-item" href="../app/logout.php">Subir receta</a>

  </div>
    </div>
  </div>

</nav>
<br>
<!-- -->
<div class="text-center">
  <figure>

  <img src="../Img/user.png" class="figure-img img-fluid rounded" alt="imagen de usuario" width="50" height="60">
  <figcaption class="figure-caption" style="color: black;"> <?php echo "$usuario"; ?></figcaption>
</figure>
</div>
</header>
<body> 
      <div class="container-fluid">
      <div class="jumbotron mt-4 marg-1">
                    <hr>
                     <h1 class="text-center roboto">Jugo de manzana.</h1>
               <hr>
    <div class="container-fluid">
            <div class="container text-center"> 
                <img src="../img/agua11.jpg" alt="Jugo de manzana" class="img-fluid border border-prymari" >
            </div>
               <hr>

        <div class="container text-center">

        <h2>Ingredientes</h2>
        
           <h6>* 6 manzanas rojas grandes</h6>
            <h6>* Jugo de 2 limones </h6>
               <h6>* Endulzante a gusto</h6>
</div>
</div>
<hr>

        
   
<div class ="container-fluid">
<h2>Preparacion</h2>
<ol>
    <li>Primero que nada quitamos semillas, pabilos de cada manzana, pero no la cáscara, bien lavadas las rociamos con el jugo de los limones y el endulzante yo use stevia pueden usar hasta miel para más textura, y finalmente al mixer que quedara como un puré.</li>
    <br>
    <li>Luego lo mixamos una vez más y como no tengo juguera pase la mezcla por una bolsa como la que colamos el suero, y lo presionamos. Y va ir cayendo lentamente el jugo, color dorado, y no se oxidadara por el limón, quedara ácido y rico...natural y se bebe en el día. si tienen filtro de café bien fino también lo pueden pasar por allí.</li>
</ol>
</div>
 <hr>
        <div class="container-fluid text-center"><a href="../Bebidas_usu.php"><button type="button" class="btn btn-outline-secondary" >Más recetas...</button></a>
            </div>
                <!-- Comentarios -->

<br>

    <form method="POST" class="container ml-5">  
    <img src="../Img/user.png" alt="imagen de usuario" style="width: 20%; height: 20%;border-radius: 150px;"><br>
    <input type="text" name="nombre" placeholder="Nombre" required style="width: 30%; margin-top: 0px;margin-top: 0px; margin-bottom: 0px;padding-bottom: 0px; ">
     <textarea name="comentarios" cols="30" rows="5" placeholder="Escribe tus comentarios aqui" style="width: 80%;"></textarea><br>
    <input type="submit" name="register" class="btn btn-info" value="Enviar comentario">
  </form>
    
    <div class="container">
      <?php
  include("../comentarios/registrar_14.php");
  ?> 
  <br>
  <div class="container"> 
    <?php

  $conexion = mysqli_connect('localhost', 'root', '', 'receutuario');
  ?>
      <h1 class="text-center">Comentarios</h1>
      <?php
        $sql = "SELECT * from comentarios where clave = 14";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)){
        ?>
         
         <div class="container bg bg-dark" style="border: 1px solid; border-radius:20px;">
          <p class="text-white"><?php echo $mostrar ['nombre'] ?><br> 
          </p>
          <p class="bg-white" style="border: 1px solid; padding: 20px;"><?php echo $mostrar ['comentarios'] ?>
          <br><?php echo $mostrar ['fechareg'] ?></p>
        </div>
        <hr>
        <?php
        }
        ?>
        </div>
          </div>
    </div>
  </div>

       

       
        <footer>
      <p>Team ReceUTario &copy;2020</p>
    </footer>
    
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</body>
</html>