<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>Ejercicio Herencia</h2>";
    require_once("./padre/Animal.php");
    require_once("./hija/perro.php");
    require_once("./hija/gato.php");
    $perro= new Perro;
    $gato= new Gato;

    echo "<h2>Métodos comer</h2>";
    $perro->comer();
    $gato->comer();
    echo "<h2>Métodos dormir</h2>";
    $perro->usardormir();
    $gato->usardormir();

?>
</body>
</html>