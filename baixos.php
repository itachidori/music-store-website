<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baixos</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="img/logo.png" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once("inc/cabecalho.php"); ?>

    <main>
        <h1>Baixos</h1>
        <section class="">

            <?php
            require_once("inc/basedados.php");

            //executar consulta e guardar registos devolvidos
            $listaRegistos =
                mysqli_query($ligacaoBD, "SELECT * FROM basses ORDER BY id_bass ASC");

            while ($linha = mysqli_fetch_assoc($listaRegistos)) {
                echo "<div class='responsividade'><div class='galeria'>";
                echo "<img src='" . $linha["photo"] . "' alt=" . $linha["name"] . ">";
                echo "<div class='detalhes'><h3>" . $linha["name"] . "</h3>";
                echo "<span>Preço: {$linha['price']}€ </span><br>";
                echo "<span>Stock: {$linha['units_stock']}</span>";
                echo "</div></div></div>";
            }
            ?>

        </section>
    </main>

    <?php require_once("inc/rodape.php"); ?>
</body>

</html>