<?php
  include_once 'Connection.php';

  class Database extends Connection
  {
    public function __construct()
    {
      parent::__construct();
    }

    // selects
    public function get($query){
      $result = $this->connection->query($query);

      $rows = array();

      while($row = $result->fetch_assoc())
        $rows[] = $row;

      return $rows;
    }

    // insert / update
    public function execute($query){
      $response = $this->connection->query($query);
      return !$response ? false : true; 
    }

    // delete
    public function delete($query){
      $this->connection->query($query);
    }
  }
?>