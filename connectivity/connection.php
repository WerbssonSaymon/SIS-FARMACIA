<?php 
	include_once ('config.php');

	$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	
    //Teste de conecção com o banco de dados 
	if($conexao -> connect_errno){
        die("Falha na conexão: ".$conexao->connect_error);
	} else {
	    echo "<strong>Conectado com sucesso</strong>";
    };
?>