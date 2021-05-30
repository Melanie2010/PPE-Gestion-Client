<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maison des Ligues</title>

</head>
<body>
<br><br><br> <h8 ><em>Ajouter un Client</em></h8></br></br></br>
   <form id="myform" action="maj_ajout_client.php" method ="post">
   <!-- <input type="hidden" name="numclients" value="<?= $clients['Id_client']?>">  -->
      
        <div>
           <label for="nom">Nom</label>
           <input id="nom" type="text" name="nom">
        </div>
        <div>
           <label for="prenom">Prenom</label>
           <input id="prenom" type="text" name="prenom">
        </div>
        <div>
           <label for="age">Age</label>
           <input id="age" type="text" name="age">
        </div>
        <div>
           <label for="email">Adresse Mail</label>

           <input id="email" type="text" name="email">
        </div>
        
        <div>
        <input type="submit" value="Enregistrer">
        </div>
    
    </form>
    
</body>
</html>


