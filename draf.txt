<?php
/*
foreach ($user as $key=>$value) {
    $return = '<div class="article-user">';
    foreach ($value as $subKey=>$subValue) {
        $return .= $subValue . '<br>';
        //echo 'subKey : ' . $subKey . '<br>';
    }
    $return .= '</div>';
    echo $return;
}

echo '<pre>';
var_dump($user);
//echo '<p>'.$job.'</p>';
echo '</pre>';


foreach ($job as $key=>$value) {
    $return = '<div class="article-user">';
    foreach ($value as $subKey=>$subValue) {
        $return .= $subValue . '<br>';
    }
    $return .= '</div>';
    echo $return;
}

echo '<pre>';
var_dump($job);
echo '</pre>';
*/
?>

//de quoi gérer en dur le choix de qq villes
<label for="localisation">Choisissez une localisation :</label>
<select name="localisation">
    <option>Paris</option>
    <option>Lyon</option>
    <option>Marseille</option>
    <option>Bordeaux</option>
    <option>Quimper</option>
    <option>Strasbourg</option>
    <option>Autre</option>
</select>

<input type="submit" value="NEXT" name="next">
<?php
if(isset($_POST['next'])) {
    $choixVille = ceil($_POST['localisation']);
    echo $choixVille;
    if($_POST['localisation'] == 7){
        echo '
        <label for="city"> : </label>
        <input type="text" name="city" placeholder="Dans quelle ville êtes-vous?">
        ';
    }
}
?>