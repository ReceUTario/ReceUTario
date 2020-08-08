<!doctype html>
<html lang="es">
  <head>
    <title>Iniciar seccion</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../Css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../Css/Cascadas.css">
  <link  rel="icon"   href="../Img/ReceUtario_Logo_sin_fondo%201.png" type="image/png" />

  </head>

  <body>
  <header>
    <!--Barra de navegacion --> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav">
  <a href="../Index.php"><img src="../Img/Logo.png" alt="Logo" height="30" width="150" class="img-fluid logo" ></a>
  <div class="container bast w-60" style="border:0px; text-align: center;">
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
     <a class="dropdown-item" href="login.php">Iniciar sesion</a>
    <a class="dropdown-item" href="register.php">Registrarse</a>

  </div>
    </div>
  </div>

</nav>
<br>

<!-- -->
  </header>
		<div class="container-fluid">
		
		<div class="jumbotron mt-4">
			<div class="row">
				<div class="col-lg-12">		
					<div class="card">
						<div class="loginBox">
							<img src="../Img/login.png" width="200" height="190" class="img-responsive" alt="imagen de la plicacion web">
							<h2>Iniciar sesión</h2>

							<form action="check-login.php" method="post">                           	
								<div class="form-group">									
									<input type="email" class="form-control input-lg" name="email" placeholder="Email" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" name="password" placeholder="Password" required>       
								</div>								    
									<button type="submit" class="btn btn-success btn-block">Iniciar sesión</button>
							</form>
							<!--Contraer un formulario cuando el usuario hace clic en ¿Perdió su contraseña? enlace -->
							<p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Perdiste tu contraseña?</a></p>	
							<div class="collapse" id="showForm">
								<div class='well'>
									<form action="" method="post">
										<div class="form-group">										
											<input type="email" class="form-control" name="email" placeholder="Ingrese su Email asociada a su cuenta." required>
										</div>
										<button type="submit" class="btn btn-dark">Recuperar contraseña</button>
									</form>								
								</div>
							</div>
													
							<hr><p>Ya tienes cuenta? si no tienes <a href="register.php" title="Crea una cuenta">Crea una cuenta</a>.</p>								
						</div><!-- /.loginBox -->	
					</div><!-- /.card -->
				</div><!-- /.col -->
			</div><!--/.row-->
            </div> <!--Jumbotron -->
		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>	