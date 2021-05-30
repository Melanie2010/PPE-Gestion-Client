<?php

//ouvrir la base de donnée 
$objetPdo = new PDO('mysql:host=localhost;dbname=client_ligue','root','');
$objetPdo->exec("SET CHARACTER SET utf8");

//requete d insertion 
$pdoStat = $objetPdo->prepare('INSERT INTO clients VALUES (NULL, :nom, :prenom , :age , :email )');

//chaque marqueur a une valeur

$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':age', $_POST['age'], PDO::PARAM_INT);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

//executer la requete

$insertIsOk = $pdoStat->execute();

if ($insertIsOk) {
    $message = 'Le client a été ajouté dans la base de donnée';
} else {
    $message = 'Echec de l insertion';
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
<br><br><br><h9>Insertion du client</h9></br></br></br>
    <p><?php echo $message; ?></p>
    <td> <a href="index.php">Suivant</a> </td>    
    
    
</body>
</html>