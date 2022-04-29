<?php 

$user = 'Amadou';
$pass = 'Amadou';



try {
    $db = new PDO('mysql:host=192.168.1.34;dbname=ADMediaBdd', $user, $pass);
} catch (PDOException $e) {
    print "Error!: ". $e->getMessage();
    die();
    
}
