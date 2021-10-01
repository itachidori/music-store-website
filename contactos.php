<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>

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
        <h1>Contactos</h1>

        <section class="containerLeft">

            <form method="post" action="processa-contactos.php">
                <h2>Fale Connosco</h2>
                <div>
                    <label for="nome">Nome: </label><br>
                    <input class="form" type="text" id="nome" name="nome" required>
                </div>
                <br>
                <div>
                    <label for="email">E-mail: </label><br>
                    <input class="form" type="email" id="email" name="email" required>
                </div>
                <br>
                <div>
                    <label for="contacto">Contacto: </label><br>
                    <input class="form" type="number" id="contacto" name="contacto" required>
                </div>
                <br>
                <div>
                    <label for="comentario">Comentario: </label><br>
                    <textarea class="form" name="comentario" id="comentario" rows="4" placeholder="Escrever aqui..." required></textarea>
                </div>
                <br>
                <button class="botaoGeral botaoADireita" type="submit" name="submeterForm">Submeter</button>
            </form>
        </section>

        <section class="containerLeft contactos">
            <h2>Contacte-nos</h2>
            <h4>E-mail:</h4>
            <a href="mailto: musicstore@gmail.com"><span class="fa fa-envelope-o"> musicstore@gmail.com</span></a>

            <h4>Telefone:</h4>
            <a href="tel:+351999123456"><span class="fa fa-mobile-phone"> (+351) 999 123 456</span></a>
        </section>

    </main>

    <?php require_once("inc/rodape.php"); ?>
</body>

</html>