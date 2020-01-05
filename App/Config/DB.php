<?php  
class DB{

	//Atibutos
	public $a;
	
	//Métodos especiais
	public function __construct()
	{
		try
		{
			$pdo = new PDO('mysql:local=localhost;dbname=controleFinanceiro','kromodoro', '0134');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e)
		{
			echo "ERRO " . $e->getMessage(); 
		}
	}
}
?>