<?php
require 'connectDb.php';

$connectDb = new Connection("localhost", "colyseum", "root", "Password_1");

echo "Query countTable: ".$connectDb->countTable("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'colyseum';");
?>