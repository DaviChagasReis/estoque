<?php require_once "config.php";?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">  
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
  
    <title>Document</title>
</head>
<body>
    <div class="fundo-menu">



        <a href="<?php echo $url ?>novo-produto.php" class="botao-menu">  
            <img class="icone" src="<?php echo $url ?>imagens/mais.png"/>
            <div class="botao-menu"></div>
        </a>



        <a href="<?php echo $url ?>busca.php" class="botao-menu" > 
            <img class="icone" src="<?php echo $url ?>imagens/pesquisa.png" alt=""/>
            <div class="botao-menu" ></div>
        </a>



        <a href="<?php echo $url ?>registros.php" class="botao-menu" >
            <img class="icone" src="<?php echo $url ?>imagens/1333544.png"/>
            <div class="botao-menu"></div>
        </a>



        <a href="<?php echo $url ?>nova-categoria.php" class="botao-menu" >
            <img class="icone" src="<?php echo $url ?>imagens/categoriaa.png"/>
            <div class="botao-menu"></div>
        </a>


        
    </div>
</body>
</html>