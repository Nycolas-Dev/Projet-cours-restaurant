<?php

header('Location: ../contact2.html');

if ( isset( $_POST['submit'] ) ) {
    
    $date = $_POST["date"];
    $time = $_POST["time"];
    $guests = $_POST["guests"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $request = $_POST["request"];
    
    $bdd = new PDO("mysql:host=localhost;dbname=idw-01_nycolasbau_restaurant;charset=utf8","nycolasbau","4c8f2a12ZjhmNWFjNTJkNDVmYmVhNWE2MTNjNThkd173fc59");

    $query = $bdd->prepare("INSERT INTO formulaires VALUES('$date','$time','$guests','$name','$email','$tel','$request')");
                            
    $query->execute();
    
    
}

?>

		
		