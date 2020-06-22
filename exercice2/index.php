<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>TP 2</title>
</head>

<body class="bg-dark">
    <div class="container bg-white my-3 rounded-lg">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="m-3 p-2 bg-light border rounded-lg">
                    <h1>TP 2</h1>
                    <p>Faire une page permettant de saisir les informations suivantes : </p>
                    <ul>
                        <li><b>Civilité (liste déroulante)</b></li>
                        <li><b>Nom</b></li>
                        <li><b>Prénom</b></li>
                        <li><b>Age</b></li>
                        <li><b>Société</b></li>
                    </ul>
                    <p>A la validation, les données saisies devront aparaitre sous le formulaire.<br>
                    <b>Attention</b> les données devront rester dans les différents éléments du formulaire même après la validation.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-white my-3 rounded-lg">
        <div class="row justify-content-center">
            <div class="col-12">
                    <form class="row m-3 bg-light border rounded-lg text-center" action="" method="post" novalidate>
                        <fieldset class="col-12 py-3">
                            <span class="h4 text-dark"><b>Formulaire d'inscription</b></span>
                        </fieldset>
                        <fieldset class="col-12">

                            <label class="mt-3" for="gender">Civilité : </label><br>
                            <select class="rounded-lg" id="gender" name="gender" value="<?= isset($_POST["gender"]) ? $_POST["gender"] : "" ?>" required>
                                <option value="" disabled <?= !isset($_POST["gender"]) ? "selected" : "" ?>>. . .</option>
                                <option value="Homme" <?= isset($_POST["gender"]) && $_POST["gender"] == "Homme" ? "selected" : "" ?>>M.</option>
                                <option value="Femme" <?= isset($_POST["gender"]) && $_POST["gender"] == "Femme" ? "selected" : "" ?>>Mme</option>
                            </select><br>
                            <?= isset($errorArray["gender"]) ? "<span style=\"color: darkred;\">" . $errorArray["gender"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="lastname">Nom : </label><br>
                            <input class="rounded-lg" type="text" name="lastname" id="lastname" value="<?= isset($_POST["lastname"]) ? $_POST["lastname"] : "" ?>" placeholder="Dupont" required><br>
                            <?= isset($errorArray["lastname"]) ? "<span style=\"color: darkred;\">" . $errorArray["lastname"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="firstname">Prénom : </label><br>
                            <input class="rounded-lg" type="text" name="firstname" id="firstname" value="<?= isset($_POST["firstname"]) ? $_POST["firstname"] : "" ?>" placeholder="Regis-Robert" required><br>
                            <?= isset($errorArray["firstname"]) ? "<span style=\"color: darkred;\">" . $errorArray["firstname"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="age">Date de naissance : </label><br>
                            <input class="rounded-lg" type="text" name="age" id="age" value="<?= isset($_POST["age"]) ? $_POST["age"] : "" ?>" placeholder="25" required><br>
                            <?= isset($errorArray["age"]) ? "<span style=\"color: darkred;\">" . $errorArray["age"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="society">Societé : </label><br>
                            <input class="rounded-lg" type="text" name="society" id="society" value="<?= isset($_POST["society"]) ? $_POST["society"] : "" ?>" placeholder="EDF" required><br>
                            <?= isset($errorArray["society"]) ? "<span style=\"color: darkred;\">" . $errorArray["society"] . "</span><br>" : "" ?>

                        </fieldset>
                        <fieldset class="col-12 pt-3">
                            <?= !empty($errorArray) ? "<span style=\"color: darkred;\">merci de remplir correctement tout les champs</span><br>" : "" ?>
                            <input class="py-2 px-4 mb-3 rounded-lg bg-dark text-light" type="submit" value="Envoyer">
                        </fieldset>
                    </form>
                <?php if ($postOk) { ?>
                    <div class="row m-3 bg-light border rounded-lg justify-content-center">
                        <div class="col-12 py-3 text-center">
                            <span class="h4 text-dark"><b>Formulaire d'inscription</b></span>
                        </div>
                        <div class="col-6 py-3">
                            <p>Vous etes un<?= $_POST["gender"] == "Femme" ? "e" : "" ?> <b><?= htmlspecialchars($_POST["gender"]) ?></b></p>
                            <p>Votre Nom : <b><?= htmlspecialchars($_POST["lastname"]) ?></b></p>
                            <p>Votre Prenom : <b><?= htmlspecialchars($_POST["firstname"]) ?></b></p>
                            <p>Votre Age : <b><?= htmlspecialchars($_POST["age"]) ?></b></p>
                            <p>Votre Societé : <b><?= htmlspecialchars($_POST["society"]) ?></b></p>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>