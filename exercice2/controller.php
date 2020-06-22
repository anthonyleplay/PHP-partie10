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
        if (empty($_POST["gender"])) { //=======================gender
        $errorArray["gender"] = "Veuillez remplir le champ";
    } else {
        if (!preg_match($degreeRegex, $_POST["diploma"])) {
            $errorArray["diploma"] = "Syntax invalide";
        };
    };
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

    if (empty($errorArray)) {
        $postOk = true;
    };
} else {
    $postOk = false;
};
