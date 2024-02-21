<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
       <div><input type="text" name="marca"  placeholder="marca do carro">
        </div> 
        
        <div><input type="text" name="preco" placeholder="Preço do carro" id="">
        </div>

        <div>
        <input type="checkbox" name="opcionais[]" id="" value="teto solar"> teto sola
        </div>
        

       <div>
       <input type="checkbox" name="opcionais[]" id="" value="Pelicula"> pelicula

       </div> 
        <div>
        <input type="checkbox" name="opcionais[]" id="" value="Blindado"> blindado


        </div>
        <input type="submit" value="Enviar">





    </form>
    
</body>
</html>