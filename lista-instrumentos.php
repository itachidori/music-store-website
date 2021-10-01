<?php require_once("inc/acesso-restrito.php"); ?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="img/logo.png" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="js/tabelasBD.js"></script>


</head>

<body>
    <!-- cabeçalho -->
    <?php require_once("inc/cabecalho.php"); ?>

    <main>
        <h1>Lista de Instrumentos</h1>

        <div class="botaoLista">
            <button class="botaoGeral botaoListaEspacamento" onclick="toggleTableGuitar()">Guitarras</button>
            <button class="botaoGeral botaoListaEspacamento" onclick="toggleTableDrum()">Baterias</button>
            <button class="botaoGeral botaoListaEspacamento" onclick="toggleTableBass()">Baixos</button>
            <button class="botaoGeral botaoListaEspacamento" onclick="toggleTableKeyboard()">Pianos</button>
        </div>
        <br>
        <!-- Tabela Guitarras -->
        <section class="containerCenter escondeTabelas" id="tabelaGuitarras">
            <table class="display tabelaBD">
                <h3>Guitarras</h3>
                <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Imagem</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Quantidade</b></td>
                        <td><b>Preço</b></td>
                        <td><b>URL Imagem</b></td>
                        <td><b>Opções</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("inc/basedados.php");
                    $sqlGuitars = mysqli_query($ligacaoBD, 'select * from guitars order by id_guitar');

                    while ($registo = mysqli_fetch_array($sqlGuitars)) {
                    ?>
                        <tr>
                            <td><?php echo $registo['id_guitar']; ?></td>
                            <td><img src=" <?php echo $registo['photo']; ?> " width="40" height="60"></td>
                            <td><?php echo $registo['name']; ?></td>
                            <td><?php echo $registo['units_stock']; ?></td>
                            <td><?php echo $registo['price']; ?> €</td>
                            <td><?php echo $registo['photo']; ?></td>
                            <td>
                                <a href="editar-instrumentos.php?id=<?php echo $registo['id_guitar'] ?>&bd=guitars">
                                    <button type="submit" class="botaoGeral botaoMargemTabela">Editar</button>
                                </a>
                                <a href="eliminar-instrumentos.php?id=<?php echo $registo['id_guitar'] ?>&bd=guitars">
                                    <button type="submit" class="botaoGeral">Apagar</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>

        <br>

        <!-- Tabela Baterias -->
        <section class="containerCenter escondeTabelas" id="tabelaBaterias">
            <table class="display tabelaBD" id="">
                <h3>Baterias</h3>
                <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Imagem</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Quantidade</b></td>
                        <td><b>Preço</b></td>
                        <td><b>URL Imagem</b></td>
                        <td><b>Opções</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("inc/basedados.php");
                    $sqlDrums = mysqli_query($ligacaoBD, 'select * from drums order by id_drum');

                    while ($registo = mysqli_fetch_array($sqlDrums)) {
                    ?>
                        <tr>
                            <td><?php echo $registo['id_drum']; ?></td>
                            <td><img src=" <?php echo $registo['photo']; ?> " width="40" height="60"></td>
                            <td><?php echo $registo['name']; ?></td>
                            <td><?php echo $registo['units_stock']; ?></td>
                            <td><?php echo $registo['price']; ?> €</td>
                            <td><?php echo $registo['photo']; ?></td>
                            <td>
                                <a href="editar-instrumentos.php?id=<?php echo $registo['id_drum'] ?>&bd=drums">
                                    <button type="submit" class="botaoGeral botaoMargemTabela">Editar</button>
                                </a>
                                <a href="eliminar-instrumentos.php?id=<?php echo $registo['id_drum'] ?>&bd=drums">
                                    <button type="submit" class="botaoGeral" name="removerBateria">Apagar</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>

        <br>

        <!-- Tabela Baixos -->
        <section class="containerCenter escondeTabelas" id="tabelaBaixos">
            <table class="display tabelaBD">
                <h3>Baixos</h3>
                <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Imagem</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Quantidade</b></td>
                        <td><b>Preço</b></td>
                        <td><b>URL Imagem</b></td>
                        <td><b>Opções</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("inc/basedados.php");
                    $sqlBasses = mysqli_query($ligacaoBD, 'select * from basses order by id_bass');

                    while ($registo = mysqli_fetch_array($sqlBasses)) {
                    ?>
                        <tr>
                            <td><?php echo $registo['id_bass']; ?></td>
                            <td><img src=" <?php echo $registo['photo']; ?> " width="40" height="60"></td>
                            <td><?php echo $registo['name']; ?></td>
                            <td><?php echo $registo['units_stock']; ?></td>
                            <td><?php echo $registo['price']; ?> €</td>
                            <td><?php echo $registo['photo']; ?></td>
                            <td>
                                <a href="editar-instrumentos.php?id=<?php echo $registo['id_bass'] ?>&bd=basses">
                                    <button type="submit" class="botaoGeral botaoMargemTabela">Editar</button>
                                </a>
                                <a href="eliminar-instrumentos.php?id=<?php echo $registo['id_bass'] ?>&bd=basses">
                                    <button type="submit" class="botaoGeral">Apagar</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>

        <br>

        <!-- Tabela Pianos -->
        <section class="containerCenter escondeTabelas" id="tabelaPianos">
            <table class="display tabelaBD" id="">
                <h3>Pianos</h3>
                <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Imagem</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Quantidade</b></td>
                        <td><b>Preço</b></td>
                        <td><b>URL Imagem</b></td>
                        <td><b>Opções</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("inc/basedados.php");
                    $sqlKeyboars = mysqli_query($ligacaoBD, 'select * from keyboards order by id_keyboard');

                    while ($registo = mysqli_fetch_array($sqlKeyboars)) {
                    ?>
                        <tr>
                            <td><?php echo $registo['id_keyboard']; ?></td>
                            <td><img src=" <?php echo $registo['photo']; ?> " width="40" height="60"></td>
                            <td><?php echo $registo['name']; ?></td>
                            <td><?php echo $registo['units_stock']; ?></td>
                            <td><?php echo $registo['price']; ?> €</td>
                            <td><?php echo $registo['photo']; ?></td>
                            <td>
                                <a href="editar-instrumentos.php?id=<?php echo $registo['id_keyboard'] ?>&bd=keyboards">
                                    <button type="submit" class="botaoGeral botaoMargemTabela">Editar</button>
                                </a>
                                <a href="eliminar-instrumentos.php?id=<?php echo $registo['id_keyboard'] ?>&bd=keyboards">
                                    <button type="submit" class="botaoGeral">Apagar</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <!-- rodapé -->
    <?php require_once("inc/rodape.php"); ?>
</body>

</html>