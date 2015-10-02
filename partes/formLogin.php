
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 <?php
session_start();
if(!isset($_SESSION['registrado'])){  ?>

    <div id="formLogin" class="container">

      <form  class="form-ingreso " onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
        <input type="submint" id="dni" minlength="4" class="form-control" placeholder="DNI" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      
      <p>DNI:1234</p>
      
      </form>



    </div> <!-- /container -->

  <?php }else{ echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";?>         
    <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
 <script type="text/javascript">
 MostarBotones();</script>
  <?php  }  ?>
