<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showcard($array)
{
    echo $array['name'] . ' ' . $array['firstname'] . '<br><div class=\'col-6\'><img src=\'' . $array['portrait'] . '\' width=\'100%\' alt=\'photo de ' . $array['name'] . ' ' . $array['firstname'] . '\'></div>';
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>TP 3</title>
</head>

<body class="bg-dark">
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-11 bg-white my-3 rounded-lg">
                <div class="m-3 p-2 bg-light border rounded-lg">
                    <h1>TP 3</h1>
                    <p>Faire une fonction qui permet d'afficher les données des tableaux suivants :<br><br>
                        &nbsp;&nbsp;&nbsp; $portrait1 = array('name'=&gt;'Victor', 'firstname'=&gt;'Hugo', 'portrait'=&gt;'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');<br>
                        &nbsp;&nbsp;&nbsp; $portrait2 = array('name'=&gt;'Jean', 'firstname'=&gt;'de La Fontaine', 'portrait'=&gt;'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');<br>
                        &nbsp;&nbsp;&nbsp; $portrait3 = array('name'=&gt;'Pierre', 'firstname'=&gt;'Corneille', 'portrait'=&gt;'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');<br>
                        &nbsp;&nbsp;&nbsp; $portrait4 = array('name'=&gt;'Jean', 'firstname'=&gt;'Racine', 'portrait'=&gt;'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');<br><br>
                        Les afficher tous sur une même page.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 bg-white my-3 rounded-lg">
                    <div class="m-3 p-2 bg-light border rounded-lg">
                        <p><?php showcard($portrait1); ?></p>
                    </div>
                    <div class="m-3 p-2 bg-light border rounded-lg">
                        <p><?php showcard($portrait2); ?></p>
                    </div>
                    <div class="m-3 p-2 bg-light border rounded-lg">
                        <p><?php showcard($portrait3); ?></p>
                    </div>
                    <div class="m-3 p-2 bg-light border rounded-lg">
                        <p><?php showcard($portrait4); ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>