<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
  </head>
  <body>
  <?php 
    $altura = 1.70;
    $peso = 60;

    function imc() {
      global $altura, $peso;
      return "Altura: " . $altura . "<br> Peso: "
      . $peso . "<br><br> Indice de Massa Corporal: "
      . $peso / $altura;
    }
    echo imc();
  ?>
  </body>
</html>