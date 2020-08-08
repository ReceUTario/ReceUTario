<?php
session_start();
$usuario = $_SESSION['nombre'];

?>
<!DOCTYPE HTML>
<HTML lang = "es-MX" >
<HEAD>
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.min.css">
    <link  rel="icon"   href="Img/ReceUtario_Logo_sin_fondo%201.png" type="image/png" />
    <link rel="stylesheet" href="Css/Cascadas.css">
    <meta   charset =utf-8>
     <!--Breve descripcion -->
    <meta name="Descripcion" content="Recetas de cocina">
    <!--palabras claves -->
    <meta name="Keywirds" content="Recetas, comida, cocina, estudiantes">
    <meta name="Autor" content=" Angel Dewing Perez Maestro">
    <meta name="Autor" content=" Eliodoro Ramos Rauda">
    <meta name="Autor" content=" Jairo Alfredo Villareal Fierro">
    <meta name="Copyright" content="Jun 15 2020">      
    <TITLE>
    Inicio
    </TITLE>
</HEAD>
<BODY>
    <header> 
      <?php
       if (isset($_SESSION['loggedin'])) {  
    }
    else {
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Necesita iniciar sesión para acceder a esta página.</h4>
        <p><a href='app/login.php'>Inicie sesión aqui!</a></p></div>";
        exit;
    }
// verificando la hora ahora cuando comienza la página check-login.php
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Tu sesión ha expirado!</h4>
        <p><a href='app/login.php'>Inicia sección aqui</a></p></div>";
        exit;
        }
        
    ?>
    <!--Barra de navegacion --> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav">
  <a href="Index.php"><img src="Img/Logo.png" alt="Logo" height="30" width="150" class="img-fluid logo" ></a>
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
     <a class="dropdown-item" href="app/login_usu.php">Cambiar de usuario</a>
    <a class="dropdown-item" href="app/logout.php">Cerrar sesiòn</a>
    <a class="dropdown-item" href="app/logout.php">Subir receta</a>

  </div>
    </div>
  </div>

</nav>


<br>
<!-- -->
<div class="text-center">

  <figure>

  <img src="Img/user.png" class="figure-img img-fluid rounded" alt="imagen de usuario" width="50" height="60">
  <figcaption class="figure-caption" style="color: black;"> <?php echo "$usuario"; ?></figcaption>
</figure>
</div>
    </header>  
               <div class="container-fluid">
           <div class="jumbotron mt-4">
<!-- Carrucel -->
             
              <div id="carouselExampleCaptions" class="carousel slide container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="postres/hot-cakes_usu.php"><img src="Img/carrucel1.png" class="d-block img-fluid" alt="Postre de piña"></a>
      <div class="carousel-caption d-none d-md-block">
       <h5>RICOS HOT CAKES</h5>
        <p>Ideal para un desayuno muy rico y lleno de sabor a hogar.</p>
      </div>
    </div>
    <div class="carousel-item">
        <a href="bebidas/Agua-de-sandia_usu.php"><img src="Img/carrucel2.png" class="d-block img-fluid" alt="Agua de sandia"></a>
      <div class="carousel-caption d-none d-md-block">
        <h5>AGUA DE SANDIA</h5>
        <p>Recomendada para estas epocas de mucha calor, rica, ligera y refrescante.</p>
      </div>
    </div>
    <div class="carousel-item">
        <a href="comidas/tortitas-de-papa - copia.php"><img src="Img/carrucel3.png" class="d-block img-fluid" alt="Tortitas de papa con queso"></a>
      <div class="carousel-caption d-none d-md-block">
        <h5>TORTITAS DE QUESO CON PAPA</h5>
        <p>Buscas comer algo rico y sencillo de preparar, tienes la opcion perfecta.</p>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Fin de Carrucel -->
              <br>
              <hr>
               <h1 class="display text-center">POSTRES</h1>
               <p class="lead text-center">Ricos, delicioso y muy facil de hacer.</p>
               <hr>   
               <br>
