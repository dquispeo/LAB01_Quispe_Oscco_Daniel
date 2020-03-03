<?php
$respuesta="";
$valor1 = 0;
if(isset($_POST)){
  $valor1 = $_POST['V1'];
  if($valor1%2==0){
    $respuesta = "Par";
  }else{
    $respuesta = "Impar";
  }
}
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Par e Impar - PHP</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <p>Número: <input type="text" id="V1" name="V1" size="20" value="<?php $valor1; ?>"></p>
      <p><input type="submit" name="B1" size="100" value="Calcular"></p>
      <p>Número: <?php echo $valor1; ?></p>
      <p>El número es: <?php echo $respuesta; ?></p>
    </form>
  </body>
</html>
