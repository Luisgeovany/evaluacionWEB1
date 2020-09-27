<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos3.css">
    <title>Tienda Spring step</title>
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
        <h1>ALMACEN SPRING STEP </h1>
        <h2>PROMOCION !!!</h2>
        <ul>
            <li>* Si son 3 pares se les dará un 10% de descuento al cliente sobre el total de la compra;</li>
            <li>* Si el número de zapatos es mayor 3 pares, pero menor o igual de 8 pares, se le otorga un 20% de descuento</li>
            <li>* Si son más 8 pares de zapatos se otorgará un 50% de descuento. Defina la cantidad de variables que necesite, el costo de cada par de zapatos y establezca el valor total de la compra de zapatos.</li>
        </ul>
    </header>

    <main>
        <form class="form mt-4" action="ejercicio3.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <label for="">Pares de Zapatos:</label>
                        <br>
                        <input type="text" class="form-control" name="zapatos"placeholder="Ingrese pares de zapatos">
                    </div>  
                </div> 
                <div class="row">
                <div class="col-4">
                    <label for="">Precio de Zapatos</label>
                    <br>
                    <input type="text" class="form-control"name="precio" placeholder="Ingrese precio de Zapatos">
                </div> 
            </div> 
            <div class="row">
                 <div class="col-4">
                    <button type="submit" class="btn btn-dark  mt-2 btn-block" name="botonCalcular">Calcular</button>
                </div>
            </div>
        </form>


        <?php if(isset($_POST["botonCalcular"])):?>
            <p class="display">
                <?php 
                    $paresZapatos=$_POST["zapatos"];
                    $precioZapatos=$_POST["precio"];
                    $total=$precioZapatos*$paresZapatos;
                    $descuento;
                    $totalPagar;

                    if($paresZapatos==3){
                        $descuento=($total*10)/100;
                        $totalPagar=$total-$descuento;
                        echo("El total de su compra es -------: " .$total);
                        echo("<br>");
                        echo("Tiene un descuento del 10% -----:" .$descuento);
                        echo("<br>");
                        echo("Total a pagar: " .$totalPagar);

                    }else if($paresZapatos>3 && $paresZapatos<=8){
                        $descuento=($total*20)/100;
                        $totalPagar=$total-$descuento;
                        echo("El total de su compra es -------: " .$total);
                        echo("<br>");
                        echo("Tiene un descuento del 10% -----:" .$descuento);
                        echo("<br>");
                        echo("Total a pagar: " .$totalPagar);

                    }else if($paresZapatos>8){
                        $descuento=($total*50)/100;
                        $totalPagar=$total-$descuento;
                        echo("El total de su compra es -------: " .$total);
                        echo("<br>");
                        echo("Tiene un descuento del 50% -----:" .$descuento);
                        echo("<br>");
                        echo("Total a pagar: " .$totalPagar);
                    }else if ($paresZapatos<3){
                        $total=$paresZapatos*$precioZapatos;
                        $descuento=0;

                        echo("El total de su compra es -------: " .$total );
                        echo("<br>");
                        echo("      No tiene descuento ");
                        echo("<br>");
                        echo("Total a pagar: " .$total);
                    }

                ?>
            </p>

        <?php endif?>


    </main>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>