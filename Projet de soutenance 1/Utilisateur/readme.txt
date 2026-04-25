README.txt
===========

Nom du projet :
Application web de gestion d’association

Description générale :
Ce projet consiste en la réalisation d’une application web dédiée à la gestion d’une association.
L’objectif principal est de faciliter l’inscription des membres et de permettre la consultation
des annonces de l’association. L’application est conçue pour être simple, intuitive et accessible
sans authentification dans sa version actuelle.

L’application ne dispose pas encore de système de connexion (login). Les utilisateurs peuvent donc
accéder directement aux fonctionnalités principales sans créer de compte.

--------------------------------------------------

Fonctionnalités principales :
- Inscription des membres via un formulaire en ligne
- Validation des champs du formulaire côté client (JavaScript)
- Enregistrement des données des membres dans une base de données MySQL
- Consultation des annonces sans authentification
- Affichage de la liste des membres enregistrés
- Gestion des membres via phpMyAdmin

--------------------------------------------------

Fonctionnalités administrateur :
- Ajout de nouveaux membres
- Consultation de la liste des membres inscrits

Remarque :
L’administrateur ne peut pas encore ajouter, modifier ou supprimer des annonces depuis l’interface.
Ces fonctionnalités sont prévues dans les versions futures.

--------------------------------------------------

Technologies utilisées :
- HTML : structure des pages web
- CSS : mise en forme et design de l’interface utilisateur
- JavaScript : validation et contrôle des données côté client
- PHP : traitement côté serveur
- MySQL : gestion de la base de données
- phpMyAdmin : administration de la base de données
- PowerDesigner : modélisation UML (diagrammes de cas d’utilisation et de classes)

--------------------------------------------------

Structure des fichiers :
- form.php :
  Contient le formulaire d’inscription des membres. Il permet la saisie des informations
  personnelles nécessaires à l’enregistrement.

- form-script.js :
  Gère la validation du formulaire côté client (vérification des champs, format du téléphone,
  mise en majuscules de certains champs, affichage des messages d’erreur ou de succès).

- form-styles.css :
  Assure la mise en forme et le design du formulaire (responsive design, couleurs, disposition
  des champs, ergonomie).

- basededonne.php :
  Permet la connexion à la base de données MySQL et l’enregistrement des données des membres.

- list.php :
  Affiche la liste des membres enregistrés dans la base de données. Ce fichier permet à
  l’administrateur de consulter les informations des membres.

- page_annonces.php :
  Permet l’affichage des annonces de l’association accessibles à tous les utilisateurs.

--------------------------------------------------

Base de données :
La base de données contient une table dédiée aux membres de l’association. Elle stocke :
- un identifiant unique pour chaque membre
- le nom et le prénom
- la profession
- la date de naissance
- le numéro de téléphone
- l’adresse
- la date de création de l’enregistrement

Cette organisation permet une gestion claire et efficace des informations des membres.

--------------------------------------------------

Limitations actuelles :
- Absence de système d’authentification (login)
- Absence de tableau de bord pour l’administrateur
- Gestion limitée des annonces

--------------------------------------------------

Perspectives d’évolution :
- Mise en place d’un système de connexion pour les membres et l’administrateur
- Création d’un tableau de bord (dashboard) pour l’administrateur afin de centraliser
  la gestion des membres et des annonces
- Ajout de la gestion complète des annonces (ajout, modification, suppression)
- Amélioration de la sécurité et de l’ergonomie de l’application
- Adaptation de l’interface à tous les types d’appareils (responsive design)

--------------------------------------------------

Auteur :
[Cheikh abdoulaye diop]

Année :
2026
