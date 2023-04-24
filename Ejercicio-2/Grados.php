<?php
class Grados{
    public $temperatura;

    public function __construct($temperatura)
    {
        $this->temperatura = $temperatura;
    }

    public function Temperatura(){
        if ($this->temperatura <= 0){
            echo "<p style='color:blue'>Temperatura maximamente fria</p> ";
        } else if ($this->temperatura <= 30){
            echo "<p style='color:yellow'>Temperatura estable</p> ";
        } else if ($this->temperatura >= 31){
            echo "<p style='color:red'>Temperatura maxima caliente</p> ";
        } else{
            echo "Ingrese caracterers validos";
        }
    }
}

$grado = new Grados($_POST['temperatura']);
echo $grado->Temperatura()
?>