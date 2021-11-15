<?php
class Connection 
{	
	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = '';
	private $_database = 'monitora_glicemia';
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->connection;
	}
}

/*
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Não é possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
*/
// monitoria_glicemia
?>