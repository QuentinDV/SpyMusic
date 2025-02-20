Site Marchand avec Intégration Spotify et Paiement Stripe

Description

Ce projet est un site marchand qui utilise les données des comptes Spotify des utilisateurs afin de leur recommander des produits en fonction de leurs préférences musicales. Il intègre également un système de paiement sécurisé via Stripe et propose des fonctionnalités avancées telles que l'authentification sécurisée avec Symfony Security, la gestion des utilisateurs et des produits avec EasyAdmin, ainsi que l'envoi d'e-mails via Mailtrap.

Prérequis

Avant de commencer, assurez-vous d'avoir installé les outils suivants :

PHP (>= 8.0)

Composer

Symfony CLI

MySQL

tout d'abord : Initialiser la base de données(mysql)

Exécutez les commandes suivantes pour créer et migrer la base de données :

php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate

Démarrer le serveur Symfony:

symfony server:start

Stopper le serveur Symfony:

symfony server:stop

Technologies utilisées

PHP 8+

Symfony 6

Doctrine ORM (Gestion de la base de données)

Stripe (Paiement en ligne sécurisé)

Spotify API (Recommandations personnalisées)

Symfony Security (Authentification et gestion des utilisateurs)

EasyAdmin (Back-office pour la gestion des produits et utilisateurs)

Mailtrap (Envoi d'e-mails en développement)

Fonctionnalités

Connexion avec un compte Spotify pour récupérer les préférences musicales.

Recommandations de produits basées sur l'activité Spotify.

Système d'authentification et gestion des utilisateurs.

Intégration du paiement sécurisé avec Stripe.

Tableau de bord administrateur avec EasyAdmin.

Envoi de notifications par e-mail via Mailtrap.
