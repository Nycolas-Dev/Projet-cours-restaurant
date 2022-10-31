<?php

$bdd=new PDO("mysql:host=localhost;dbname=idw-01_nycolasbau_restaurant;charset=utf8","nycolasbau","4c8f2a12ZjhmNWFjNTJkNDVmYmVhNWE2MTNjNThkd173fc59");

$query=$bdd->prepare("SELECT name_meat
                        FROM meatmenu ");
                        
$query->execute();

$meatmenu=$query->fetchAll();

echo json_encode($meatmenu);


?>