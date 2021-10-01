<?php require_once("inc/acesso-restrito.php"); ?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="img/logo.png" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- cabeçalho -->
    <?php require_once("inc/cabecalho.php"); ?>


    <main>
        <h1>Inserir Novo Instrumento</h1>

        <section class="containerCenter">

            <form enctype="multipart/form-data" action="processa-inserir-instrumento.php" method="post">

                <div>
                    <label for="categoria"><b>Escolha uma categoria:</b></label> <br>

                    <input class="for" type="radio" name="categoria" id="guitars" value="guitars" required>
                    <label for="guitars">Guitarras</label>

                    <input class="for" type="radio" name="categoria" id="drums" value="drums">
                    <label for="drums">Baterias</label>


                    <input cclass="for" type="radio" name="categoria" id="basses" value="basses">
                    <label for="basses">Baixos</label>

                    <input cclass="for" type="radio" name="categoria" id="keyboards" value="keyboards">
                    <label for="keyboards">Pianos</label>
                </div>
                <br>
                <div>
                    <label for="nome"><b>Nome:</b></label><br>
                    <input class="form" type="text" name="nome" id="nome" required>
                </div>
                <br>
                <div>
                    <label for="preco"><b>Preço:</b></label><br>
                    <input class="form" type="number" name="preco" id="preco" step=".01" min="0" required>
                </div>
                <br>
                <div>
                    <label for="stock"><b>Quantidade:</b></label><br>
                    <input class="form" type="number" name="stock" id="stock" step="1" min="0" required>
                </div>
                <br>
                <div>
                    <label><b>Foto:</b></label><br>
                    <input class="form" type="file" name="foto" id="foto" required>
                </div>
                <br>
                <button class="botaoGeral botaoADireita" type="submit" name="inserir">Inserir Instrumento</button>
            </form>

        </section>
    </main>
    <!-- rodapé -->
    <?php require_once("inc/rodape.php"); ?>
</body>

</html>