<?php
	
	# Incluindo a conexão com banco de dados
	include_once("connect.php");

	# Recebendo o GET
	$id = $_GET["id"];

	# Criando a QUERY
	$sql = "DELETE FROM `tb_list` WHERE `id_list` = '$id';";

	# Criando a requisição
	$req = mysqli_query($conn, $sql);

	# Redirecionamento
	header("Location: list.php?mensagem=registro_deletado_com_sucesso");

?>