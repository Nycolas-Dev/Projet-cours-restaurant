<?php

$bdd=new PDO("mysql:host=localhost;dbname=idw-01_nycolasbau_restaurant;charset=utf8","nycolasbau","4c8f2a12ZjhmNWFjNTJkNDVmYmVhNWE2MTNjNThkd173fc59");


$query1=$bdd->prepare("SELECT name_fish
                        FROM fishmenu ");

$query1->execute();

$fishmenu=$query1->fetchAll();

echo json_encode($fishmenu);


?>