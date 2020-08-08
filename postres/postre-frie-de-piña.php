<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Postre frio de piña</title>
<link  rel="icon"  href="../Img/ReceUtario_Logo_sin_fondo%201.png" type="image/png" />
<link rel="stylesheet" href="../css/estilos.css" >
<link rel="stylesheet" href="../Css/receta.css">
<link rel="stylesheet" href="../Css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<header>
<!--Barra de navegacion --> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav">
  <a href="../Index.php"><img src="../Img/Logo.png" alt="Logo" height="30" width="150" class="img-fluid logo" ></a>
  <div class="container bast w-60" style="  margin: auto; text-align: center;">
  <div class="container text-center">
  <form class="form-inline my-2 my-lg-0 w-100">
      <input class="form-control mr-sm-2 w-80 "type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
      </div>
   </div>

         <div style="margin-right: 30px;">
      <div class="dropdown">
  <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Opciones
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="../app/login.php">Iniciar sesion</a>
    <a class="dropdown-item" href="../app/register.php">Registrarse</a>

  </div>
    </div>
  </div>

</nav>
<br>
<!-- -->
</header>
<body> 
      <div class="container-fluid">
      <div class="jumbotron mt-4 marg-1">
                    <hr>
                     <h1 class="text-center roboto">Postre de piña </h1>
               <hr>
    <div class="container-fluid">
            <div class="container text-center"> 
                <img src="../img/postre11.jpeg" alt="Postre de piña" class="img-fluid border border-prymari" >
            </div>
               <hr>

        <div class="container text-center">


        <h2>Ingredientes</h2>
           <h6>* 1 Bote de piña en almibar</h6>
           <h6>* 1/2 Litro de nata para montar o creo de leche</h6>
           <h6>* 1 Paquete de gelatina neutra o grenetina</h6>
           <h6>* 1 Bizcocho base de tarta redonda</h6>
</div>
</div>
<hr>
   
        <div class="container-fluid text-center"><a href="../Bebidas.php"><button type="button" class="btn btn-outline-secondary" >Más recetas...</button></a>
                <!--Comentarios-->
       <br>
 <div class="container"> 
    <?php

  $conexion = mysqli_connect('localhost', 'root', '', 'receutuario');
  ?>
      <h1 class="text-center">Comentarios</h1>
      <?php
        $sql = "SELECT * from comentarios where clave = 44";
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

    

<div class="container-fluid">
<h2>Preparacion</h2>
<ol>
<li>Monta la nata para postre en un bol.(meter 30 minutos previamente en la nevera o en el con gelador).</li>   
<br>
<li>Disolver la nata con el almibar de la piña y un sobre de grenetina.</li>
<br>
<li>Coloca las rodajas de piña en el molde donde colocaras la mezcla anterior.</li>
<br>
<li>Colocar la mezcla sobre las rodajas.</li>
<br>
<li>Colocar el biscocho sobre la mezcla previamente servida.</li>
<br>
<li>Dejar enfriar por al menos 5 horas para poder servir.</li>
</ol>
</div>

    
</body>
</html>