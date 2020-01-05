<?php  
	require_once "../Config/DB.php";
class AppController
{

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

	public function salvar()
	{
		$nome = $this->getGastos()->getNome();
		$categoria = $this->getGastos()->getCategoria();
		$quantidade = $this->getGastos()->getQuantidade();
		$pagamento = $this->getGastos()->getPagamento();
		$preco = $this->getGastos()->getPreco();
		$tipo = $this->getGastos()->getTipo();
		$created = $this->getGastos()->getCreated();

		//echo "$nome > $categoria > $quantidade > $pagamento > $preco > $tipo > $created";
		$pdo->query("INSERT INTO gastos (nome, categoria, quantidade, pagamento, preco, tipo, created) VALUES ($nome, $categoria, $quantidade, $pagamento, $preco, $tipo, $created)");
	}
}
?>