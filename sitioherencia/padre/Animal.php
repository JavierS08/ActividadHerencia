<?php
//creamos la clase abstracta animal por lo cual no podra ser instanciada
abstract class Animal{
//definimos los métodos comer y dormir
public function comer(){
    echo "<p>animal comiendo</p>";
}

protected function dormir(){
    echo "<p>animal durmiendo</p>";
}

}
?>
