<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
  </head>
  <body>
    <?php 
      $nome = "Empresa";
      $sobrenome = "teste 3";
      $rua = "Maicon Dias";
      $numero = "23";
      $bairro = "Molon";
      $cep = "00000000";
      $cidade = "PIRACICABA";
      $estado = "SP";

      echo "<table border='1'> <tr>";
      echo "<td>NOME:<br> " . $nome . " " . $sobrenome . "</td> </tr>";
      echo "<tr><td> ENDEREÇO: <br> Rua " . $rua . ", " . $numero . ", " . $bairro . ", " . $cep . " </td></tr>";
      echo "<tr><td>CIDADE:<br> " . $cidade . "</td> ";
      echo "<td>Estado:<br> " . $estado . "</td> </tr></table>";
      
    ?>
  </body>
</html>