<?php require_once("inc/acesso-restrito.php"); ?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

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

    //Query para mostrar dados que serao editados
    $sql = "select * from $bd where $pKey = '$id'";
    $resultado = mysqli_query($ligacaoBD, $sql);
    $dados = mysqli_fetch_assoc($resultado);


    //Introduzir dados editados na BD e permitir atualizem qualquer um dos dados
    if (isset($_POST['update'])) {

        if ((strlen($_POST['nameEdit']) < 1) && (strlen($_POST['units_stockEdit']) < 1) && (strlen($_POST['priceEdit']) < 1) && ($_FILES['photoEdit']['size'] == 0)) {
            echo "<script>
            alert('Não alterou nenhum dado no instrumento!');
            window.location = 'lista-instrumentos.php'
            </script>";
        } else {

            if (!empty($_POST['nameEdit'])) {
                $sqlUpdate = "UPDATE $bd SET name ='$_POST[nameEdit]' WHERE $pKey = '$id'";
                $update = mysqli_query($ligacaoBD, $sqlUpdate);
            }

            if (!empty($_POST['units_stockEdit'])) {
                $sqlUpdate2 = "UPDATE $bd SET units_stock ='$_POST[units_stockEdit]' WHERE $pKey = '$id'";
                $update2 = mysqli_query($ligacaoBD, $sqlUpdate2);
            }

            if (!empty($_POST['priceEdit'])) {
                $sqlUpdate3 = "UPDATE $bd SET price ='$_POST[priceEdit]' WHERE $pKey = '$id'";
                $update3 = mysqli_query($ligacaoBD, $sqlUpdate3);
            }

            if ($_FILES['photoEdit']['size'] !== 0) {
                //carregar imagem
                $destino = "./upload/";
                $nomeOriginal = uniqid() . "_" . $_FILES["photoEdit"]["name"];
                $caminho = $destino . $nomeOriginal;

                //mover ficheiro carregado da pasta temporária para destino
                move_uploaded_file($_FILES["photoEdit"]["tmp_name"], $caminho);

                $sqlUpdate4 = "UPDATE $bd SET photo='$caminho' WHERE $pKey = '$id'";
                $update4 = mysqli_query($ligacaoBD, $sqlUpdate4);
            }

            echo "<script>
            alert('Instrumento editado com sucesso!');
            window.location = 'lista-instrumentos.php'
            </script>";
        }
    }
    ?>

    <h1>Editar Instrumento</h1>


    <form method="POST" action="" class="containerLeft">
        <table class="form" id="">
            <thead>
                <tr>
                    <td colspan="3">
                        <h2>Dados Atuais:</h2>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="5"><img src=" <?php echo $dados['photo']; ?> " width="200"></td>
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
        </table>
    </form>

    <form method="POST" action="" enctype="multipart/form-data" class="containerLeft">
        <table class="form" id="">
            <thead>
                <tr>
                    <td colspan="2">
                        <h2>Dados a Atualizar:</h2>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>ID</b></td>
                    <td><input type="text" class="form" name="" value="<?php echo $id; ?>" Readonly></td>
                </tr>
                <tr>
                    <td><b>Nome</b></td>
                    <td><input type="text" class="form" name="nameEdit"></td>
                </tr>
                <tr>
                    <td><b>Preço</b></td>
                    <td><input type="number" class="form" step=".01" min="0" name="priceEdit"></td>
                </tr>
                <tr>
                    <td><b>Quantidade</b></td>
                    <td><input type="number" class="form" step="1" min="0" name="units_stockEdit"></td>
                </tr>
                <tr>
                    <td><b>Imagem</b></td>
                    <td><input type="file" class="form" name="photoEdit"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="botaoGeral botaoADireita" name="update">Atualizar</button>
    </form>





    <!-- rodapé -->
    <?php require_once("inc/rodape.php"); ?>
</body>

</html>