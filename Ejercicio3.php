<!DOCTYPE HTML>
<html>
    <head>
        <title>Ecuación cuadrática</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <br>
    <br>
    <div class="container">
    
    <h1 align = "center">Ecuacion Cuadratica</h1>
    <br>
    </div>
  <div class="container">
  <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group row">
        <label for="a" class="col-sm-2 col-form-label">Ingrese el valor de "a" </label>
        <div class="col-sm-10">
          <input name="a" class="form-control" required="required" step="0.000001" type="number">
        </div>
  </div>
  </div>
  <div class="container">
  <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group row">
        <label for="b" class="col-sm-2 col-form-label">Ingrese el valor de "b"</label>
        <div class="col-sm-10">
          <input name="b" class="form-control" required="required" step="0.000001" type="number">
        </div>
  </div>
  </div>
  <div class="container">
  <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group row">
        <label for="c" class="col-sm-2 col-form-label">Ingrese el valor de "c" </label>
        <div class="col-sm-10">
          <input name="c" class="form-control" required="required" step="0.000001" type="number">
        </div>
  </div>
  </div>
  <div class="form-group row">
        <div class="offset-sm-5 col-sm-10">
          <input value="Calcular Raices" type="submit" name="Submit" class="btn btn-primary" />
        </div>
      </div>

  </form> 
  
  <?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $a = floatval ($_POST['a']);
    $b = floatval ($_POST['b']);
    $c = floatval ($_POST['c']);
    $discriminante=$b*$b-4.0*$a*$c;
    if($discriminante<0)
    {
        $discriminante=-$discriminante;
       echo "<h2 autocomplete='off' align = 'center'>Soluciones Imaginarias</h2><br>";
    }
    else{
        echo "<h2 autocomplete='off' align = 'center'>Soluciones Reales</h2><br>";
    }
    if($a!=0)
    {
        $x1=(-$b+sqrt($discriminante))/2.0/$a;
        $x2=(-$b-sqrt($discriminante))/2.0/$a;
    }
    else
    {
        $x1=0;
        $x2=0;
        echo "<h2 align = 'center' autocomplete='off'  >No es una ecuaci&oacute;n cuadr&aacute;tica<br></h2><br>";

    }

    echo "<h4  align = 'center'>Valor de x1 :  $x1 </h4><br>";
    echo "<h4  align = 'center'>Valor de x2 :  $x2 </h4><br>";
}
?>
 <form method="get" action="Ejercicio3.php">  
        <div class="offset-sm-5 col-sm-10">
          <input Type="submit" value="Intentar de nuevo" class="btn btn-danger" href="Parcial_CM150518_MS132476\Ejercicio3.php"/>
      </div>
  </form>
    </body>
</html>