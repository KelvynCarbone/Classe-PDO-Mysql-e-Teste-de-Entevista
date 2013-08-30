<?php
//Fun��o que fatora um n�mero
function fatorial($numero) 
	{
	//Se for zero retorna zero.
	if($numero==0)
		{
		return 0;
		}
	//Se for um retorna um
	else if($numero==1)
		{
		return 1;
		}
	//Fatorial � igual e subtra��o do numero
	$fatorial = $numero--;
	
	//For para aplicar os fatores
	for ($i = $numero; $i >= 1; $i--) 
		{
		//Auxiliar que guarda os n�meros respectivamente.
		$aux .=$fatorial.",";
		//Calculo do fator.
		$fatorial = $i * $fatorial;
		}
	//Retorna os valores recursivos.
	return substr($aux,0,-1);
	}
	
//Testa a fun��o com o n�mero 6.
echo fatorial(6);
?>