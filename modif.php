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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form modification</title>
</head>

<body class="formulaire_creation">
   <h2><a class="titre_redirection_accueil" href="index.php" style="text-decoration:none"><span class="crochet_haut">&#9627;</span></br>VOIR LA LISTE DES UTILISATEURS ></a></h2>
   <section>
      <form id="myform"  action="maj_modif_client.php" method ="post">
       <input type="hidden" name="numclients" value="<?= $data_clients['Id_client']?>">  

           <label class="nom_label" for="nom">Nom :</label>
           <input class="nom_input" id="nom" type="text" name="nom" value="<?= $data_clients['nom']; ?>" autofocus>
        
           <label class="prenom_label" for="prenom">Prenom :</label>
           <input class="prenom_input" id="prenom" type="text" name="prenom" value="<?= $data_clients['prenom']; ?>">
       
           <label class="age_label" for="age">Age :</label>
           <input class="age_input" id="age" type="text" name="age" value="<?= $data_clients['age']; ?>">
        
           <label class="email_label" for="email">Adresse Mail :</label>
           <input class="email_input" id="email" type="text" name="email" value="<?= $data_clients['email']; ?>">
        
   </section>

        <a><input class="bouton_MAJ"  type="submit" value="Mettre à jour &#9998;"></br></br></br></br>
        <span class="crochet_bas" style="color:#00614E">&#9631;</span></a></br></br>

        <hr class="trait_haut"></hr></br>
        <a class="bouton_suppression" href="supprimer.php?numclients=<?= $data_clients['Id_client']?>" style="text-decoration:none">Supprimer &#x2716;</a>
        <hr class="trait_bas"></hr>
      
   </form>
</body>
</html>
