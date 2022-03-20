<!DOCTYPE html>
<html>
<head>
	<title>conta teste</title>
</head>
<body>

<pre>
<?php
	error_reporting(0);
	require_once 'ContaBanco.php';
	//include 'ContaBanco.php';

	$p = array();
	$p[0]= new ContaBanco();

	$p[0]->abrirConta('cc');
	$p[0]->setDono('gustavo');
	$p[0]->setnumConta(111);

	$p[1]= new ContaBanco();

	$p[1]->abrirConta('cp');
	$p[1]->setDono('maria');
	$p[1]->setnumConta(555);
	//$p2->Sacar(150);
	//$p2->fecharConta();
	$p[1]->depositar(200);


	for($i=0; $i>=$p->lengnt; $i++){

		echo "<br><strong>Número da conta : </strong>".$p[$i]->getnumConta()."<br>";
		echo "<strong>Nome do usuario : </strong>".$p[$i]->getDono()."<br>";
		echo "<strong>Tipo de conta : </strong>".$p[$i]->getTipo()."<br>";
		echo"--------------------------";
	}

?>
</pre>

</body>
</html>
