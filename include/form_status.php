<div>
    <form method="POST" action="#">
        <fieldset>
            <legend>Veuillez sélectionner vos intérêts :</legend>
            <div>
                <input type="radio" id="pro" name="status" value="pro">
                <label for="pro">un professionnel</label>
            </div>
            <div>
                <input type="radio" id="client" name="status" value="particulier">
                <label for="particulier">un particulier</label>
            </div>
            <button type="submit" name="submit">OK</button>
        </fieldset>
        <?php
        if(isset($_POST['submit'])) {
            if($_POST['status'] == 'particulier') {
                echo 'Vous êtes un.e ' . $_POST['status'] . '. Veuillez remplir les champs suivants.';
                include('./form_client.php');
            }
            elseif($_POST['status'] == 'pro') {
                echo 'Vous êtes un.e ' . $_POST['status'] . '. Veuillez remplir les champs suivants.';
                include('./form_pro.php');
            }
        }
        ?>
    </form>
</div>