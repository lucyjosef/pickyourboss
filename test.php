<form action="test.php" method="POST">
    <label for="last_name">Nom :</label>
    <input type="text" name="last_name" placeholder="Votre nom">

    <label for="first_name">Prénom :</label>
    <input type="text" name="first_name" placeholder="Votre prénom">

    <label for="email">Email :</label>
    <input type="text" name="email" placeholder="Votre Email">

    <label for="password">Mot de passe :</label>
    <input type="text" name="password" placeholder="Votre Mot de passe">

    <label for="domain">Domain :</label>
    <input type="text" name="domain" placeholder="Votre Domain">

    <input type="submit" name="sub" value="Inscription">

</form>



<?php

if (isset($_POST['sub'])) {
  require_once('include/requetes.php');
  $insertpro = $dbh->prepare("INSERT INTO user ( last_name, first_name, email, password, domain)
              VALUES (:last_name, :first_name, :email, :password, :domain)");
      $insertpro->execute(array(
              'last_name' =>  $_POST['last_name'],
              'first_name' => $_POST['first_name'],
              'email' => $_POST['email'],
              'password' => MD5($_POST['password']),
              'domain' => $_POST['domain']
              ));
}
