<?php  
class Recursos
{
	// Atributos
	protected $banco;
	protected $valorBanco;
	protected $cartao;
	protected $valorCartao;
	protected $dinheiro;

	// Métodos especiais
	public function __construct($banco, $valorBanco, $cartao, $valorCartao, $dinheiro)
	{
		$this->setBanco($banco);
		$this->setValorBanco($valorBanco);
		$this->setCartao($cartao);
		$this->setValorCartao($valorCartao);
		$this->setDinheiro($dinheiro);
	}

	public function getBanco(){return $this->banco;}
	public function setBanco($banco){$this->banco = $banco;}

	public function getValorBanco(){return $this->valorBanco;}
	public function setValorBanco($valorBanco){$this->valorBanco = $valorBanco;}

	public function getCartao(){return $this->cartao;}
	public function setCartao($cartao){$this->cartao = $cartao;}

	public function getValorCartao(){return $this->valorCartao;}
	public function setValorCartao($valorCartao){$this->valorCartao = $valorCartao;}

	public function getDinheiro(){return $this->dinheiro;}
	public function setDinheiro($dinheiro){$this->dinheiro = $dinheiro;}

}
?>