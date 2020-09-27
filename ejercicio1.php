<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/estilos1.css">
    <title>Operaciones con 2 numeros</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EVALUACION WEB 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EJERCICIOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ejercicio1.php">Ejercicio 1</a>
          <a class="dropdown-item" href="ejercicio2.php">Ejercicio 2</a>
          <a class="dropdown-item" href="ejercicio3.php">Ejercicio 3</a>
          <a class="dropdown-item" href="ejercicio4.php">Ejercicio 4</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <header>
        <h2 class="title">Operaciones Matematicas con dos numeros</h2>
    </header>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="form" action="ejercicio1.php" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <p>Numero 1:</p>
                            <input type="number" class="form-control" placeholder="Ingrese Numero 1" name="numero1" requerid>
                        </div>
                        <div class="col-6">
                        <p>Numero 2:</p>
                         <input type="number" class="form-control" placeholder="Ingrese Numero 2" name="numero2" requerid>
                    </div>
            
                    <div class="col-12">
                        <p>Elija la operacion:</p>
                        <select name="opciones">
                            <option selected>Operaciones</option>
                            <option value="1">Sumar</option>
                            <option value="2">Restar</option>
                            <option value="3">Multiplicar</option>
                            <option value="4">Dividir</option>
                        </select>
                    </div>
                        
                    <button type="submit" class="btn btn-success  mt-2 btn-block" name="botonCalcular">Calcular</button>
                </form>
            </div>
      

                        

                    <?php

                        if(isset($_POST["botonCalcular"])){

                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];
                            $opciones=$_POST["opciones"];
                            $suma;
                            $resta;
                            $multiplicacion;
                            $division;

                        switch($opciones){
                            case 1:
                                $suma=$numero1+$numero2;
                           echo("La suma es: " .$suma);
                            break;
                            case 2:
                                $resta=$numero1-$numero2;
                                echo("La resta es: " .$resta);
                            break;
                            case 3:
                                $multiplicacion=$numero1*$numero2;
                                echo("La multiplicacion es: " .$multiplicacion);
                            break;
                            case 4:
                                $division=$numero1/$numero2;
                                if($numero2 != 0){
                                echo("La division es: " .$division);
                                }else{
                                    echo("no se puede hacer la division");
                                }
                            break;

                        }
                    }   
                   ?>
        </div>
    </div>
</main>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>