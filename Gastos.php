<?php  
class Gastos 
{
	// Atributos
	protected $nome;
	protected $categoria;
	protected $preco;
	protected $quantidade;
	protected $tipo;
	protected $created;

	// Métodos especiais
	public  function __construct($nome, $categoria, $preco, $quantidade, $tipo, $created)
	{
		$this->setNome($nome);
		$this->setCategoria($categoria);
		$this->setPreco($preco);
		$this->setQuantidade($quantidade);
		$this->setTipo($tipo);
		$this->setCreated($created);
	}

	public function getNome(){return $this->nome;}
	public function setNome($nome){$this->nome = $nome;}

	public function getCategoria(){return $this->categoria;}
	public function setCategoria($categoria){$this->categoria = $categoria;}

	public function getPreco(){return $this->preco;}
	public function setPreco($preco){$this->preco = $preco;}

	public function getQuantidade(){return $this->quantidade;}
	public function setQuantidade($quantidade){$this->quantidade = $quantidade;}

	public function getTipo(){return $this->tipo;}
	public function setTipo($tipo){$this->tipo = $tipo;}

	public function getCreated(){return $this->created;}
	public function setCreated($created){$this->created = $created;}

	
}
?>