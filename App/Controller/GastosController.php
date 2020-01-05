<?php 
	require_once "AppController.php"; 
class Gastos extends AppController
{
	// Atributos
	protected $nome;
	protected $categoria;
	protected $quantidade;
	protected $pagamento;
	protected $preco;
	protected $tipo;
	protected $created;

	// Métodos especiais
	public  function __construct($nome, $categoria, $quantidade, $pagamento, $preco, $tipo, $created)
	{
		$this->setNome($nome);
		$this->setCategoria($categoria);
		$this->setQuantidade($quantidade);
		$this->setPagamento($pagamento);
		$this->setPreco($preco);
		$this->setTipo($tipo);
		$this->setCreated($created);
	}

	public function getNome(){return $this->nome;}
	public function setNome($nome){$this->nome = $nome;}

	public function getCategoria(){return $this->categoria;}
	public function setCategoria($categoria){$this->categoria = $categoria;}

	public function getQuantidade(){return $this->quantidade;}
	public function setQuantidade($quantidade){$this->quantidade = $quantidade;}

	public function getPagamento(){return $this->pagamento;}
	public function setPagamento($pagamento){$this->pagamento = $pagamento;}

	public function getPreco(){return $this->preco;}
	public function setPreco($preco){$this->preco = $preco;}

	public function getTipo(){return $this->tipo;}
	public function setTipo($tipo){$this->tipo = $tipo;}

	public function getCreated(){return $this->created;}
	public function setCreated($created){$this->created = $created;}

	
}
?>