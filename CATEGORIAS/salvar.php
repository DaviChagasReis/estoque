<?php
    require_once "../config.php";
    global $db;
    $categoria = $_POST['nome'];
    $id = $_POST['id'];


    $sql = "UPDATE categorias SET nome = :categoria WHERE id = :id";
    $sql = $db->prepare($sql);
    $sql->bindValue(":categoria", $categoria);
    $sql->bindValue(":id", $id);
    $sql->execute();
   /* echo "<pre>";
    print_r($sql->errorInfo());
    exit;*/
    header("Location: editar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">  
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    
    <title>Editar</title>
</head>
<body>
    <div class="container fundo">
        <?php require_once "../menu.php";?>

        <div class="fundo-conteudo">
            <div class="container">
                <fieldset>
                <legend> Nova Categoria </legend>
                    <form method="POST" action="salvar.php">
                            <label>Nome</label>
                            <input type="text" class="form-control" value="<?php echo $categorias['nome']?>" name="nome"/>


                            <input type="hidden" class="form-control" value="<?php echo $categorias['id']?>" name="id"/>


                            <br/><a href="nova-categoria.php" class="btn btn-warning"> Voltar </a>  

                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>