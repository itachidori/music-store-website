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
    <!-- cabeçalho -->
    <?php require_once("inc/cabecalho.php");


    if (isset($_POST["submeterForm"])) {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $contacto = $_POST["contacto"];
        $comentario = $_POST["comentario"];

        //guardar informações na base de dados --------
        require_once("inc/basedados.php");

        $sql = "INSERT INTO forms(name, email, contact, comment) VALUES('$nome', '$email', '$contacto', '$comentario')";

        //executar query na base de dados
        mysqli_query($ligacaoBD, $sql);

        //voltar página de inserir
        echo "<script>
            alert('Formulario submetido com sucesso!');
            window.location = 'contactos.php'
            </script>";
    }

    require_once("inc/rodape.php"); ?>
</body>

</html>