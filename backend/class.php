<?php
include_once 'database.php';

class Crud extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($query)
    {
        $result = $this->connection->query($query);

        if ($result == false) {
            return false;
        }

        $rows = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function execute($query)
    {
        $result = $this->connection->query($query);

        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return $result;
        }
    }

    public function delete($id, $table)
    {
        $query = "DELETE FROM $table WHERE id = $id";

        $result = $this->connection->query($query);

        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    public function escape_string($value)
    {
        return $this->connection->quote($value);
    }
}
?>