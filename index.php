
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Formulario de inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<p>FORMULÁRIO DE INSCRIÇÃO DE COMPETIDORES</p>

	<form action="script.php" method="post">
		<?php
			$mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '' ;//* ? - verifica se true : else
			if(!empty($mensagemDeSucesso))
			{
				echo $mensagemDeSucesso;
			}

			$mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '' ;//* ? - verifica se true : else
			if(!empty($mensagemDeErro))
			{
				echo $mensagemDeErro;
			}
		?>
		<p>Seu nome :<input type="text" name="nome"/></p>
		<p>Sua idade :<input type="text" name="idade"/></p>
		<p><input type="submit" value="Enviar dados do Competidor"/></p>
		
	</form>

</body>
</html>