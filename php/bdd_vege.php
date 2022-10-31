<?php

$bdd=new PDO("mysql:host=localhost;dbname=idw-01_nycolasbau_restaurant;charset=utf8","nycolasbau","4c8f2a12ZjhmNWFjNTJkNDVmYmVhNWE2MTNjNThkd173fc59");


$query2=$bdd->prepare("SELECT name_vege
                        FROM vegemenu ");

$query2->execute();

$vegemenu=$query2->fetchAll();

echo json_encode($vegemenu);

?>