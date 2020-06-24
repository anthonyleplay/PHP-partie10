<?php
function showResult()
{
  $numberRegex = "/^[0-9]{0,16}$/";
  if (isset($_POST["chiffre1"]) && isset($_POST["chiffre1"])) {
    if (!empty($_POST["chiffre1"]) && !empty($_POST["chiffre2"])) {
      if (preg_match($numberRegex, $_POST["chiffre1"]) && preg_match($numberRegex, $_POST["chiffre2"])) {
        if (isset($_POST["addition"])) {
          echo $_POST["chiffre1"] + $_POST["chiffre2"];
        };
        if (isset($_POST["soustraction"])) {
          echo $_POST["chiffre1"] - $_POST["chiffre2"];
        };
        if (isset($_POST["multiplication"])) {
          echo $_POST["chiffre1"] * $_POST["chiffre2"];
        };
        if (isset($_POST["division"])) {
          echo $_POST["chiffre1"] / $_POST["chiffre2"];
        };
      } else {
        echo "Nop !, merci d'entrer des nombres dans les cases (max 16 chiffres)";
      };
    } else
      echo "Veuillez remplir les champs avec des nombres";
  };
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Calculatrice</title>
</head>

<body class="bg-dark">
  <div class="container bg-white my-5 rounded-lg">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="m-3 p-2 bg-light border rounded-lg text-center">
          <h1>Une calculatrice en PHP</h1>
          <form action="" method="post">
            <input type="text" name="chiffre1" value="<?= isset($_POST["chiffre1"]) && !isset($_POST["reset"]) ? $_POST["chiffre1"] : "" ?>" placeholder="<?= isset($_POST["chiffre1"]) ? (empty($_POST["chiffre1"]) ? "25" : $_POST["chiffre1"]) : "25" ?>">
            <input type="text" name="chiffre2" value="<?= isset($_POST["chiffre2"]) && !isset($_POST["reset"]) ? $_POST["chiffre2"] : "" ?>" placeholder="<?= isset($_POST["chiffre2"]) ? (empty($_POST["chiffre2"]) ? "75" : $_POST["chiffre2"]) : "75" ?>">
            <input type="submit" name="addition" value="+">
            <input type="submit" name="soustraction" value="-">
            <input type="submit" name="multiplication" value="*">
            <input type="submit" name="division" value="/">
            <input class="ml-5" type="submit" name="reset" value="Reset">
          </form>
          <b>
            <p class="text-left my-3 h4">Résultat : <?php htmlspecialchars(showResult()) ?></p>
          </b>
        </div>
      </div>
    </div>
  </div>

</body>

</html>