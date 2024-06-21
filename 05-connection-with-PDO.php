<?php
$host = 'localhost';
$port = 8080;
$dbName = 'blog';
$userName = 'Taha';
$password = '';


$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";



try{

//ceate PDO instance 
$pdo = new PDO($dsn, $username, $password);


// set PDO to throw excepions on error
$pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// fetch as assoc array
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(PDOException $e){
    // if there is an error , catch it here 
    echo "connection failed". $e->getMessage();

}


?>