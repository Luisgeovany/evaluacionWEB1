<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <title>Sueldo semanal</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">EVALUACION WEB 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="ejercicio1.php">Ejercicio1<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ejercicio2.php">Ejercicio2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ejercicio3.php">Ejercicio3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ejercicio4.php">Ejercicio4</a>
                    </li>
                </ul>
                
            </div>
        </nav>
    <header>
        <h2>Calcular Salario semanal</h2>
        <h3>Ingrese la siguiente informacion:</h3>
    </header>
    <main>
    <form class="form mt-4" action="ejercicio4.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <p>Ingrese las horas trabajadas en la semana:</p>
                        <br>
                        <input type="text" class="form-control" name="horaSemana"placeholder="Ingrese horas:">
                    </div>  
                </div> 
                
            <div class="row">
                 <div class="col-4">
                    <button type="submit" class="btn btn-primary  mt-2 btn-block" name="botonCalcular">Calcular</button>
                </div>
            </div>
        </form>


        <?php
            if(isset($_POST["botonCalcular"])){
                $horas=$_POST["horaSemana"];
                $valorHora=20000;
                $salario;
               

                if($horas<=40){
                    $salario=$horas*$valorHora;
                    echo("Su salario es: " .$salario);

                }else if($horas>40){
                    $salario=40*$valorHora;
                    $salario=$salario+(($horas-40)*25000);
                    echo("Su salario es: " .$salario);
                }
            }
        ?>


    </main>   
    <footer></footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>