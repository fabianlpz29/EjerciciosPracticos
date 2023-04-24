<?php
class Repetidor{
    public $image;

    public function __construct($image)
    {
        $this->image=$image;
    }

    public function Repetir(){
        for ($i= 0; $i < $this->image; $i++){
            echo "<img src='./img/real.jpg' alt='Imagen' width='200px' height='175px'> ";
        }
    }
}

$print = new Repetidor($_POST['image']);

$print->Repetir();
?>


