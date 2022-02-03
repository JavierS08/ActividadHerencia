<?php

class Gato extends Animal{
    public function comer(){
        echo "<p>Animal comiendo</p>";
    
    }
    public function usardormir(){
        echo "<p>Gato durmiendo</p>";
        $this->dormir();
    }

}
