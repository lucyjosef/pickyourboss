<?php
$dsn = 'mysql:host=localhost;dbname=pickaboss;charset:UTF8';
$username = 'root';
//$password = '0000';

$dbh = new PDO($dsn, $username);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sqlJob = "SELECT * FROM job ORDER BY id DESC;";
$stmt = $dbh->query($sqlJob);
$job = $stmt->fetchAll();

$sqlUser = "SELECT `last_name`, `first_name`, `domain`, `email` FROM user ORDER BY id DESC;";
$stmt = $dbh->query($sqlUser);
$user = $stmt->fetchAll();
?>

<html>
    <head>
        <title>Pick Your Boss - Hire your job !</title>
        <meta charset="utf-8">
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="ressources/bases.less">
    </head>
    <body>
        <header>
            <nav id="main-menu">
                <ul class="flexbox ul-no-style">
                    <li><a href="#">HOME</a></li>
                </ul>
                <ul class="flexbox ul-no-style">
                    <?php
                        if(isset($_POST['submit'])){
                            echo '<li><a href="#" class="btn btn-primary">LOG OUT</a></li>';
                        } else {
                            echo '<li><a href="#" class="btn btn-primary">SIGN IN</a></li>';
                            echo '<li><a href="#" class="btn btn-primary">REGISTER</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </header>