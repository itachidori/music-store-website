<?php require_once("inc/acesso-restrito.php"); ?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="img/logo.png" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- cabeçalho -->
    <?php
    require_once("inc/cabecalho.php");
    require_once("inc/basedados.php");

    if (!empty($_GET)) {
        $id = $_GET['id'];
        $bd = $_GET['bd'];
    }

    //Selecionar o nome correto da primary key
    if ($bd == "guitars") {
        $pKey = "id_guitar";
    } elseif ($bd == "drums") {
        $pKey = "id_drum";
    } elseif ($bd == "basses") {
        $pKey = "id_bass";
    } elseif ($bd == "keyboards") {
        $pKey = "id_keyboard";
    }

    //Query para mostrar dados que serao removidos
    $sql = "select * from $bd where $pKey = '$id'";
    $resultado = mysqli_query($ligacaoBD, $sql);
    $dados = mysqli_fetch_assoc($resultado);


    //Apagar instrumento da BD
    if (isset($_POST['removerContacto'])) {
        $remover = "delete from $bd where $pKey = '$id'";
        mysqli_query($ligacaoBD, $remover);
        echo "<script>
            alert('Instrumento removido com sucesso!');
            window.location = 'lista-instrumentos.php'
            </script>";
    }
    ?>

    <main>
        <h1>Eliminar Instrumento</h1>

        <form method="POST" action="" class="containerCenter">

            <table id="">
                <thead>
                    <tr>
                        <td colspan="2">
                            <h2>Deseja mesmo eliminar o instrumento?</h2>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5"><img src=" <?php echo $dados['photo']; ?> " width="160" height=240"></td>
                        <td><b>ID</b></td>
                        <td><?php echo $id; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nome</b></td>
                        <td><?php echo $dados['name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Preço</b></td>
                        <td><?php echo $dados['price']; ?> €</td>
                    </tr>
                    <tr>
                        <td><b>Quantidade</b></td>
                        <td><?php echo $dados['units_stock']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Imagem URL</b></td>
                        <td><?php echo $dados['photo']; ?></td>
                    </tr>
                </tbody>
            </table><br>
            <button type="submit" class="botaoGeral botaoADireita" name="removerContacto">Confirmar</button>
        </form>

    </main>
    <!-- rodapé -->
    <?php require_once("inc/rodape.php"); ?>
</body>

</html>