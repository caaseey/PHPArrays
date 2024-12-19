<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Ejercicio 1
    echo "Ejercicio 1 <br>";
    echo "<br>";
    $persona = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "cuidad" => "Barcelona");
    $contador = 1;
    foreach ($persona as $value) {
        echo "dato " . $contador . "º" .  ": " . $value . "<br>";
        $contador++;
    }
    echo "<br>";

    // Ejercicio 2
    echo "Ejercicio 2 <br>";
    echo "<br>";
    $persona = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "cuidad" => "Barcelona");
    foreach ($persona as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<br>";

    //Ejercicio 3
    echo "Ejercicio 3 <br>";
    echo "<br>";
    $persona["edad"] = 24;
    $contador = 1;
    foreach ($persona as $value) {
        echo "dato " . $contador . "º" .  ": " . $value . "<br>";
        $contador++;
    }
    echo "<br>";

    //Ejercicio 4
    echo "Ejercicio 4 <br>";
    echo "<br>";
    unset($persona['cuidad']);
    var_dump($persona);
    echo "<br>";
    echo "<br>";

    // Ejercicio 5
    echo "Ejercicio 5 <br>";
    echo "<br>";
    $letters = ["a", "b", "c", "d", "e", "f"];
    for ($i = 6; $i >= 1; $i--) {
        echo "letter " . $i . "º: " . $letters[$i - 1] . "<br>";
    }

    // Ejercicio 6
    echo "<br>";
    echo "Ejercicio 6 <br>";
    echo "<br>";
    $alumnos = array("Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($alumnos);
    echo "Notas de los estudiantes: ";
    foreach ($alumnos as $nombre => $nota) {
        echo "$nombre: $nota ";
    }
    echo "<br>";

    // Ejercicio 7
    $promedio = array_sum($alumnos) / count($alumnos);
    echo "<br>";
    echo "Ejercicio 7 <br>";
    echo "<br>";
    echo "Media de las notas: " . number_format($promedio, 2) . "<br>";
    echo "Alumnos con nota por encima de la media:<br>";
    foreach ($alumnos as $nombre => $nota) {
        if ($nota > $promedio) {
            echo "$nombre<br>";
        }
    }
    echo "<br>";

    // Ejercicio 8
    echo "<br>";
    echo "Ejercicio 8 <br>";
    echo "<br>";
    $maxValue = max($alumnos);
    $mejorAlumno = array_search($maxValue, $alumnos);
    echo "La nota más alta es " . $maxValue . " y el mejor alumno es " . $mejorAlumno;
    ?>
</body>

</html>