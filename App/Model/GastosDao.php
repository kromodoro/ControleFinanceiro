<?php

namespace App\Model;
class GastosDao
{

	public function create(Gastos $p)
	{
		$sql = "INSERT INTO gastos (nome, categoria, quantidade, pagamento, preco, tipo, created) VALUES (?,?,?,?,?,?,?)";
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getCategoria());
		$stmt->bindValue(3, $p->getQuantidade());
		$stmt->bindValue(4, $p->getPagamento());
		$stmt->bindValue(5, $p->getPreco());
		$stmt->bindValue(6, $p->getTipo());
		$stmt->bindValue(7, $p->getCreated());
		$stmt->execute();
	}

	public function read()
	{
		$sql = "SELECT * FROM gastos ORDER BY id DESC limit 1";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}

	public function readTotal()
	{
		$sql = "SELECT sum(preco) FROM gastos";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}

	public function readComida()
	{
		$sql = "SELECT sum(preco) FROM gastos WHERE categoria = 'comida'";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}

	public function readCoisas()
	{
		$sql = "SELECT * FROM gastos WHERE categoria = 'coisas'";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}


	public function readCirc()
	{
		$sql = "SELECT sum(preco) FROM gastos WHERE categoria = 'circunstâncias'";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}

	public function update(Gastos $p)
	{
		$sql = "UPDATE gastos SET nome = ?, categoria = ?, quantidade = ?, pagamento = ?, preco = ?, tipo = ? WHERE id = ?";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getCategoria());
		$stmt->bindValue(3, $p->getQuantidade());
		$stmt->bindValue(4, $p->getPagamento());
		$stmt->bindValue(5, $p->getPreco());
		$stmt->bindValue(6, $p->getTipo());
		$stmt->bindValue(7, $p->getId());

		$stmt->execute();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM gastos WHERE id = ?";

		$stmt = Conexao::getConn()->prepare($sql);

		$stmt->bindValue(1, $id);

		$stmt->execute();
	}
}
?>