<?php 
	// cria e verifica uma conexao com servidor, para criar o
	//banco de dados
	$link = new mysqli('localhost', 'root', '', '');
	$link->set_charset('utf8');

	if ($link)
	{
		echo "conexao ok";
	}
	else
	{
		die('Connect Error (' . mysqli_connecterrno() . ')' .
			mysqli_connect_error());
	}

	//Criando o banco de dados caso nao exista
	$nomeBanco = "votando_em_php";

	$query_create_schema = "CREATE SCHEMA IF NOT EXISTS $nomeBanco"
	or die ("Error in the consult .. " . $link->connection_error);
	$result_create_schema = $link->query($query_create_schema);

	if ( $link->query($query_create_schema) === TRUE )
	{
		echo "<p>criou banco de dados </p>";
	}
	else
	{
		echo "<p>nao criou banco de dados</p>";
	}

	//criando a tabela votar caso nao exista
	mysqli_select_db($link , $nomeBanco);

	$query_create_table = "CREATE TABLE `votar` (
		`id` int(15),
		`ruim` int(15) NOT NULL,
		`regular` int(15),
		`bom` int(15),
		`mbom` int(15),
		`motimo` int(15)
	  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;"
	or die("Error in the create table ... " . $link->connect_error);
	$result_create_table = $link->query($query_create_table);

		//Criando nova conexao com banco de dados
		//obtendo dai entao o banco de dados e tabela criados
		include ("conecta.php");
		
		//Consulta se a linhas com o id 1 e se tiver
		// dados na tabela inicia a votacao caso contrario
		//sera criado um registro de id 1 e valores 0
		//pois se os campos estiverem vazios ocorre um erro
		//na adicao de valor do codigo - contador
		$consulta = mysqli_query($conexao, "SELECT * FROM votar WHERE id = 1") or die(mysqli_error($cx));
		$vazio = mysqli_num_rows($consulta);
		if ($vazio == '1'){
			header('Location: votar.php');
		}else{
      $inserir = "INSERT INTO `votar` (`id`, `ruim`, `regular`, `bom`, `mbom`, `motimo`) VALUES ('1', '0', '0', '0', '0', '0')";
      mysqli_query($conexao,$inserir);
      }

	//Se a tabela for criada corretamente ou ja existir
	//entao sera encaminhado bpara a pagina votar.php
	// caso contrario a um erro na criacao da tabela
	if($result_create_table == TRUE)
	{
		header('Location: votar.php');
	}
	else
	{
		echo "<p>nao criou a tabela</p>";
	}

?>