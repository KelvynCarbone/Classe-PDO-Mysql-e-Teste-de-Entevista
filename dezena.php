<?php
/*Fun��o que gera 6 n�meros de 1 � 60 aleat�riamente e ordenados.*/
function Megasena()
	{
	/*Inicia o array vazio.*/
	$valores = array();

	/*Inicia contador em zero para os 6 numeros que ir�o ser exibidos.*/
	$i = 0;
	
	/*While fazer o processo 6 vezes*/
	while( $i <= 5 ) 
		{
		/*Pega os n�meros aleat�rios de 1 � 60.*/
		$numero = rand( 1,60 );
		
		/*Se o n�mero n�o existir numero dentro do array ele p�e.*/
		if( ! in_array( $numero,$valores ) )
			{
			/*Seta o valor dentro do array*/
			$valores[] = $numero;
			++$i;
			}
		}
	/*Orderna  os n�meros*/
	sort( $valores );
	
	/*Retorna os n�meros*/
	return $valores;
	}

/*Executa a Fun��o*/
print_r (Megasena());

?>