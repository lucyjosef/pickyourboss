<?php require_once('connect.php'); ?>
<h2>Coordonnées</h2>
<form action="form_client.php" method="POST">
    <label for="first_name">Nom :</label>
    <input type="text" name="first_name" placeholder="Votre nom">

    <label for="second_name">Prénom :</label>
    <input type="text" name="second_name" placeholder="Votre prénom">

    <label for="localisation">Choisissez une localisation :</label>
    <select name="localisation">
        <?php
        $sqlCities = "SELECT `city` FROM `localisation`;";
        $stmt = $dbh->query($sqlCities);
        $cities = $stmt->fetchAll();
        
        foreach($cities as $value=>$key) {
            foreach($key as $subValue=>$subKey) {
                echo '<option>' . $subKey . '</option>';
            }
        }
        ?>
    </select>

    <input type="submit" name="next" value="NEXT >">
    <?php
    if(isset($_POST['next'])) {
        echo '<p>Gloubi</p>';
    }
    ?>
</form>
