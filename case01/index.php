<?php 
include ('./main.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>case01</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="container">
        <form action="./result.php" name="registro" class="form__container" method="post">
            <label for="name" class="form__label-name">Nombre:</label>
                <input type="text" id="name" name="name" class="form__input-name" onclick="" require>
        
            <label for="surname" class="form__label-surname">Apellido:</label>
                <input type="text" id="surname" name="surname" class="form__input-surname" onclick="" require>
        
            <label for="surname" class="form__label-age">Edad:</label>
                <input type="number" id="age" name="age" class="form__input-age" onclick="" require>
        
                <button type="submit" class="form__button" name="btn" >¡Enviar!</button>
                <p name=""></p>
        </form>
    </div>
    <!-- JAVASCRIPT-->
    <!-- <script src="./js/main.js"></script> -->
</body>
</html>