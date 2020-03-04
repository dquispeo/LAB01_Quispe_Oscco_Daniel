<?php
$valor1 = 0;
$valor2 = 0;
if(isset($_POST)){
  $valor1 = $_POST['V1'];
  $valor2 = $valor1;
  $cant=0;
  $par=0;
  $impar=0;
  $numero=0;
  while($valor1>0){
    $numero=$valor1%10;
    if($numero%2==0){
      $par=$par+$numero;
    }else{
      $impar=$impar+$numero;
    }
    $cant=$cant+1;
    $valor1=round($valor1/10);
  }
}
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Cantidad de Dígitos - PHP</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <p>Número: <input type="text" id="V1" name="V1" size="20" value="<?php $valor1; ?>"></p>
      <p><input type="submit" name="B1" size="100" value="Calcular"></p>
      <p>Número: <?php echo $valor2; ?></p>
      <p>Número de dígitos: <?php echo $cant; ?></p>
      <p>Suma de número pares: <?php echo $par; ?></p>
      <p>Suma de número impares: <?php echo $impar; ?></p>
    </form>
  </body>
</html>
