<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>

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
        <h1>Loja</h1>

        <section class="">
            <div class="responsividade">
                <div class="galeria">
                    <a href="guitarras.php">
                        <img src="img/guitarra.jpg" alt="Guitarra Eletrica" width="600" height="400">
                        <div class="nome">Guitarras</div>
                    </a>
                </div>
            </div>

            <div class="responsividade">
                <div class="galeria">
                    <a href="baterias.php">
                        <img src="img/bateria.jpg" alt="Bateria" width="600" height="400">
                        <div class="nome">Baterias</div>
                    </a>
                </div>
            </div>

            <div class="responsividade">
                <div class="galeria">
                    <a href="baixos.php">
                        <img src="img/baixo.jpg" alt="Baixo" width="600" height="400">
                        <div class="nome">Baixos</div>
                    </a>
                </div>
            </div>

            <div class="responsividade">
                <div class="galeria">
                    <a href="pianos.php">
                        <img src="img/piano.jpg" alt="Piano" width="600" height="400">
                        <div class="nome">Pianos</div>
                    </a>
                </div>
            </div>
        </section>

    </main>
    <?php require_once("inc/rodape.php"); ?>
</body>

</html>