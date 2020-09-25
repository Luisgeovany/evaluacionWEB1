<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <title>Calcular IMC</title>
</head>
<body>
    <header>
        <div>
            <h2>Calcular Indice de masa corporal</h2>
        </div>
    </header>
    <main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                    
                <form class="form mt-4" action="ejercicio2.php" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <p>Ingrese su peso en kg:</p>
                            <input type="text" class="form-control " placeholder="Ingrese su peso" name="peso" requerid>
                            <br>
                            <p>Ingrese su estatura:</p>
                            <input type="text" class="form-control" placeholder="Ingrese su estatura en cm:" name="estatura" requerid>
                        </div>
                        <div class="row">
                        <button type="submit" class="btn btn-danger  mt-4 btn-block" name="botonCalcular">Calcular IMC</button>
                        </div>
                    </div>                   
                </form>
            </div>

            <?php
                if(isset($_POST["botonCalcular"])){

                    $peso=$_POST["peso"];
                    $estatura=$_POST["estatura"];
                    $indice=$peso/($estatura*$estatura);

                    if($indice<18.5){
                    echo("Su IMC es de: " .$indice ." *** Usted tiene un peso insuficiente *** ");

                    }else if($indice>18.5 && $indice<24.9){
                        echo("Su IMC es de " .$indice ." *** Usted tiene un peso Normal *** ");


                    }else if($indice>25 && $indice<26.9){
                        echo("Su IMC es de " .$indice);
                        echo(" *** Usted tiene un Sobrepeso grado 1  *** ");

                    }else if($indice>27 && $indice<29.9){
                        echo("Su IMC es de " .$indice);
                        echo(" *** Usted tiene un Sobrepeso grado 2  *** ");

                    }else if($indice>30 && $indice<34.9){
                        echo("Su IMC es de " .$indice);
                        echo(" *** Usted tiene un Sobrepeso grado 2  *** ");
    

                    }else if($indice>35 && $indice<39.9){
                        echo("Su IMC es de " .$indice);
                        echo(" *** Usted tiene Obesidad Tipo 1  *** ");

                    }else if($indice>40 && $indice<49.9){
                        echo("Su IMC es de " .$indice);
                        echo(" *** Usted tiene   Obesidad Tipo 3  *** ");

                    }else if ($indice>50){
                        echo("Su IMC es de " .$indice);
                        echo(" *** Usted tiene   Obesidad Tipo 4  *** ");
                    }
                }
                

            ?>

        </div>
    </div>


    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>