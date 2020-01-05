<?php  
namespace App\Model;
class Conexao
{
	// Atributo
	private static $instance;

	# Método especial
	public static function getConn()
	{
		if(!isset(self::$instance)):
			self::$instance = new \PDO('mysql:host=localhost;dbname=controleFinanceiro;charset=utf8','kromodoro','0134');
		endif;
		return self::$instance;
		
	}

}
?>