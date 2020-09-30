<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos4.css">
    <title>Sueldo semanal</title>
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
        <h2>Calcular Salario semanal</h2>
        
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
            if(isset($_POST["botonCalcular"])):?>
                <p class="display">
                    <?php
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


                    ?>

                </p>
                
            
        <?php endif ?>


    </main>   
    <footer></footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>