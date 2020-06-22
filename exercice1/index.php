<?php
$postOk = False;
$errorArray = [];

$lastNameRegex = "/^[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/";
$firstNameRegex = "/^[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/";
$addressRegex = "/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäàç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäàç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäàç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäàç]{1,12}?$/";
$shortString = "/^[A-Z]{0,1}[a-zéèêëiîïôöüäàç -]{2,25}$/";
$longString = "/^[a-zA-Z0-9éèêëiîïôöüäàçÉÀÂÛÔÎÙÈÊ\"' -,!.;:?()]{20,500}$/";
$phoneRegex = "/^(0)+[0-9]{1}[ -]{0,1}+[0-9]{2}[ -]{0,1}+[0-9]{2}[ -]{0,1}+[0-9]{2}[ -]{0,1}+[0-9]{2}/";
$dateRegex = "/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/";
$mailRegex = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
$urlCodecademyRegex = "/https?:\/\/(www\.)?(codecademy)\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/";
$poleEmploiRegex = "/[0-9]{7}[a-zA-Z]{1}/";
$badgesRegex = "/[0-9]{1}+[0]?/";
$degreeRegex = "/[0-4]{1}/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match($lastNameRegex, $_POST["lastname"])) {//=========lastname
        $errorArray["lastname"] = "Syntax invalide";
    };
    if (empty($_POST["lastname"])) {
        $errorArray["lastname"] = "Veuillez remplir le champ";
    };

    if (!preg_match($firstNameRegex, $_POST["firstname"])) {//=========firstname
        $errorArray["firstname"] = "Syntax invalide";
    };
    if (empty($_POST["firstname"])) {
        $errorArray["firstname"] = "Veuillez remplir le champ";
    };

    if (!preg_match($dateRegex, $_POST["birthday"])) {//=========birthday
        $errorArray["birthday"] = "Syntax invalide (jj/mm/aaaa ou jj-mm-aaaa)";
    };
    if (empty($_POST["birthday"])) {
        $errorArray["birthday"] = "Veuillez remplir le champ";
    };

    if (!preg_match($shortString, $_POST["birthcountry"])) {//=========birthcountry
        $errorArray["birthcountry"] = "Syntax invalide";
    };
    if (empty($_POST["birthcountry"])) {
        $errorArray["birthcountry"] = "Veuillez remplir le champ";
    };

    if (!preg_match($shortString, $_POST["nationality"])) {//=========nationality
        $errorArray["nationality"] = "Syntax invalide";
    };
    if (empty($_POST["nationality"])) {
        $errorArray["nationality"] = "Veuillez remplir le champ";
    };

    if (!preg_match($mailRegex, $_POST["yourMail"])) {//=========yourMail
        $errorArray["yourMail"] = "Syntax invalide";
    };
    if (empty($_POST["yourMail"])) {
        $errorArray["yourMail"] = "Veuillez remplir le champ";
    };

    if (!preg_match($addressRegex, $_POST["Address"])) {//=========Address
        $errorArray["Address"] = "Syntax invalide";
    };
    if (empty($_POST["Address"])) {
        $errorArray["Address"] = "Veuillez remplir le champ";
    };

    if (!preg_match($phoneRegex, $_POST["phone"])) {//=========phone
        $errorArray["phone"] = "Syntax invalide";
    };
    if (empty($_POST["phone"])) {
        $errorArray["phone"] = "Veuillez remplir le champ";
    };


    if (empty($_POST["diploma"])) {//=======================diploma
        $errorArray["diploma"] = "Veuillez remplir le champ";
    }else{
        if (!preg_match($degreeRegex, $_POST["diploma"])) {
        $errorArray["diploma"] = "Syntax invalide";
        };
    };

    if (!preg_match($poleEmploiRegex, $_POST["numPE"])) {//=========numPE
        $errorArray["numPE"] = "Syntax invalide";
    };
    if (empty($_POST["numPE"])) {
        $errorArray["numPE"] = "Veuillez remplir le champ";
    };

    if (!preg_match($badgesRegex, $_POST["badgenumber"])) {//=========badgenumber
        $errorArray["badgenumber"] = "Syntax invalide";
    };
    if (empty($_POST["badgenumber"])) {
        $errorArray["badgenumber"] = "Veuillez remplir le champ";
    };

    if (!preg_match($urlCodecademyRegex, $_POST["codecademyLink"])) {//=========codecademyLink
        $errorArray["codecademyLink"] = "Syntax invalide";
    };
    if (empty($_POST["codecademyLink"])) {
        $errorArray["codecademyLink"] = "Veuillez remplir le champ";
    };

    if (!preg_match($longString, $_POST["yourHeroespower"])) {//=========yourHeroespower
        $errorArray["yourHeroespower"] = "Syntax invalide seul les caractere (a-z A-Z 0-9 éèêëiîïôöüäàçÉÀÂÛÔÎÙÈÊ \"' -,!.;:?()) sont autorisé";
    };
    if (empty($_POST["yourHeroespower"])) {
        $errorArray["yourHeroespower"] = "Veuillez remplir le champ";
    };

    if (!preg_match($longString, $_POST["yourHacks"])) {//=========yourHacks
        $errorArray["yourHacks"] = "Syntax invalide seul les caractere (a-z A-Z 0-9 éèêëiîïôöüäàçÉÀÂÛÔÎÙÈÊ \"' -,!.;:?()) sont autorisé";
    };
    if (empty($_POST["yourHacks"])) {
        $errorArray["yourHacks"] = "Veuillez remplir le champ";
    };

    if (!preg_match($longString, $_POST["programExperience"])) {//=========programExperience
        $errorArray["programExperience"] = "Syntax invalide seul les caractere (a-z A-Z 0-9 éèêëiîïôöüäàçÉÀÂÛÔÎÙÈÊ \"' -,!.;:?()) sont autorisé";
    };
    if (empty($_POST["programExperience"])) {
        $errorArray["programExperience"] = "Veuillez remplir le champ";
    };

    if (empty($errorArray)) {
        $postOk = true;
    };
} else {
    $postOk = false;
};
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>TP 1</title>
</head>

