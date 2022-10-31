<?php

$bdd = new PDO("mysql:host=localhost;dbname=idw-01_nycolasbau_restaurant;charset=utf8","nycolasbau","4c8f2a12ZjhmNWFjNTJkNDVmYmVhNWE2MTNjNThkd173fc59");

$query=$bdd->prepare("SELECT date, time, number, name, email, phone, request
                        FROM formulaires ");
                        
$query->execute();

$result = $query->fetchAll();

foreach ($result as $row) {
    echo "<tr><td>". $row['date'] ."</td>"."<td>". $row['time'] ."</td>"."<td>". $row['number'] ."</td>"."<td>". $row['name'] ."</td>"."<td>". $row['email'] ."</td>"."<td>". $row['phone'] ."</td>"."<td>". $row['request'] ."</td></tr>";
             
}




?>