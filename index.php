
<?php




?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ### link a Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- 
    <div class="container mt-5">
        <h2>Crea la tua nuova Password:</h2>
        <div class="col-2" >
            <button class="btn btn-success">Genera Password</button>
        </div>
        <div class="col-6" >
            <form method="GET" class="row">
            <input type="number" name="lunghezza" min="1" max="10" required>  
            </form>
        </div>
    </div>
     -->

     <div class="container mt-5">
        <h2>Generatore Password Casuale</h2>

        <form action="index.php" method="get" class="form-inline">
            <div class="form-group mr-2">
                <label for="lunghezza" class="mr-2">Lunghezza della password:</label>
                <input type="number" name="lunghezza" class="form-control" min="1" max="10" required>
            </div>
            <button type="submit" class="btn btn-success">Genera Password</button>
        </form>


        <?php
        // Funzione per generare una password casuale di lunghezza specificata
        function generaPassword($lunghezza) {
            $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
            $password = '';
            for($i = 0; $i < $lunghezza; $i++) {
                $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
            }
            return $password;
        }

        // Verifica se la lunghezza della password è stata fornita tramite GET
        if(isset($_GET['lunghezza'])) {
            // Ottieni la lunghezza dalla richiesta GET
            $lunghezza = (int)$_GET['lunghezza'];

            // Genera la password casuale
            $password = generaPassword($lunghezza);

            // Stampala a schermo
            echo "<p class='mt-3'>La tua password casuale è: <strong>$password</strong></p>";
        }
        ?>
    </div>

</body>
</html>