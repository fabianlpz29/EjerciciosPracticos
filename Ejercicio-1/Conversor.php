<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
class Temperatura{
    public $grado;

    public function __construct($grado)
    {
        $this->grado = $grado;
    }

    public function Convertir(){
        $conversion = ($this->grado * 1.8)+32;
        return $conversion;
    }
}

$temperatura = new Temperatura($_POST['grado']);
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 mt-1">
                <div class="card shadow-lg border-danger">
    
                    <div class="card-header bg-success">
                        <b>Conversor de celsius a fahrenheit</b>
                    </div>
                      <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <?php
                                echo $temperatura->grado . " centigrados es igual a " . $temperatura->Convertir() . " fahrenheit";
                                ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>



