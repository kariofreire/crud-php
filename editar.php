<?php

	# Incluindo a Conexão com Banco de dados
	include_once("connect.php");

	# Recebendo o ID
	$id = $_GET["id"];

	# Exibindo valor de ID
	//echo $id;

	# Criando a QUERY
	$sql = "SELECT * FROM `tb_list` WHERE `id_list` = '$id';";

	# Criando a requisição
	$req = mysqli_query($conn, $sql);

	# Listando os Registros
	while ($register = mysqli_fetch_array($req)) {
		$id = $register[0];
		$user_name = $register[1];
		$number_phone = $register[2];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud - KFT</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- CDN ICONS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="text-center">
					<h1>Editar Dados</h1>
					<hr>
				</header>

				<!-- Barra de Menu -->
				<div class="col-md-12 jumbotron">
					<!-- Adicionar Novo Registro -->
					<a href="index.php" title="Novo Registros">
						Novo&nbsp;Registro&nbsp;<i class="fa fa-plus"></i>
					</a>

					<!-- Visualizar -->
					<a href="list.php" title="Lista de Registros">
						Registros&nbsp;<i class="fa fa-eye"></i>
					</a>
				</div>

				<!-- FORMULÁRIO DE EDIÇÃO -->
				<form action="salvar_edicao.php" method="POST">
					<input type="hidden" name="id" value="<?=$id;?>">
					<div class="col-md-6">
						<label>Nome:</label>
						<input type="text" class="form-control" name="user_name" value="<?=$user_name;?>">
					</div>
					<div class="col-md-6">
						<label>Número:</label>
						<input type="number" class="form-control" name="number_fone" value="<?=$number_phone;?>">
					</div>
					<div class="col-md-12">
						<br><button class="btn btn-warning btn-lg btn-block">Salvar Alterações</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>