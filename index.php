<?php

require_once('connection.php');

$request = $db->query('SELECT * FROM clients');
$clients = $request->fetchAll();

 //var_dump($clients);

echo '<h2> EXERCICE 1  </h2>';

foreach($clients as $client){
    echo 'prenom : ' . $client['firstName'] . ' ';
    echo 'nom : ' . $client['lastName'] . '<br>';
}


echo '<h2> EXERCICE 2  </h2>';

$request = $db->query('SELECT * FROM shows');
$shows = $request->fetchAll();

foreach($shows as $show){
    echo 'titre du show: ' . $show['title'] .'<br> ' ;
}

echo '<h2> EXERCICE 3 </h2>';

$request = $db->query("SELECT * FROM clients LIMIT 20");
$clients = $request->fetchAll();

foreach($clients as $client){
    echo 'prenom : ' . $client['firstName'] . '<br>';
    echo 'nom : ' . $client['lastName'] . '<br>';
}

echo '<h2> EXERCICE 4 </h2>';

$request = $db->query("SELECT * FROM clients WHERE card = 1");
$clients = $request->fetchAll();

foreach($clients as $client){
    echo 'prenom: ' . $client['firstName'] . '<br>';
}

echo '<h2> EXERCICE 5 </h2>';

//$request = $db->query("SELECT * FROM clients WHERE SUBSTRING('M';");
//$clients = $request->fetchAll();

//foreach($clients as $client){
 //   echo 'prenom: ' . $client['lastName'] . '<br>';
  //  echo 'nom: ' . $client['firstName'] . '<br>';
//}

echo '<h2> EXERCICE 6 </h2>';

$request = $db->query('SELECT * FROM shows ORDER by title ASC');
$shows = $request->fetchAll();

foreach($shows as $show){
    echo  $show['title'] . ' Par: '.$show['performer'] . ' le' .$show['date'] .' à '. $show['startTime'] . '<br>';

}

echo '<h2> EXERCICE 7 </h2>';

$request = $db->query('SELECT * FROM clients');
$clients = $request->fetchAll();

foreach($clients as $client){
    echo 'nom: ' . $client['lastName']. '<br>';
    echo 'prenom: ' . $client['firstName']. '<br>';
    echo 'date de naissance: ' . $client['birthDate'].'<br>';
    
    if ($client['card'] == 1 && $client['cardNumber'] !== NULL){
        echo 'carte de fidelité: oui' . '<br>';
        echo 'Numero de la carte: ' . $client['cardNumber']. '<br>';
    }else{
        echo 'pas de carte' .'<br>';
    }


}
?>
