<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'covid';
 
// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);


/*DB details */
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'covid';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}

?>

