<?php 

class Db
	{
		private $m_sHost = "db4free.net";
		private $m_sUser = "anton";
		private $m_sPassword = "A7c2x785d";
		private $m_sDatabase = "phpherexamen";
		public $conn;


		public function __construct()
		{
			$this->conn = new mysqli($this->m_sHost, $this->m_sUser, $this->m_sPassword, $this->m_sDatabase);
		}
	}

?>

