<?php 
$host ='localhost';
$bd = 'dataenzomiguel';
$user =  'root';
$pass = '';
try {
   $conn = new PDO('mysql:host='. $host .';dbname='. $bd .';',$user , $pass);
} catch (PDOException $e) {
    echo "Ocorreu um error: " . $e;
    
}
?>