<!--
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Comisión - JavaScript</title>
    <script type="text/javascript">
      var calcularComision = function(){
        var valor1 = parseInt(document.getElementById('V1').value);
        if(valor1<=150){
          document.getElementById("resultado").value = "La venta es menor a S/.150, por eso no recibes comisión";
        }else if(valor1<=400){
          document.getElementById("resultado").value = "Resives comisión de 10%: "+ (valor1*0.1);
        }else if(valor1>400){
          document.getElementById("resultado").value = "Resives S/.50 más 9% de comisión de las ventas: "+ ((valor1*0.09)+50);
        }
      };
    </script>
  </head>
  <body>
    <form>
      <p>Venta 1: <input type="text" id="V1" size="20"></p>
      <p><input type="button" value="Calcular Comisión" onclick="calcularComision()"></p>
      <p>Resultado: <input type="text" size="100" id="resultado" disabled="disabled"></p>
    </form>
  </body>
</html>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Par o Impar - JavaScript</title>
    <script type="text/javascript">
      var validar = function(){
        var valor1 = parseInt(document.getElementById('V1').value);
        if(valor1%2==0){
          document.getElementById("resultado").value = "El número es par";
        }else{
          document.getElementById("resultado").value = "El número es impar";
        }
      };
    </script>
  </head>
  <body>
    <form>
      <p>Venta 1: <input type="text" id="V1" size="20"></p>
      <p><input type="button" value="Validar" onclick="validar()"></p>
      <p>Resultado: <input type="text" size="100" id="resultado" disabled="disabled"></p>
    </form>
  </body>
</html>
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Cantidad de Dígitos - JavaScript</title>
    <script type="text/javascript">
      var cantidad = function(){
        var valor1 = parseInt(document.getElementById('V1').value);
        var cont=0;

        while(valor1>=1){
          valor1=valor1/10;
          cont++;
        }
        document.getElementById("resultado").value = "El número de dígitos es "+ cont;

        var validar=valor1%10;
        valor1=(valor1-validar)/10;

        if(valor1%2==0){
          var sumpar=validar;
        }else{
          var sumimpar=validar;
        }
        document.getElementById("resultadopar").value = "La suma par es: "+ sumpar;
        document.getElementById("resultadoimpar").value = "La suma impar es: "+ sumimpar;
      };
    </script>
  </head>
  <body>
    <form>
      <p>Venta 1: <input type="text" id="V1" size="20"></p>
      <p><input type="button" value="Calcular" onclick="cantidad()"></p>
      <p>Resultado: <input type="text" size="100" id="resultado" disabled="disabled"></p>
      <p>Resultado de suma par: <input type="text" size="100" id="resultadopar" disabled="disabled"></p>
      <p>Resultado de suma impar: <input type="text" size="100" id="resultadoimpar" disabled="disabled"></p>
    </form>
  </body>
</html>
