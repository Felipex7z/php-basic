<?php
$validacoes = [];
if(count($_POST) > 0){
    
    if($_POST['nome'] === ""){
        $validacoes[] = "preencha o nome do usuario";
    }
    if($_POST['email'] === ""){
        $validacoes[] = "preencha o email";
    }
    if($_POST['senha'] != $_POST['confirmacao']){
        $validacoes[] = "as senhas devem ser iguias";
    }
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
    <?php if(count($validacoes )): ?>
        <ul>
        <?php foreach($validacoes as $validacoes): ?>
            <li>
                <?=$validacoes?>
            </li>
            <?php endforeach; ?>
        
        

        </ul>
        <?php endif; ?>

       

    <form action="" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="confirme sua senha ">
        </div>
        <div>
            <input type="submit" value="Entrar">
        </div>

    
    </form>
    
</body>
</html>