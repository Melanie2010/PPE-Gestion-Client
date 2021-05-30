# PPE Gestion Client

Ce PPE a pour but de réaliser une interface admin gestion clients. Il est composé de différentes parties.

La 1ère partie a pour but de permettre aux administrateurs des Maisons des ligues, de recenser leurs clients à travers une interface admin. Cela permet d’ajouter, de modifier ou de supprimer un client. 

![Ajouter_un_client](https://user-images.githubusercontent.com/65156750/120106143-38430380-c15c-11eb-9f0c-8e48a7211d9f.png)

La seconde partie consiste à créer toute la partie gestion. Pour les enregistrements à publier, il nous faudra créer une page contenant un formulaire constitué des 4 champs suivants : Nom, Prénom, Age et adresse mail. Tous les champs sont obligatoires. Dans le cas où l’administrateur ne renseigne pas un champ, il faut afficher un warning.

Base de données

La base de données est nommée « client_ligue ». Elle contient une table nommée « clients », qui contient les champs suivants : 
- id_client : int
- nom : varchar
- prenom : varchar
- age : int
- email : varchar
- 

Aspect technique

- Les technologies autorisées sont : html5 css3 et php orienté objet.

- Police de caractères : ‘Open Sans’, sans-serif.

- Iconographies obligatoires:

Couleur des boutons : #09599A(blue), #00614E(vert) et #d63031(rouge).
La couleur des thèmes doivent être indexée dans des variables css.
Utilisez Visual Studio Code et phpMyAdmin pour la bdd.

- Le code HTML généré doit être valide selon les normes du W3C et tester également pour les spécificités de la WAI et du WCAG (accessibilité).

- Votre rendu sera publié sur un dépôt Github. Celui-ci doit avoir une structure logique, contenir un readme.md avec présentation du projet et un fichier « .gitignore » si besoin.

- L’ergonomie et la finition des interfaces seront prises en compte dans la notation, tout comme la propreté et la clarté de votre code et du nommage des éléments.
