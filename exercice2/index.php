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
                <?php if (!$postOk) { ?>
                    <form class="row m-3 bg-light border rounded-lg text-center" action="" method="post" novalidate>
                        <fieldset class="col-12 py-3">
                            <span class="h4 text-dark"><b>Formulaire d'inscription</b></span>
                        </fieldset>
                        <fieldset class="col-12 col-md-6">

                            <label class="mt-3" for="gender">Civilité : </label><br>
                            <select class="rounded-lg" id="gender" name="gender" value="<?= isset($_POST["gender"]) ? $_POST["gender"] : "" ?>" required>
                                <option value="" disabled selected>. . .</option>
                                <option value="0">M.</option>
                                <option value="1">Mme</option>
                            </select><br>
                            <?= isset($errorArray["gender"]) ? "<span style=\"color: darkred;\">" . $errorArray["gender"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="lastname">Nom : </label><br>
                            <input class="rounded-lg" type="text" name="lastname" id="lastname" value="<?= isset($_POST["lastname"]) ? $_POST["lastname"] : "" ?>" placeholder="Dupont" required><br>
                            <?= isset($errorArray["lastname"]) ? "<span style=\"color: darkred;\">" . $errorArray["lastname"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="firstname">Prénom : </label><br>
                            <input class="rounded-lg" type="text" name="firstname" id="firstname" value="<?= isset($_POST["firstname"]) ? $_POST["firstname"] : "" ?>" placeholder="Regis-Robert" required><br>
                            <?= isset($errorArray["firstname"]) ? "<span style=\"color: darkred;\">" . $errorArray["firstname"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="birthday">Date de naissance : </label><br>
                            <input class="rounded-lg" type="text" name="birthday" id="birthday" value="<?= isset($_POST["birthday"]) ? $_POST["birthday"] : "" ?>" placeholder="jj/mm/aaaa" required><br>
                            <?= isset($errorArray["birthday"]) ? "<span style=\"color: darkred;\">" . $errorArray["birthday"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="birthcountry">Pays de naissance : </label><br>
                            <input class="rounded-lg" type="text" name="birthcountry" id="birthcountry" value="<?= isset($_POST["birthcountry"]) ? $_POST["birthcountry"] : "" ?>" placeholder="france" required><br>
                            <?= isset($errorArray["birthcountry"]) ? "<span style=\"color: darkred;\">" . $errorArray["birthcountry"] . "</span><br>" : "" ?>

                            <label class="mt-3" for="nationality">Nationalité : </label><br>
                            <input class="rounded-lg" type="text" name="nationality" id="nationality" value="<?= isset($_POST["nationality"]) ? $_POST["nationality"] : "" ?>" placeholder="française" required><br>
                            <?= isset($errorArray["nationality"]) ? "<span style=\"color: darkred;\">" . $errorArray["nationality"] . "</span><br>" : "" ?>

                        </fieldset>
                        <fieldset class="col-12 pt-3">
                            <?= isset($errorArray) ? "<span style=\"color: darkred;\">merci de remplir correctement tout les champs</span><br>" : "" ?>
                            <input class="py-2 px-4 mb-3 rounded-lg bg-dark text-light" type="submit" value="Envoyer">
                        </fieldset>
                    </form>
                <?php } else { ?>
                    <div class="row m-3 bg-light border rounded-lg justify-content-center">
                        <div class="col-12 py-3 text-center">
                            <span class="h4 text-dark"><b>Formulaire d'inscription</b></span>
                        </div>
                        <div class="col-6 py-3">
                            <p>Votre Nom : <b><?= htmlspecialchars($_POST["lastname"]) ?></b></p>
                            <p>Votre Prenom : <b><?= htmlspecialchars($_POST["firstname"]) ?></b></p>
                            <p>Votre Date de Naissance : <b><?= htmlspecialchars($_POST["birthday"]) ?></b></p>
                            <p>Votre Pays de naissance : <b><?= htmlspecialchars($_POST["birthcountry"]) ?></b></p>
                            <p>Votre Nationalité : <b><?= htmlspecialchars($_POST["nationality"]) ?></b></p>
                            <p>Votre Addresse : <b><?= htmlspecialchars($_POST["Address"]) ?></b></p>
                            <p>Votre eMail : <b><?= htmlspecialchars($_POST["yourMail"]) ?></b></p>
                            <p>Votre Telephone : <b><?= htmlspecialchars($_POST["phone"]) ?></b></p>
                            <p>Votre Diplome le plus elevé : <b><?= htmlspecialchars($_POST["diploma"]) ?></b></p>
                        </div>
                        <div class="col-6 py-3">
                            <p>Numéro pôle emploi : <b><?= htmlspecialchars($_POST["numPE"]) ?></b></p>
                            <p>Nombre de badge : <b><?= htmlspecialchars($_POST["badgenumber"]) ?></b></p>
                            <p>Liens codecademy : <b><?= htmlspecialchars($_POST["codecademyLink"]) ?></b></p>
                            <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
                            <p><b><?= htmlspecialchars($_POST["yourHeroespower"]) ?></b></p>

                            <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
                            <p><b><?= htmlspecialchars($_POST["yourHacks"]) ?></b></p>

                            <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                            <p><b><?= htmlspecialchars($_POST["programExperience"]) ?></b></p>

                        </div>



                    </div>
                <?php } ?>
            </div>
        </div>
    </div>



</body>

</html>