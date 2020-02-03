<?php  
	
	class Conexao
	{
		private $conn = null;
		private $server = "localhost";
		private $user = "root";
		private $passwd = "usbw";
		private $database = "projeto_orelhinha";

		function __construct()
		{
			$this->conn = mysqli_connect($this->server, $this->user, $this->passwd, $this->database) or die("Erro ao conectar com a base de dados");
			mysqli_set_charset($this->conn, 'utf8');
		}

		public function execute($comando){
			if ((!isset($comando)) || (empty($comando))) {
				return "Comando inválido";
			}

			$dados = mysqli_query($this->conn, $comando) or die("Falha ao executar o comando");

			return $dados;
		}
	}

?>