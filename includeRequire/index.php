<html>
	<head>
		<title>Aula PHP</title>
	</head>
	<body>
		<div>
			<?php require_once("Menu.php");?>
			<!--Quando o require não encontra o arquivo ele mostra o erro e mata a aplicação, já o include mostra o erro e continua a aplicação
			Quando adiciono "_once" ele não deixa que aquele arquivo repita. Ex.: Sem querer coloco pra mostrar o mesmo arquivo por 2 vezes, o once faz com que mostre apenas uma vez-->
		</div>
		<h1>Home</h1>
		<?php echo "Ola mundo";?>
	</body>

</html>