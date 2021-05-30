<?php

//ouvrir la base de donnée 
$objetPdo = new PDO('mysql:host=localhost;dbname=client_ligue','root','');
$objetPdo->exec("SET CHARACTER SET utf8");

//requete d affichage

$pdoStat = $objetPdo->prepare('SELECT * FROM clients ');

//executer la requete

$executeIsOk = $pdoStat->execute();
//recuperation des resulats

$clients = $pdoStat->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Maison des Ligues</title>

</head>

<body>
<h1><img class="icone_paramètre" src="./asset/paramètre.png" alt="coney"> Maison des Ligues : Interface admin </h1>
   
    <table id="liste_client">
            <thead>
            <tr>
                <th >Identifiant</th>
                <th >Nom</th>
                <th >Prenom</th>
                <th >Age</th>
                <th >Adresse Mail</th>
            </tr>
            </thead>

         <?php foreach($clients as $clients):
         {
         ?>

         <tbody>
            
                 <td>
                    <a href="supprimer.php?numclients=<?= $clients['Id_client']?>"> Supprimer</a>
                    ou
                    <a href="modif.php?numclients=<?= $clients['Id_client']?>">Modifer</a>
                 </td>
                 <td><?php echo $clients['nom'];?></td>
                 <td><?php echo $clients['prenom'];?></td>
                 <td><?php echo $clients['age'];?></td>
                 <td><?php echo $clients['email'];?></td>
                
        </tbody>
        <?php  
        }
        endforeach;
        ?>
       
    </table>
    </br>
    <td><a class="boutton_ajout" href="ajout.php" style="text-decoration:none" >+ Ajouter un client</a></td>
    
        
</body>
</html>

           