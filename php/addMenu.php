<?php

header('Location: ../admin.phtml');

if ( isset( $_POST['submit'] ) ) {
    
    $name = $_POST["name"];

    
    $bdd = new PDO("mysql:host=localhost;dbname=idw-01_nycolasbau_restaurant;charset=utf8","nycolasbau","4c8f2a12ZjhmNWFjNTJkNDVmYmVhNWE2MTNjNThkd173fc59");

    $query = $bdd->prepare("INSERT INTO  VALUES('')");
                            
    $query->execute();
    
    
}




?>