<?php
$postOk = False;
$errorArray = [];

$lastNameRegex = "/^[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/";
$firstNameRegex = "/^[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/";
$addressRegex = "/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäàç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäàç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäàç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäàç]{1,12}?$/";
$shortString = "/^[A-Z]{0,1}[a-zéèêëiîïôöüäàç -]{2,25}$/";
$longString = "/^[a-zA-Z0-9éèêëiîïôöüäàçÉÀÂÛÔÎÙÈÊ\"' -,!.;:?()]{20,500}$/";
$phoneRegex = "/^(0)+[0-9]{1}[ -]{0,1}+[0-9]{2}[ -]{0,1}+[0-9]{2}[ -]{0,1}+[0-9]{2}[ -]{0,1}+[0-9]{2}/";
$dateRegex = "/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/";
$mailRegex = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
$urlCodecademyRegex = "/https?:\/\/(www\.)?(codecademy)\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/";
$poleEmploiRegex = "/[0-9]{7}[a-zA-Z]{1}/";
$badgesRegex = "/[0-9]{1}+[0]?/";
$degreeRegex = "/[1-5]{1}/";
var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match($lastNameRegex, $_POST["lastname"])) { //=========lastname
        $errorArray["lastname"] = "Syntax invalide";
    };
    if (empty($_POST["lastname"])) {
        $errorArray["lastname"] = "Veuillez remplir le champ";
    };

    if (!preg_match($firstNameRegex, $_POST["firstname"])) { //=========firstname
        $errorArray["firstname"] = "Syntax invalide";
    };
    if (empty($_POST["firstname"])) {
        $errorArray["firstname"] = "Veuillez remplir le champ";
    };

    if (!preg_match($dateRegex, $_POST["birthday"])) { //=========birthday
        $errorArray["birthday"] = "Syntax invalide (jj/mm/aaaa ou jj-mm-aaaa)";
    };
    if (empty($_POST["birthday"])) {
        $errorArray["birthday"] = "Veuillez remplir le champ";
    };

    if (!preg_match($shortString, $_POST["birthcountry"])) { //=========birthcountry
        $errorArray["birthcountry"] = "Syntax invalide";
    };
    if (empty($_POST["birthcountry"])) {
        $errorArray["birthcountry"] = "Veuillez remplir le champ";
    };

    if (!preg_match($shortString, $_POST["nationality"])) { //=========nationality
        $errorArray["nationality"] = "Syntax invalide";
    };
    if (empty($_POST["nationality"])) {
        $errorArray["nationality"] = "Veuillez remplir le champ";
    };

    if (!var_dump(filter_var($_POST["yourMail"], FILTER_VALIDATE_EMAIL))) { //=========yourMail
        $errorArray["yourMail"] = "Syntax invalide";
    };
    if (empty($_POST["yourMail"])) {
        $errorArray["yourMail"] = "Veuillez remplir le champ";
    };

    if (!preg_match($addressRegex, $_POST["Address"])) { //=========Address
        $errorArray["Address"] = "Syntax invalide";
    };
    if (empty($_POST["Address"])) {
        $errorArray["Address"] = "Veuillez remplir le champ";
    };

    if (!preg_match($phoneRegex, $_POST["phone"])) { //=========phone
        $errorArray["phone"] = "Syntax invalide";
    };
    if (empty($_POST["phone"])) {
        $errorArray["phone"] = "Veuillez remplir le champ";
    };


    if (empty($_POST["diploma"])) { //=======================diploma
        $errorArray["diploma"] = "Veuillez remplir le champ";
    } else {
        if (!preg_match($degreeRegex, $_POST["diploma"])) {
            $errorArray["diploma"] = "Syntax invalide";
        };
    };

    if (!preg_match($poleEmploiRegex, $_POST["numPE"])) { //=========numPE
        $errorArray["numPE"] = "Syntax invalide";
    };
    if (empty($_POST["numPE"])) {
        $errorArray["numPE"] = "Veuillez remplir le champ";
    };

    if (!preg_match($badgesRegex, $_POST["badgenumber"])) { //=========badgenumber
        $errorArray["badgenumber"] = "Syntax invalide";
    };
    if (empty($_POST["badgenumber"])) {
        $errorArray["badgenumber"] = "Veuillez remplir le champ";
    };

    if (!preg_match($urlCodecademyRegex, $_POST["codecademyLink"])) { //=========codecademyLink
        $errorArray["codecademyLink"] = "Syntax invalide";
    };
    if (empty($_POST["codecademyLink"])) {
        $errorArray["codecademyLink"] = "Veuillez remplir le champ";
    };

    if (!preg_match($longString, $_POST["yourHeroespower"])) { //=========yourHeroespower
        $errorArray["yourHeroespower"] = "Syntax invalide seul les caractere (a-z A-Z 0-9 éèêëiîïôöüäàçÉÀÂÛÔÎÙÈÊ \"' -,!.;:?()) sont autorisé";
    };
    if (empty($_POST["yourHeroespower"])) {
        $errorArray["yourHeroespower"] = "Veuillez remplir le champ";
    };

    if (!preg_match($longString, $_POST["yourHacks"])) { //=========yourHacks
        $errorArray["yourHacks"] = "Syntax invalide seul les caractere (a-z A-Z 0-9 éèêëiîïôöüäàçÉÀÂÛÔÎÙÈÊ \"' -,!.;:?()) sont autorisé";
    };
    if (empty($_POST["yourHacks"])) {
        $errorArray["yourHacks"] = "Veuillez remplir le champ";
    };

    if (!preg_match($longString, $_POST["programExperience"])) { //=========programExperience
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
