<?php
//Connexion to BDD
$dsn = 'mysql:host=localhost;dbname=pickaboss;charset:UTF8';
$username = 'root';
//$password = '0000';
$dbh = new PDO($dsn, $username);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//REQUETES
$sqlJob = "SELECT * FROM job ORDER BY id DESC;";
$stmt = $dbh->query($sqlJob);
$job = $stmt->fetchAll();

$sqlCities = "SELECT `city` FROM `localisation`;";
$stmt = $dbh->query($sqlCities);
$cities = $stmt->fetchAll();

$sqlUser = "SELECT `last_name`, `first_name`, `domain`, `email` FROM user ORDER BY id DESC;";
$stmt = $dbh->query($sqlUser);
$user = $stmt->fetchAll();
?>