<body class="bg-dark">
    <div class="container bg-white my-3 rounded-lg">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="m-3 p-2 bg-light border rounded-lg">
                    <h1>TP 1</h1>
                    <p>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes : </p>
                    <ul>
                        <li><b>Nom</b></li>
                        <li><b>Prénom</b></li>
                        <li><b>Date de naissance</b></li>
                        <li><b>Pays de naissance</b></li>
                        <li><b>Nationalité</b></li>
                        <li><b>Adresse</b></li>
                        <li><b>E-mail</b></li>
                        <li><b>Téléphone</b></li>
                        <li><b>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</b></li>
                        <li><b>Numéro pôle emploi</b></li>
                        <li><b>Nombre de badge</b></li>
                        <li><b>Liens codecademy</b></li>
                        <li><b>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</b></li>
                        <li><b>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</b></li>
                        <li><b>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</b></li>
                    </ul>
                    <p>A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-white my-3 rounded-lg">
        <div class="row justify-content-center">
            <div class="col-12">
           <?php if(!$postOk){?>
                <form class="row m-3 bg-light border rounded-lg text-center" action="" method="post" novalidate>
                    <fieldset class="col-12 py-3">
                        <span class="h4 text-dark"><b>Formulaire d'inscription</b></span>
                    </fieldset>
                    <fieldset class="col-12 col-md-6">
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

                        <label class="mt-3" for="Address">Adresse : </label><br>
                        <input class="rounded-lg" type="text" name="Address" id="Address" value="<?= isset($_POST["Address"]) ? $_POST["Address"] : "" ?>" placeholder="1 rue de la paix" required><br>
                        <?= isset($errorArray["Address"]) ? "<span style=\"color: darkred;\">" . $errorArray["Address"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="yourMail">E-mail : </label><br>
                        <input class="rounded-lg" type="mail" name="yourMail" id="yourMail" value="<?= isset($_POST["yourMail"]) ? $_POST["yourMail"] : "" ?>" placeholder="aaa@bbb.com" required><br>
                        <?= isset($errorArray["yourMail"]) ? "<span style=\"color: darkred;\">" . $errorArray["yourMail"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="phone">Téléphone : </label><br>
                        <input class="rounded-lg" type="text" name="phone" id="phone" value="<?= isset($_POST["phone"]) ? $_POST["phone"] : "" ?>" placeholder="01 02 03 04 05" required><br>
                        <?= isset($errorArray["phone"]) ? "<span style=\"color: darkred;\">" . $errorArray["phone"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="diploma">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : </label><br>
                        <select class="rounded-lg" id="diploma" name="diploma" value="<?= isset($_POST["diploma"]) ? $_POST["diploma"] : "" ?>" required>
                            <option value="" disabled selected>. . .</option>
                            <option value="0">sans</option>
                            <option value="1">Bac</option>
                            <option value="2">Bac+2</option>
                            <option value="3">Bac+3</option>
                            <option value="4">supérieur</option>
                        </select><br>
                        <?= isset($errorArray["diploma"]) ? "<span style=\"color: darkred;\">" . $errorArray["diploma"] . "</span><br>" : "" ?>

                    </fieldset>
                    <fieldset class="col-12 col-md-6">
                        <label class="mt-3" for="numPE">Numéro pôle emploi : </label><br>
                        <input class="rounded-lg" type="text" name="numPE" id="numPE" value="<?= isset($_POST["numPE"]) ? $_POST["numPE"] : "" ?>" placeholder="12346567F"><br>
                        <?= isset($errorArray["numPE"]) ? "<span style=\"color: darkred;\">" . $errorArray["numPE"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="badgenumber">Nombre de badge : </label><br>
                        <input class="rounded-lg" type="text" name="badgenumber" id="badgenumber" value="<?= isset($_POST["badgenumber"]) ? $_POST["badgenumber"] : "" ?>"><br>
                        <?= isset($errorArray["badgenumber"]) ? "<span style=\"color: darkred;\">" . $errorArray["badgenumber"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="codecademyLink">Liens codecademy : </label><br>
                        <input class="rounded-lg" type="text" name="codecademyLink" id="codecademyLink" value="<?= isset($_POST["codecademyLink"]) ? $_POST["codecademyLink"] : "" ?>"><br>
                        <?= isset($errorArray["codecademyLink"]) ? "<span style=\"color: darkred;\">" . $errorArray["codecademyLink"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="yourHeroespower">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label><br>
                        <textarea class="p-2 rounded-lg" style="width: 80%;" type="text" name="yourHeroespower" id="yourHeroespower" value="<?= isset($_POST["yourHeroespower"]) ? $_POST["yourHeroespower"] : "" ?>" placeholder="Superman car il est super fort ( merci Jean-Kevin )"></textarea><br>
                        <?= isset($errorArray["yourHeroespower"]) ? "<span style=\"color: darkred;\">" . $errorArray["yourHeroespower"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="yourHacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><br>
                        <textarea class="p-2 rounded-lg" style="width: 80%;" type="text" name="yourHacks" id="yourHacks" value="<?= isset($_POST["yourHacks"]) ? $_POST["yourHacks"] : "" ?>"></textarea><br>
                        <?= isset($errorArray["yourHacks"]) ? "<span style=\"color: darkred;\">" . $errorArray["yourHacks"] . "</span><br>" : "" ?>

                        <label class="mt-3" for="programExperience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><br>
                        <textarea class="p-2 rounded-lg" style="width: 80%;" type="text" name="programExperience" id="programExperience" value="<?= isset($_POST["programExperience"]) ? $_POST["programExperience"] : "" ?>"></textarea><br>
                        <?= isset($errorArray["programExperience"]) ? "<span style=\"color: darkred;\">" . $errorArray["programExperience"] . "</span><br>" : "" ?>

                    </fieldset>
                    <fieldset class="col-12 pt-3">
                        <?= isset($errorArray) ? "<span style=\"color: darkred;\">merci de remplir correctement tout les champs</span><br>" : "" ?>
                        <input class="py-2 px-4 mb-3 rounded-lg bg-dark text-light" type="submit" value="Envoyer">
                    </fieldset>
                </form>
                <?php }else{?>
                    <div class="row m-3 bg-light border rounded-lg justify-content-center">
                        <div class="col-12 py-3 text-center">
                            <span class="h4 text-dark"><b>Formulaire d'inscription</b></span>
                        </div>
                        <div class="col-6 py-3">
                            <p>Votre Nom : <b><?= htmlspecialchars($_POST["lastname"])?></b></p>
                            <p>Votre Prenom : <b><?= htmlspecialchars($_POST["firstname"])?></b></p>
                            <p>Votre Date de Naissance : <b><?= htmlspecialchars($_POST["birthday"])?></b></p>
                            <p>Votre Pays de naissance : <b><?= htmlspecialchars($_POST["birthcountry"])?></b></p>
                            <p>Votre Nationalité : <b><?= htmlspecialchars($_POST["nationality"])?></b></p>
                            <p>Votre Addresse : <b><?= htmlspecialchars($_POST["Address"])?></b></p>
                            <p>Votre eMail : <b><?= htmlspecialchars($_POST["yourMail"])?></b></p>
                            <p>Votre Telephone : <b><?= htmlspecialchars($_POST["phone"])?></b></p>
                            <p>Votre Diplome le plus elevé : <b><?= htmlspecialchars($_POST["diploma"])?></b></p>
                        </div>
                        <div class="col-6 py-3">
                            <p>Numéro pôle emploi : <b><?= htmlspecialchars($_POST["numPE"])?></b></p>
                            <p>Nombre de badge : <b><?= htmlspecialchars($_POST["badgenumber"])?></b></p>
                            <p>Liens codecademy : <b><?= htmlspecialchars($_POST["codecademyLink"])?></b></p>
                            <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
                            <p><b><?= htmlspecialchars($_POST["yourHeroespower"])?></b></p>

                            <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
                            <p><b><?= htmlspecialchars($_POST["yourHacks"])?></b></p>

                            <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                            <p><b><?= htmlspecialchars($_POST["programExperience"])?></b></p>

                        </div>



                    </div>
                <?php }?>
            </div>
        </div>
    </div>



</body>

</html>