#!/usr/bin/php
<?php

require_once("studentDB.inc");

echo "executing script: ".$argv[0].PHP_EOL;

class StudentAccess
{
private $db;

public function __construct($database)
{
        $db = new mysqli("localhost", "root", "passwd", $database);
	 if ($db->error_no != 0 )
        {
                echo "error connecting to database: ".$db->connect_error.PHP_EOL;
                exit();
        }
}

public function __destruct()
{
        if (isset($this->db))
        {
                $this->db->close();
        }
echo "successfully connected!".PHP_EOL;


?>
