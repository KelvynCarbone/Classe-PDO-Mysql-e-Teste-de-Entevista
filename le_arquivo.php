<?php

class Arquivo 
	{
	 //Vari�vel privada
	 private $conteudo;
	 
	 //Fun��o que retorna o conteudo
	 function Conteudo() 
		{
		//Retorna o conte�do
		return htmlentities($this->conteudo);
		}
	 //L� o Arquivo
	 function LerArquivo($arquivo) 
		{
		//
		$this->conteudo = file_get_contents($arquivo);
		}
	}
	
$arquivo= New Arquivo();

$arquivo->LerArquivo("./texto.txt");
print $arquivo->Conteudo();
?>