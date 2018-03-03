<?php 

class Impressora
{
	public function imprimir(DocGenerico $doc){
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}

class DocGenerico
{
	public function getConteudo(){
		return $this->conteudo;
	}
}

class Documento extends DocGenerico
{
	private $conteudo;

	public function __construct(string $conteudo){
		$this->conteudo = $conteudo;
	}

	public function getConteudo(){
		return $this->conteudo;
	}
}

class Planilha extends DocGenerico
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