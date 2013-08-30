<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mega Sena</title>
<style>
	.check
		{
		background:#CCC;
		}
	table
		{
		border: 1px solid #333;
		margin-bottom:10px;
		}
</style>
</head>

<?php
//Fun��o que gera 6 n�meros de 1 � 60 aleat�riamente e ordenados.
function Megasena()
	{
	//Inicia o array vazio.
	$valores = array();

	//Inicia contador em zero para os 6 numeros que ir�o ser exibidos.
	$i = 0;
	
	//While fazer o processo 6 vezes
	while( $i <= 5 ) 
		{
		//Pega os n�meros aleat�rios de 1 � 60.
		$numero = rand( 1,60 );
		
		//Se o n�mero n�o existir numero dentro do array ele p�e.
		if( ! in_array( $numero,$valores ) ) 
			{
			//Seta o valor dentro do array
			$valores[] = $numero;
			++$i;
			}
		}
	//Orderna  os n�meros
	sort( $valores );
	
	//Retorna os n�meros
	return $valores;
	}

function GeraJogo()
	{
	$jogo = array();
	$x = 1;
	
	//Gera as 3 tabelas
	while($x <= 3) 
		{
		//Usa a fun��o para gerar os valores
		$valores = Megasena();
		$r=0;
		
		//Gera o jogo para montar as tabelas de acordo com os valores
		foreach($jogo as $j) 
			{
			$r = 0;
			foreach($valores as $n) 
				{
				if(in_array($n,$j)) 
					{
					$r++;
					}
				}
			if($r==6) 
				{
				break;
				}
			}
		 $jogo[] = $valores;
		 $x++;
		}
		
	//Monta as tableas de acordo com o resultado da fun��o
	foreach($jogo as $j) 
		{
		 echo "<table>";
		 echo "<tr>";
		 $l = 1;
		 for($i = 1; $i <= 60; ++$i) 
			{
			if(in_array( $i,$j )) 
				{
				echo "<td class='check'>";
				} 
			else 
				{
				echo "<td>";
				}
			echo $i;
			echo "</td>";
			$l++;

			if($l > 10) 
				{
				$l = 1;
				echo "</tr>";
				echo "<tr>";
				}
			}
		echo "</table>";
		}
	}

//Chama a fun��o
GeraJogo();
?>

</body>
</html>