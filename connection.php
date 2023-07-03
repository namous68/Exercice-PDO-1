<?php

$dns = 'mysql:host=localhost;dbname=colyseum';
$username = 'root';
$password = '';


try{
    $db = new PDO($dns, $username, $password);

}catch(Exception $message){
    echo 'il y a un probleme : ' . "<pre>$message</pre>";
}

?>