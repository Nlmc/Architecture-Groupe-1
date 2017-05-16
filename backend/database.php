<?php
class DbConfig
{
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = 'root';
    private $_database = 'testphp';
    private $_dbn;

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {
            $this->_dbn = "mysql:host=".$this->_host.";dbname=".$this->_database;
            $this->connection = new pdo($this->_dbn, $this->_username, $this->_password);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}
?>
