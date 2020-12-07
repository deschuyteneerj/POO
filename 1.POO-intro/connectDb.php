<?php  
class Connection{

    private $db;

    function __construct($host, $dbName, $login, $password){
        try{
            $this->db = new PDO('mysql:host='.$host.'; dbname='.$dbName.'; charset=utf8', $login, $password);
        }catch(Exception $e)
	    {
		    die('Error : '.$e->getMessage());
	    }
    }

    function countTable($dbQuery){
        $query = $this->db->prepare($dbQuery);
        $query->execute();
        return $query->rowCount();
    }
}
?>