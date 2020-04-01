<?php
	
	# Inclui a conexão com banco de dados
	include_once("connect.php");

	# Recebendo os dados do Formulário
	$user_name = $_POST["user_name"];
	$number_fone = $_POST["number_fone"];

	# Criando a Query para inserir os dados no banco
	$sql = "INSERT INTO `tb_list` (`user_name`, `number_fone`) VALUES ('$user_name', '$number_fone');";

	# Criando a Requisição para AUTORIZAR a inserção no banco
	$req = mysqli_query($conn, $sql);

	# Criando o Redirecionamento
	header("Location: index.php?mensagem=dados_inserido_com_sucesso");

?>