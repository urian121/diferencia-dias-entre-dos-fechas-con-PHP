<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diferencia de dias entre dos fechas con PHP</title>
</head>

<body>

  <h2>Mostrando algunas formas de conseguir las diferencias (dias) entre dos fechas</h2>

  <?php
  $fecha1c = "2023-01-14";
  $fecha2c = "2023-01-16";
  $diferenciac = (strtotime($fecha2c) - strtotime($fecha1c)) / (60 * 60 * 24);
  echo "La diferencia de días entre $fecha1c y $fecha2c es de $diferenciac días.";
  echo '<br><br>';


  $fecha1 = "2023-01-01";
  $fecha2 = "2023-01-03";
  $diferencia = (new DateTime($fecha1))->diff(new DateTime($fecha2))->days;
  echo "La diferencia de días entre $fecha1 y $fecha2 es de $diferencia días.";
  echo '<br><br>';

  /*** */
  $fecha1 = new DateTime("2022-01-01");
  $fecha2 = new DateTime("2022-01-31");
  $diferencia = $fecha1->diff($fecha2)->days;
  echo "La diferencia de días entre " . $fecha1->format('Y-m-d') . " y " . $fecha2->format('Y-m-d') . " es de $diferencia días.";
  echo '<br><br>';

  /*** */
  $fecha1 = new DateTime('2022-01-01');
  $fecha2 = new DateTime('2022-01-31');
  $intervalo = $fecha1->diff($fecha2);
  $diferencia = $intervalo->format('%a');
  echo "La diferencia de días entre " . $fecha1->format('Y-m-d') . " y " . $fecha2->format('Y-m-d') . " es de " . $diferencia . " días.";
  echo '<br><br>';
  ?>


</body>

</html>