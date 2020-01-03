<?php  
	require_once "Gastos.php";
	require_once "Recursos.php";
class Consumir
{
	// Atributos
	protected $gastos;
	protected $recursos;

	// Método especiais
	public function __construct($gastos, $recursos)
	{
		$this->setGastos($gastos);
		$this->setRecursos($recursos);
	}

	public function getGastos(){return $this->gastos;}
	public function setGastos($gastos){$this->gastos = $gastos;}

	public function getRecursos(){return $this->recursos;}
	public function setRecursos($recursos){$this->recursos = $recursos;}

	// Métodos públicos
	public function debitarBanco(){
		$this->getRecursos()->setValorBanco($this->getRecursos()->getValorBanco() - $this->getGastos()->getPreco());
	}

	public function debitarCartao(){
		$this->getRecursos()->setValorCartao($this->getRecursos()->getValorCartao() - $this->getGastos()->getPreco());
	}

	public function debitarDinheiro(){
		$this->getRecursos()->setDinheiro($this->getRecursos()->getDinheiro() - $this->getGastos()->getPreco());
	}
}
?>