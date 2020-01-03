<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Módulo Financeiro</title>
	<link rel="stylesheet" href="_css/bootstrap.min.css">
</head>
<body style="background-color: #777;">
	<div class="container">
		<div class="row mt-5">
				<div class="col">
					<div class="card">
						<h3 class="text-center mt-2">Gastos Diários</h3>
						<div class="card-body">
						<form action="#" method="get">
							<div class="form-group">
								<label for="nomeGasto">Nome:</label>
								<input type="text" class="form-control" required autofocus name="nome">
							</div>
							<div class="form-group">
								<label for="categoria">Categoria</label>
								<select name="categoria" id="categoria" required>
									<option value="Comida" selected>Comida</option>
									<option value="Coisas">Coisas</option>
									<option value="Circunstâncias">Circunstâncias</option>
								</select>
								<label for="quantidade">Quantidade</label>
								<input type="number" min="1" name="quantidade" required>
							</div>
							<div class="form-group">
								<label for="meioP">Pagamento</label>
								<select name="meioP" id="meioP">
									<option value="cartao">Cartao</option>
									<option value="dinheiro">Dinheiro</option>
								</select>
								<label for="preco">Preço R$</label>
								<input type="number" step=".01" name="preco" required>
							</div>
							<div class="form-group">
								<fieldset>
									<input type="radio" id="planejado" name="tipo" checked value="planejado" required>
									<label for="planejado">Planejado</label>
									<input type="radio" id="impulso" name="tipo" value="impulso">
									<label for="impulso">Impsulso</label>
								</fieldset>
							</div>
							<div class="form-group">
								<label for="created">Data da Compra</label>
								<input type="date" class="form-control" name="created" required>
							</div>
							<div class="form-group text-center">
								<button class="btn btn-success">Salvar</button>
							</div>
						</div>
					</form>
					</div>
				</div>
			<div class="col">
					<?php  
						ini_set('display_errors',1);
						ini_set('display_startup_errors',1);
						error_reporting(E_ALL);

						require_once "Gastos.php";
						require_once "Recursos.php";
						require_once "Consumir.php";

						# Gastos via URL
						$nome = ($_GET['nome']) ?? '';
						$categoria = ($_GET['categoria']) ?? '';
						$quantidade = ($_GET['quantidade']) ?? '';
						$meioP = ($_GET['meioP']) ?? '';
						$preco = ($_GET['preco']) ?? '';
						$tipo = ($_GET['tipo']) ?? '';
						$created = ($_GET['created']) ?? '';

						#Recursos via URL
						$banco = ($_GET['banco']) ?? "Caixa";
						$valorBanco = ($_GET['valorBanco']) ?? 2500;
						$cartao = ($_GET['cartao']) ?? "Digital pernamb.";
						$valorCartao = ($_GET['valorCartao']) ?? 277;
						$dinheiro = ($_GET['dinheiro']) ?? 600;

						$gastos = new Gastos($nome, $categoria, $preco, $quantidade, $tipo, $created);
						$recursos = new Recursos($banco, $valorBanco, $cartao, $valorCartao,$dinheiro);
						$consumir = new Consumir($gastos, $recursos);
						echo "<pre style='color: #fff'>";
						//print_r($gastos);
						//print_r($recursos);
						switch($meioP)
						{
							case "cartao":
								$consumir->debitarCartao();
							break;
							case "dinheiro":
								$consumir->debitarDinheiro();
							break;
						}
						//$consumir->debitarBanco();
						print_r($consumir);
						echo "</pre>";
					?>
				</div>
				<!--div class="col">
					<div class="card">
						<h3 class="text-center mt-2">Recursos</h3>
						<div class="card-body">
							<form action="#" method="get">
							<div class="form-group">
								<label for="contaBanco">Banco</label>
								<select name="banco" id="contaBanco">
									<option value="nubank">Nubank</option>
									<option value="caixa" selected>Caixa</option>
									<option value="bradesco">Bradesco</option>
									<option value="bb">Banco do Brasil</option>
									<option value="santander">Santender</option>
									<option value="itau">Itau</option>
									<option value="dgital">Conta Digital</option>
								</select>
								<label for="valorBanco">Valor R$</label>
								<input type="number" id="valorBanco" step=".01" name="valorBanco">
							</div>
							<div class="form-group">
								<label for="cartao">Cartão</label>
								<select name="cartao" id="cartao">
									<option value="1105">Caixa Poupança</option>
									<option value="1155">Pernamb.Digital</option>
								</select>
								<label for="valorCartao">Valor R$</label>
								<input type="number" step=".01" id="valorCartao" name="valorCartao">
							</div>
							<div class="form-group">
								<label for="dinheiro">Dinheiro</label>
								<input type="number" id="dinheiro" step=".05" name="dinheiro">
							</div>
							<div class="form-group text-center">
								<button class="btn btn-success">Salvar</button>
							</div>
						</form>
						</div>
					</div>
				</div-->
			</div>
	</div>
</body>
</html>