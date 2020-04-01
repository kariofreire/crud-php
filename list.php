<?php

	# Incluir arquivo de conexão com banco de dados
	include_once("connect.php");

	# Cria a query para LISTAR OS DADOS DO BANCO
	$sql = "SELECT * FROM `tb_list`;";

	# Cria a requisição
	$req = mysqli_query($conn, $sql);

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
					<h1>Listar Dados</h1>
					<hr>
				</header>

				<!-- Barra de Menu -->
				<div class="col-md-12 jumbotron">
					<a href="list.php" title="Lista de Registros">
						Registros&nbsp;<i class="fa fa-eye"></i>
					</a>
				</div>

				<!-- Tabela de Dados (Listados) -->
				<table class="table">
					<thead>
						<th>ID</th>
						<th>NOME</th>
						<th>TELEFONE</th>
						<th>AÇÕES</th>
					</thead>
					<tbody>
						<?php

							# Listando os Registros do banco de dados
							while ($register = mysqli_fetch_array($req)) {
								$id = $register[0];
								$user_name = $register[1];
								$number_phone = $register[2];

						?>
						<tr>
							<td><?= $id; ?></td>
							<td><?= $user_name; ?></td>
							<td><?= $number_phone; ?></td>
							<td>
								<!-- Button Edit -->
								<a href="editar.php?id=<?=$id;?>" class="btn btn-primary btn-xs" title="Editar">
									<i class="fa fa-pencil"></i>
								</a>

								<!-- Button Delet -->
								<a href="delet.php?id=<?=$id;?>" class="btn btn-danger btn-xs" title="Deletar Registro">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						<?php

							}# Fecha o While

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>