<!-- Muestras -->
        <div class="container text-center">
                <div class="mues container-fluid">
                    <div>
                        <a href="postres/tapioca-con-leche_usu.php"><img src="Img/Postres/tapioca_durazno.png" alt="Logo HTML5 circular" class="img-fluid"></a>
                    </div>
                    <div>
                      <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Tapioca con durazno</b></p>
                    
                    </div>
                </div>
                <div class="mues container-fluid">
                    <div>
                        <a href="postres/fresas-con-crema_usu.php"><img src="Img/Postres/Fresas_crema.png" alt="Logo CSS circular" class="img-fluid"></a>
                    </div>
                    <div >
                     <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Fresas con crema</b></p>
                        <br>
                    </div>
                </div>
                 <div class="mues container-fluid">
                    <div>
                        <a href="postres/carlota-de-limon_usu.php"><img src="Img/Postres/Carlota.png" alt="Logo PHP circular" class="img-fluid"></a>
                    </div>
                    <div>
                     <br>
                     <p class="text-danger">Postre</p>
                    <p><b>Pastel carlota de limón</b></p>
                    </div>
                </div>                 
                   <div class="mues container-fluid">
                    <div>
                        <a href="postres/pastel-de-galleta-oreo_usu.php"><img src="Img/Postres/pastel_oreo.png" alt="Logo PHP circular" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                        <p class="text-danger">Postre</p>
                        <p><b>Paste de galleta Oreo</b></p>
                    </div>
                </div>                   
                   <div class="mues container-fluid">
                    <div>
                        <a href="postres/ensalada-de-fruta_usu.php"><img src="Img/Postres/ensalada_frutas.png" alt="Logo PHP circular" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                        <p class="text-danger">Postre</p>
                        <p><b>Ensalada de frutas</b></p>
                        <br>
                    </div>
                </div>                            
                   <br>
                <br>
         <!-- -->
               <div class="container text-center ">
                <div class="mues container-fluid">
                    <div>
                        <a href="postres/pastel-de.zanahoria_usu.php"><img src="Img/Postres/pastel_zanahoria.png" alt="Pastel de Zanahoria" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Pastel de zanahoria.</b></p>
                        
                    </div>
                </div>
                <div class="mues container-fluid">
                    <div>
                        <a href="postres/postre-de-limon-y-arandano_usu.php"><img src="Img/Postres/limon_arandanos.png" alt="Postre de limon con arandanos" class="img-fluid"></a>
                    </div>
                    <div >
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Postre de limón con arandanos.</b></p>
                        
                    </div>
                </div>
                 <div class="mues container-fluid">
                    <div>
                        <a href="postres/gelatina-con-leche-y-fresa_usu.php"><img src="Img/Postres/gelatina_fresas.png" alt="Gelatina de leche con fresas" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Gelatina de leche y fresa.</b></p>
                        
                    </div>
                </div>                 
                   <div class="mues container-fluid">
                    <div>
                        <a href="postres/pay-de-queso_usu.php"><img src="Img/Postres/pay_queso.png" alt="Pay de queso" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Pay de queso.</b></p>
                        <br>
                    </div>
                </div>                   
                   <div class="mues container-fluid">
                    <div>
                        <a href="postres/paletas-de-mora_usu.php"><img src="Img/Postres/paleta_mora.png" alt="Paleta de mora" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Paleta de mora.</b></p>
                        <br>
                    </div>
                </div>  
                <br>
                <br>
        <!-- -->
                <div class="container text-center ">
                <div class="mues container-fluid">
                    <div>
                        <a href="postres/Musse-de-mango_usu.php"><img src="Img/Postres/mus_mango.png" alt="Mus de mango" class="img-fluid"></a>
                    </div>
                    <div>
                       <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Mus de mango.</b></p>
                        <br>
                    </div>
                </div>
                <div class="mues container-fluid">
                    <div>
                        <a href="postres/postre-frie-de-piña_usu.php"><img src="Img/Postres/pastel_pi%C3%B1a.png" alt="Pastel de piña" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Pastel de piña.</b></p>
                        <br>
                    </div>
                </div>
                 <div class="mues container-fluid">
                    <div>
                        <a href="postres/brownies_usu.php"><img src="Img/Postres/brownies.png" alt="Brownies" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Brownies.</b></p>
                        <br>
                    </div>
                </div>                 
                   <div class="mues container-fluid">
                    <div>
                        <a href="postres/cheesecake_usu.php"><img src="Img/Postres/chessecake.png" alt="Cheesecake" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>Cheesecake.</b></p>
                        <br>
                    </div>
                </div>                   
                   <div class="mues container-fluid">
                    <div>
                        <a href="postres/hot-cakes_usu.php"><img src="Img/Postres/hotcakes.png" alt="HotCakes" class="img-fluid"></a>
                    </div>
                    <div>
                        <br>
                       <p class="text-danger">Postre</p>
                        <p><b>HotCakes.</b></p>
                        <br>
                    </div>
                </div>                            
                   <br>
                <br>
                   </div>
            </div>
            </div>
            <hr>
            
<!-- Fin muestras -->
               
           </div>
        </div>
        <br>
    <footer>
      <p>Team ReceUTario &copy;2020</p>
    </footer>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</BODY>

</HTML>