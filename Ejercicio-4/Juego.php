<?php

class Loteria
{
    public $numero;
    public $precio;

    public function __construct($numero,$precio)
    {
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function Ganar()
    {
        $ramdom = rand(0, 100);
        $contador =0;
        $premio = 0;
        $base = 70;

        if ($this->numero >= 0 && $this->numero <= 100) {
            if ($this->numero == $ramdom) {
                while($this->precio > $contador){
                    $premio = $premio + $base;
                    $contador = $contador + 1;
                }
                echo "usted jugo con el numero $this->numero el numero ganador fue $ramdom gano $premio";
            
            } else {
                echo "Lo sentimos usted jugo con el numero $this->numero el numero ganador fue $ramdom";
            }
        } else {
            echo "Ingresa un numero valido";
        }
    }
} 

$jugar = new Loteria($_POST['numero'],$_POST['precio']);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<style>
    body {
        background-image: url('img/images.jpeg');
        background-size: auto;
        background-repeat: repeat;
        background-attachment: fixed;
    }

    table {
        background-color: white;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card-header">
                    <p>Tabla de premios</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Valor</th>
                                <th>Premio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$1</td>
                                <td>$70</td>
                            </tr>
                            <tr>
                                <td>$2</td>
                                <td>$140</td>
                            </tr>
                            <tr>
                                <td>$3</td>
                                <td>$210</td>
                            </tr>
                            <tr>
                                <td>$4</td>
                                <td>$280</td>
                            </tr>
                            <tr>
                                <td>$5</td>
                                <td>$350</td>
                            </tr>
                            <tr>
                                <td>$6</td>
                                <td>$420</td>
                            </tr>
                            <tr>
                                <td>$7</td>
                                <td>$490</td>
                            </tr>
                            <tr>
                                <td>$8</td>
                                <td>$560</td>
                            </tr>
                            <tr>
                                <td>$9</td>
                                <td>$630</td>
                            </tr>
                            <tr>
                                <td>$10</td>
                                <td>$700</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div class="card-body">
                    <div class="div">
                        <p>Jueego al azar</p>
                    </div>
                    <br>
                    <div class="ganador" style="background-color: white;">
                        <?php
                        $jugar->Ganar();
                        ?>
                    </div>
                    <br>
                    <br>
                    <form action="index.html" method="post">
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Jugar de nuevo</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>

</html>