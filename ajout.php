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

<body class="formulaire_creation"></br>

  <h2><a class="titre_redirection_accueil" href="index.php" style="text-decoration:none"> <span class="crochet_haut">&#9627;</span> </br></br>VOIR LA LISTE DES UTILISATEURS ></a></h2>
  <section>
   <form id="myform" action="maj_ajout_client.php" method ="post">
   <!-- <input type="hidden" name="numclients" value="<?= $clients['Id_client']?>">  -->

           <label class="nom_label" for="nom">Nom :</label>
           <input class="nom_input" id="nom" type="text" name="nom" autofocus>
       
           <label class="prenom_label" for="prenom">Prenom :</label>
           <input class="prenom_input" id="prenom" type="text" name="prenom">
      
           <label class="age_label" for="age">Age :</label>
           <input class="age_input" id="age" type="text" name="age">
        
           <label class="email_label" for="email">Adresse Mail :</label>
           <input class="email_input" id="email" type="text" name="email">
  </section>
         
        </br><a><input class="bouton_creation"  type="submit" value="Créer &#9998;"></a></br></br>
        <span class="crochet_bas" style="color:#00614E">&#9631;</span>
    </form>
    
</body>
</html>
