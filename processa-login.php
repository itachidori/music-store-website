<!DOCTYPE html>
<html lang="pt-PT">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Music Store</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="img/logo.png" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap" rel="stylesheet">
</head>

<body>

	<?php require_once("inc/cabecalho.php");

				if (isset($_POST["login"])) {
					$user = $_POST["user"];
					// $pass = md5($_POST["pass"]);
					$pass = $_POST["pass"];


					//estabelecer ligação à base dados
					require_once("inc/basedados.php");

					//efectuar consulta
					$resultadoConsulta = mysqli_query(
						$ligacaoBD,
						"
							SELECT * 
							FROM users
							WHERE username='$user' AND password='$pass'
						"
					);

					//contar nr de linhas devolvidas pela SQL
					$nrLinhas = mysqli_num_rows($resultadoConsulta);

					if ($nrLinhas == 1) {
						@session_start();
						$_SESSION["utilizador"]["username"] = $user;
						$_SESSION["utilizador"]["lang"] = "pt_PT";

						//confirmar sucesso e reencaminhar para home
						echo "<script>
								alert('Autenticado com sucesso!');
								window.location = 'lista-instrumentos.php';
							</script>";
					} else {

						echo "<script>
							alert('Dados de Acesso Inválidos!');
							window.location = 'index.php';
						</script>";
					}
				}
				
	require_once("inc/rodape.php"); ?>
</body>

</html>