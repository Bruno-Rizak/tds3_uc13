<?php
	//' or '1'='1
	//'; desc 'empregado';
	$nome = $_POST['nome'];
	$con = new PDO("mysql:host=mariadbsenac;dbname=ponto_eletronico", "root", "senac");
	
// $sql = "SELECT * FROM empregado WHERE nome = '".$nome."' LIMIT 100";
	// // $echo sql;
	// $rs = $con->query($sql);

	// $statuso = $rs->execute();
	$sql = "SELECT * FROM empregado WHERE nome = :var1 LIMIT 100";
	$st = $con->prepare($sql);
	$st->bindParam('var1', $nome);
	$statuso = $st->execute();


	$dados = $st->fetchAll();
	$total_registros = $st->rowCount();

	for ($i = 0; $i< sizeof($dados); $i++){
		echo "Nome: ".$dados[$i]["nome"]
		."<br>";
	}
	
	
	$con = null;
	


?>