<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Agua de fresa</title>
    <link  rel="icon"  href="../Img/ReceUtario_Logo_sin_fondo%201.png" type="image/png" />
<link rel="stylesheet" href="../css/estilos.css" >
<link rel="stylesheet" href="../Css/bootstrap.min.css">
<link rel="stylesheet" href="../Css/receta.css">

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
                     <h1 class="text-center roboto">Agua de fresa.</h1>
               <hr>
    <div class="container-fluid">
            <div class="container text-center"> 
                <img src="../img/agua8.png"  alt="Agua de fresa"  class="img-fluid border border-prymari" >
            </div>
               <hr>
<div class="container text-center">
        <h2>Ingredientes</h2>
        
            <h6>* 1kg de fresa</h6>
            <h6>* 1 Taza de leche entera</h6>
            <h6>* 1 Taza de leche evaporada</h6>
            <h6>* 1 Taza de crema de coco</h6>
            <h6>* 1/2 Tza de crema para batir</h6>
            <h6>* 1 Cucharada de vainilla</h6>
            <h6>* Hielo</h6>
            <h6>* 1 L itro de agua</h6>
   </div>
   </div>
<hr>
<div class="container-fluid">
<h2>Preparacion</h2>
<ol>
    <li>Lava y desinfecta la fresas, enjuaga y retira los rabitos de las fresas.</li>
    <br>
    <li>Aparta 1/4 de las fresas y picalas en cuadritos, Reserva.</li>
    <br> 
    <li>Agrega el resto de las fresas y los demas ingredientes en la licuadora(exepto el agua) y porcesa.</li>
    <br> 
    <li>Sirve en una jarra grende con hielo, ajusta el dulzor con el agua a tu gusto.</li>
    <br>        
    <li>Incorpora los cubos de las fresas.</li>
    <br> 

</ol>
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
        $sql = "SELECT * from comentarios where clave = 1";
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