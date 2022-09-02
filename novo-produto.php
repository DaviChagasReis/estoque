<?php

require_once "config.php";

if (count($_POST) > 0){
    $nome = $_POST['nome'];
    $id_categoria = $_POST['id_categoria'];
    $data_validade = $_POST['data_validade'];
    // $data_criacao = date("Y-m-d H:i:s"); //um metodo para adicionar (data/hora) no formulario do banco

    $sql = "INSERT INTO produtos SET nome = :nome, id_categoria = :id_categoria, data_validade = :data_validade";
    $sql = $db->prepare($sql);
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":id_categoria", $id_categoria );
    $sql->bindValue(":data_validade", $data_validade);
    $sql->execute();
    
    //print_r ($sql->errorInfo());
    //o exit vai exibir um array co0m os valores 
    if($sql) {
        header("Location: index.php");
    }
}
?>
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
    <title>Novo produto</title>
</head>
<body>
    <div class="container fundo">
        <div class="fundo-menu">



            <a href="novo-produto.php" class="botao-menu">  
                <img class="icone" src="./imagens/mais.png"/>
                <div class="botao-menu"></div>
            </a>



            <a href="busca.php" class="botao-menu" > 
                <img class="icone" src="./imagens/pesquisa.png" alt=""/>
                <div class="botao-menu" ></div>
            </a>



            <a href="registros.php" class="botao-menu" >
                <img class="icone" src="./imagens/1333544.png"/>
                <div class="botao-menu"></div>
            </a>



            <a href=" <?php echo $url ?> nova-categoria.php" class="botao-menu" >
            <img class="icone" src="./imagens/categoriaa.png"/>
            <div class="botao-menu"></div>
        </a>
        </div>



        <div class="fundo-conteudo">           
            
            <div class="container">
                <fieldset>
                    <legend> Cadastrar Produto </legend>
                    <form method="POST">
                            <label>Nome</label >
                            <input type="text" class="form-control" name="nome"autofocus/>

                            <label>id categoria</label>
                            <input type="number" class="form-control" name="id_categoria"/>

                            <label>data de validade</label>
                            <input type="date" class="form-control" name="data_validade"/>

                            <!-- <label>data entarda</label>
                            <input type="date" class="form-control" name="senha"/>

                            <label>data saida</label>
                            <input type="date" class="form-control" name="senha"/> 

                            <label>quantidade</label>
                            <input type="number" class="form-control" name="senha"/> -->

                            <br/><a href="index.php" class="btn btn-warning"> Voltar </a>  
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <!-- <button type="submit" class="btn btn-success"><a href="index.php"> Salvar  </a> </button> -->
                    </form>
                </fieldset>
            </div> 

        </div>
    </div>   
</body>
</html>