<?php
	$enderecoBD = "localhost";
	$nomeBD = "music_store";
	$utilizadorBD = "root";
	$passwordBD = "";
	
	//estabelecer ligação e guarda a mesma
	$ligacaoBD = mysqli_connect($enderecoBD, $utilizadorBD, 
								$passwordBD, $nomeBD) or die("Erro ao ligar à BD!");
	