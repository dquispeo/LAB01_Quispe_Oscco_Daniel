<?php
$respuesta="";
$total=0;
$valor1 = 0;
if(isset($_POST)){
  $valor1 = $_POST['V1'];
  if($valor1<=150){
    $respuesta = "La venta es menor a S/.150, por eso no recibes comisión.";
  }else if($valor1<=400){
    $respuesta = "Resives comisión de 10%: ";
    $total=($valor1*0.1);
  }else if($valor1>400){
    $respuesta = "Resives S/.50 más 9% de comisión de las ventas: ";
    $total=(($valor1*0.09)+50);
  }
}
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Comisión - PHP</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <p>Valor 1: <input type="text" id="V1" name="V1" size="20" value="<?php $valor1; ?>"></p>
      <p><input type="submit" name="B1" size="100" value="Calcular"></p>
      <p>Venta: <?php echo " S/.".$valor1; ?></p>
      <p>Resultado: <?php echo $respuesta." S/.".$total; ?></p>
    </form>
  </body>
</html>
