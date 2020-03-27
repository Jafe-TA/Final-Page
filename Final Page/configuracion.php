
<html>
<head>
    <link rel="icon" href="LogoEnexius.jpeg">
    <title>Enexius</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Estilospaginaprincipal.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
<!---->
<div class="pagina">
<!---Barra------------->
    <div style="width: ; height:50px; background-color: rgb(255, 255, 255); box-shadow: 0px 10px 5px rgba(128, 128, 128, 0.336);
         position: relative;">
        <a href="">
        <div class="botones" style="float: right;">
            <a href="" style="color: BLACK; margin: 5px; text-decoration: none; line-height: 2.5rem;">
                <img src="ajustes.png" style="margin-right:5px; margin-top: 0px;">Configuracion</a>
        </div>
        
        <a href="">
            <div class="botones" style="float: left; margin-left: 50px;">
                <a href="Pagina principal Sesion.php" style="color: BLACK; margin: 5px; text-decoration: none; line-height: 2.5rem;">
                    <img src="carrera.png" style="margin-right:5px; margin-top: 0px;">Inicio</a>
            </div>
        </a>

        <a href="#fotos">
            <div class="botones" style="float: left; margin-left: 5px;">
                <a href="Pagina Fotos.html" style="color: BLACK; margin: 5px; text-decoration: none; line-height: 2.5rem;">
                    <img src="camara.png" style="margin-right:5px; margin-top: 0px;">Fotos</a>
            </div>
        </a>
    </div>
<!--------------------->
<div class="" style="margin: 30px;">
<div id="accordion1">
  <div class="card">
    <div class="card-header" id="cabecera1">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta1" aria-expanded="true" aria-controls="respuesta1" style="color:black;">
        <img src="cuentas.png" style="margin-right:5px; margin-top: 0px;">Cuenta
        </button>
      </h5>
    </div>
    <div id="respuesta1" class="collapse show" aria-labelledby="cabecera1" data-parent="#accordion1">
      <div class="card-body">
            Nombre de usuario:<?php echo $user; ?><br>
            contraseña:<?php echo $pass; ?><br>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="cabecera2">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#respuesta2" aria-expanded="false" aria-controls="respuesta2">
          Pregunta frecuente 2
        </button>
      </h5>
    </div>
    <div id="respuesta2" class="collapse" aria-labelledby="cabecera2" data-parent="#accordion1">
      <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
          mollit anim id est laborum.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="cabecera3">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#respuesta3" aria-expanded="false" aria-controls="respuesta3">
          Pregunta frecuente 3
        </button>
      </h5>
    </div>
    <div id="respuesta3" class="collapse" aria-labelledby="cabecera3" data-parent="#accordion1">
      <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
          mollit anim id est laborum.
      </div>
    </div>
  </div>
</div>    

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   

