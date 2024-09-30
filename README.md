Gestion de Cocktails
Description
L'application Gestion de Cocktails permet aux utilisateurs de gérer une base de données de cocktails. Elle permet d'ajouter, consulter, modifier et supprimer des cocktails. Cette application utilise le framework Laravel pour le back-end, ainsi qu'une interface utilisateur avec Blade pour afficher et interagir avec les cocktails.

Fonctionnalités
Liste de cocktails avec nom, image et description
Ajout d'un nouveau cocktail
Modification des informations d'un cocktail existant
Suppression d'un cocktail
Validation des données d'entrée (nom, URL de l'image, description)
Prérequis
Avant de commencer, assurez-vous d'avoir installé les outils suivants sur votre machine :

PHP (version >= 7.4)
Composer
MySQL ou une autre base de données compatible
Node.js et npm
Installation
Suivez les étapes ci-dessous pour installer et configurer le projet sur votre machine locale.

1. Clonez le projet
Clonez ce dépôt sur votre machine locale :
git clone https://github.com/boussomdn/Gestion_Cocktails.git

2. Accédez au répertoire du projet:
cd gestion-cocktails

3. Installez les dépendances PHP avec Composer
composer install

4. Installez les dépendances Node.js et compilez les assets
npm install
npm run dev

5. Configurez l'environnement
Dupliquez le fichier .env.example et renommez-le .env :
cp .env.example .env

Modifiez le fichier .env pour configurer les détails de connexion à votre base de données :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

6. Générer la clé de l'application:
php artisan key:generate

7. Créez la base de données
Créez une base de données MySQL et configurez-la dans le fichier .env.
Ensuite, exécutez les migrations pour créer les tables nécessaires dans la base de données :
php artisan migrate

8. Démarrez le serveur local
Lancez le serveur de développement :
php artisan serve

Accédez à l'application dans votre navigateur à l'URL suivante :
http://localhost:8000

Utilisation
Ajouter un Cocktail:
Cliquez sur "Ajouter un Cocktail" sur la page d'accueil.
Remplissez le formulaire avec le nom, l'URL de l'image, et la description du cocktail.
Cliquez sur "Ajouter" pour enregistrer le cocktail.

Modifier un Cocktail:
Sur la page de liste des cocktails, cliquez sur le bouton "Modifier" à côté d'un cocktail.
Modifiez les informations du cocktail dans le formulaire.
Cliquez sur "Modifier" pour enregistrer les modifications.

Supprimer un Cocktail:
Sur la page de liste des cocktails, cliquez sur le bouton "Supprimer" à côté d'un cocktail.
Confirmez la suppression du cocktail.