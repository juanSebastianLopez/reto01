<?php 
include('./main.php');
$result = 'Hola '.$name.' '.$surname.' que tal?, como te ha ido?<br>  Tenes cara de tener '.$age.' años de edad.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./css/result.css">
</head>
<body>

    <div class="container">
     <div class="container__title">
            <div class="container__title-restul">
                
                <h2><?= $result ?></h2>
                <h3><?= $resultEdad ?></h3>
                <button class="form__button"><a href="./index.php">Volver</a></button>
            </div>
     </div>
    </div>

</body>
</html>