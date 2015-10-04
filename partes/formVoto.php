
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">


    <div class="container">

      <form class="form-ingreso" onsubmit="GuardarVoto()">

        <h2 class="form-ingreso-heading">Voto</h2>
        <label for="provincia" class="sr-only">Provincia</label>
        <input type="text"  minlength="6"  id="provincia" title="Se necesita un nombre de provincia" class="form-control" placeholder="provincia" required="" autofocus="">

        <label for="presidenciable" class="sr-only">Presidenciable</label>
        <input type="text"  minlength="6"  id="presidenciable" title="Se necesita un presidenciable"  class="form-control" placeholder="presidenciable" required="" autofocus="">

         <label for="sexo" class="sr-only">Sexo</label>
        <input type="text"  minlength="6"  id="sexo" title="Se necesita un sexo"  class="form-control" placeholder="sexo" required="" autofocus="">

         <label for="dni" class="sr-only">Dni</label>
        <input type="text"  minlength="8"  id="dni" title="Se necesita un dni"  class="form-control" placeholder="dni" required="" autofocus="">

       <input readonly   type="hidden"    id="id" class="form-control" >
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>

    </div> <!-- /container -->


    
  
