# 🛒 Site Marchand avec Intégration Spotify et Paiement Stripe

## 📌 Description

Ce projet est un site marchand qui utilise les données des comptes **Spotify** des utilisateurs pour recommander des produits en fonction de leurs préférences musicales.  
Il intègre un système de paiement sécurisé via **Stripe** et propose des fonctionnalités avancées telles que :

- 🔐 Authentification sécurisée avec **Symfony Security**  
- 📊 Gestion des utilisateurs et des produits avec **EasyAdmin**  
- 📧 Envoi d'e-mails via **Mailtrap**  

---

## ✅ Prérequis

Avant de commencer, assurez-vous d'avoir installé les outils suivants :

✔ **PHP** (>= 8.0)  
✔ **Composer**  
✔ **Symfony CLI**  
✔ **MySQL**  

---

## 🛠 Initialisation de la base de données

Exécutez les commandes suivantes avant le premier démarrage :

```bash
composer require symfony/mailer
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate


