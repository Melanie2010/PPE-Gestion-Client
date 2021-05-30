<?php

//ouvrir la base de donnée 
$objetPdo = new PDO('mysql:host=localhost;dbname=client_ligue','root','');
$objetPdo->exec("SET CHARACTER SET utf8");

//requete d affichage
$pdoStat = $objetPdo->prepare('DELETE FROM clients WHERE Id_client =:num LIMIT 1');

//liaison du paramètre nommé
$pdoStat->bindValue(':num', $_GET['numclients'], PDO::PARAM_INT);


//executer requete
$executeIsOk = $pdoStat->execute();


if ($executeIsOk) {
    $message = 'Le client a été supprimer';
} 
else {
    $message = 'Echec de la suppression du client';
}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maison des Ligues</title>

</head>

<body>
    <h5>Le client a bien été supprimé. </h5>

    <p><?= $message ?></p>
    <td><a href="index.php">Suivant</a></td>    

</body>
</html>