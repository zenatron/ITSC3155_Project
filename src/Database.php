<?php
require_once __DIR__ . '../config/database.php';

class Database {
    private $connection;

    public function __construct() {
        $this->connection = new mysqli($GLOBALS['host'], $GLOBALS['db_user'], $GLOBALS['db_password'], $GLOBALS['db_name']);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Other database methods here
}
?>
