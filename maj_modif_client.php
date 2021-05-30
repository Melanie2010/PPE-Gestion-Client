<?php

//ouvrir la base de donnée 
$objetPdo = new PDO('mysql:host=localhost;dbname=client_ligue','root','');
$objetPdo->exec("SET CHARACTER SET utf8");

//requete d affichage
$pdoStat = $objetPdo->prepare('UPDATE clients set  nom= :nom, prenom=:prenom, age=:age, email=:email WHERE Id_client =:num LIMIT 1');

//liaison du paramètre nommé  
$pdoStat->bindValue(':num', $_POST['numclients'], PDO::PARAM_STR);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':age', $_POST['age'], PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

//executer requete
$executeIsOk = $pdoStat->execute();

if ($executeIsOk) {
    $message = 'Le Client a été mis à jour';
} 
else {
    $message = 'Echec de la mise à jour du Client';
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification : résultat</title>
</head>

<body>
<br>   <br>   <br>   <br>  <br> <h7>Résultat de la modification</h7></br> </br> </br>  </br> </br> 
    <p><?= $message ?></p>
    <td><a href="index.php">Suivant</a></td>     

</body>
</html>