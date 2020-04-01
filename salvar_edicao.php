<?php
	
	# Incluindo a conexão com banco de dados
	include_once("connect.php");

	# Recebendo os dados do Formulário
	$id = $_POST["id"];
	$nome = $_POST["user_name"];
	$number = $_POST["number_fone"];

	# Atualizando os dados com a QUERY
	$sql = "UPDATE `tb_list` SET `user_name` = '$nome', `number_fone` = '$number' WHERE `tb_list`.`id_list` = '$id';";

	# Criando a Requisição
	$req = mysqli_query($conn, $sql);

	# Redirecionamento
	header("Location: list.php?mensagem=dados_alterados_com_sucesso");

?>