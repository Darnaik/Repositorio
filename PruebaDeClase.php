<html>
<head>
  <style>
    tr {
      width: 20px;
      height: 20px;
    }
    td {
      width: 20px;
      height: 20px;
    }
  </style>
</head>
  <?php
  // Función que asigna un color RGB aleatorio. Devuelve la variable $rgb
  function colorRGB() {
  //El bucle se repite hasta que el valor de $rgb sea una String de 6 digitos de longitud.
    do {
      $rgb=(dechex(rand(0,255)) . dechex(rand(0,255)) . dechex(rand(0,255)));
    } while (strlen($rgb)<6);
    return $rgb;

  }

  // Bucle que llena una variable array de 10 posiciones con combinaciones de color rgb aleatorio
  for ($color=1; $color<=10 ; $color++) {
    $tdcolor = array(colorRGB(),colorRGB(),colorRGB(),colorRGB(),colorRGB(),colorRGB(),colorRGB(),colorRGB(),colorRGB(),colorRGB());
  }

  //Asignación de la variable que escribirá el número de 1 a 100.
  $num=1;

  //Comienzo de creación de tabla 10 x 10
    echo "<table>";
    for ($cont1=1; $cont1<=10 ; $cont1++) { // Bucle que dibuja las filas.
        echo "<tr>";
      for ($cont2=1; $cont2 <=10 ; $cont2++) { // Bucle que dibuja las columnas

        //Condicional de pares e impares:
        //Pares: en negrita.
        if (($cont2 % 2) == 0) {
          echo "<td style=background-color:#";
          switch ($cont2) { // Usando el array $tdcolor, cada columna de pares tiene un color diferente creado aleatoriamente.
            case '2': echo $tdcolor[2]; break;
            case '4': echo $tdcolor[4]; break;
            case '6': echo $tdcolor[6]; break;
            case '8': echo $tdcolor[8]; break;
            case '10':echo $tdcolor[0]; break;
          }
          echo "><b>" . $num . "</b></td>";
        } else {
        //Impares: Sin negrita.
          echo "<td style=background-color:#";
          switch ($cont2) { // Usando el array $tdcolor, cada columna de impares tiene un color diferente creado aleatoriamente.
            case '1': echo $tdcolor[1]; break;
            case '3': echo $tdcolor[3]; break;
            case '5': echo $tdcolor[5]; break;
            case '7': echo $tdcolor[7]; break;
            case '9': echo $tdcolor[9]; break;
          }
          echo ">" . $num . "</td>";

        }
        $num++; //Incremento de valor escrito (1 a 100)
        echo "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  ?>
</html>
