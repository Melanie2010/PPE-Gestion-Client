<?php

//ouvrir la base de donnée 
$objetPdo = new PDO('mysql:host=localhost;dbname=client_ligue','root','');
$objetPdo->exec("SET CHARACTER SET utf8");

//requete d affichage
$pdoStat = $objetPdo->prepare('SELECT * FROM clients WHERE Id_client =:num');

//liaison du paramètre nommé (ici num)
$pdoStat->bindValue(':num', $_GET['numclients'], PDO::PARAM_INT);

//executer requete
$executeIsOk = $pdoStat->execute();

//recuperer le resultat (l'etablissement)
$data_clients = $pdoStat->fetch();

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form modification</title>
</head>

<body>

<h6>Modifier un client</h6>
   <form id="myform"  action="maj_modif_client.php" method ="post">

        <input type="hidden" name="numclients" value="<?= $data_clients['Id_client']?>">  

        <div>
           <label for="nom">Nom</label>
           <input id="nom" type="text" name="nom" value="<?= $data_clients['nom']; ?>">
        </div>
        <div>
           <label for="prenom">Prenom</label>
           <input id="prenom" type="text" name="prenom" value="<?= $data_clients['prenom']; ?>">
        </div>
        <div>
           <label for="age">Age</label>
           <input id="age" type="text" name="age" value="<?= $data_clients['age']; ?>">
        </div>
        <div>
           <label for="email">Adresse Mail</label>
           <input id="email" type="text" name="email" value="<?= $data_clients['email']; ?>">
        </div>
        
        <div>
        <input type="submit" value="Enregistrer les modifications">
        </div>

    </form>

</body>
</html>