<?php

class Connection
{
    private $db;

    function __construct($host, $dbName, $login, $password){
        try{
            $this->db = new PDO('mysql:host='.$host.'; dbname='.$dbName.'; charset=utf8', $login, $password);
        }catch(Exception $e)
	    {
		    die('Error : '.$e->getMessage());
	    }
    }

    static function connect($host, $dbName, $login, $password){
        return new PDO('mysql:host='.$host.'; dbname='.$dbName.'; charset=utf8', $login, $password);
    }
}