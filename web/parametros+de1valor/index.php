<?php
if(isset($_POST['ingredientes'])){
    $ingredientes = $_POST['ingredientes'];
    print_r($ingredientes);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" id="" value="teto solar"> teto solar

        </div>
        <input type="checkbox" name="ingredientes[]" id="" value="banco de couro"> banco de couro

        <div>
            <input type="checkbox" name="ingredientes[]" id="" value="direcao eletrica"> direcao eletrica

        </div>
        <div>
            <input type="submit" value="enviar">

        </div>


    </form>
    
</body>
</html>