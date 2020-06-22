<?php
$postOk = False;
$errorArray = [];

$genderRegex = "/^[HF]{1}+[a-z]{4}/";
$lastNameRegex = "/^[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/";
$firstNameRegex = "/^[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/";
$ageRegex = "/[0-9]{1,2}/";
$shortString = "/^[a-zA-Zéèêëiîïôöüäàç -]{1,30}$/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) { //=================================gender
        $errorArray["gender"] = "Veuillez remplir le champ";
    } else {
        if (!preg_match($genderRegex, $_POST["gender"])) {
            $errorArray["gender"] = "Syntax invalide";
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

    if (!preg_match($ageRegex, $_POST["age"])) { //=========age
        $errorArray["age"] = "Syntax invalide";
    };
    if (empty($_POST["age"])) {
        $errorArray["age"] = "Veuillez remplir le champ";
    };

    if (!preg_match($shortString, $_POST["society"])) { //=========society
        $errorArray["society"] = "Syntax invalide";
    };
    if (empty($_POST["society"])) {
        $errorArray["society"] = "Veuillez remplir le champ";
    };

    if (empty($errorArray)) {
        $postOk = true;
    };
} else {
    $postOk = false;
};
