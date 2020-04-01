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
					<h1>Inserir Dados</h1>
					<hr>
				</header>

				<!-- Barra de Menu -->
				<div class="col-md-12 jumbotron">
					<a href="list.php" title="Lista de Registros">
						Registros&nbsp;<i class="fa fa-eye"></i>
					</a>
				</div>
				
				<!-- Formulário de INSERÇÃO -->
				<form action="insert.php" method="POST">
					<div class="col-md-6">
						<label>Nome:</label>
						<input type="text" class="form-control" name="user_name" placeholder="Digite aqui..." required="on">
					</div>
					<div class="col-md-6">
						<label>Número:</label>
						<input type="number" class="form-control" name="number_fone" placeholder="Digite o número de Telefone" required="on">
					</div>
					<div class="col-md-12">
						<br><button class="btn btn-success btn-lg btn-block">Cadastrar Número</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>