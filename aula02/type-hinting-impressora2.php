<?php 

class Impressora
{
	public function imprimir(DocGenerico $doc){
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}

interface DocGenerico
{
	public function getConteudo();
}

class Documento implements DocGenerico
{
	private $conteudo;

	public function __construct(string $conteudo){
		$this->conteudo = $conteudo;
	}

	public function getConteudo(){
		return $this->conteudo;
	}
}

class Planilha implements DocGenerico
{
	private $conteudo;

	public function __construct(array $conteudo){
		
		foreach ($conteudo as $linha) {
			$this->conteudo .= $linha ."<br>";
		}

	}

	public function getConteudo(){
		return $this->conteudo;
	}
}

$impressora = new Impressora();
$document = new Documento("501 PHP");
$impressora->imprimir($document);
$planilha = new Planilha(['4linux','php',501]);
$impressora->imprimir($planilha);