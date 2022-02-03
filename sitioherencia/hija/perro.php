<?php
class Perro extends Animal{
    public function comer(){
        echo "<p> perro, come huesos</p>";
        
    }
    public function usardormir(){
        echo "<p>Perro durmiendo</p>";
        $this->dormir();
    }

}




