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


?>
<form method="post" enctype="multipart/form-data">
<label>Selecione o arquivo:</label>
<input type="file" name="arquivo">
<input type="submit" name="ok" value="Enviar">
</form>

<?php
if(isset($_FILES[ "arquivo" ]["tmp_name"])) 
	{
	$arq = $_FILES[ "arquivo" ]["tmp_name"];
	$arquivo = New arquivo();
	$arquivo->LerArquivo($arq);
	echo $arquivo->Conteudo();
	}
?>