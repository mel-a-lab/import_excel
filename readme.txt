# Nom du Projet Symfony

Bienvenue dans ce projet Symfony. Ce document README vous aidera à configurer et démarrer ce projet.

## Prérequis

- PHP 7.4 ou supérieur
- Symfony 5.4

## Installation

1. Clonez ce dépôt sur votre machine locale.
2. Naviguez vers le répertoire du projet.

    ```
    cd /chemin/vers/votre/projet
    ```

3. Installez les dépendances du projet en utilisant composer :

    ```
    composer install
    ```

4. Configurez le fichier `.env.local` pour connecter le projet à une base de données. Ce fichier n'est pas suivi par git, vous devez donc le créer manuellement. Vous pouvez utiliser le fichier `.env` comme modèle. Il pourrait ressembler à quelque chose comme ça :

    ```
    # .env.local
    DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"
    ```

    Remplacez `db_user`, `db_password` et `db_name` par vos informations de connexion à la base de données.

## Accès au Projet

Pour accéder au projet, veuillez consulter l'URL suivante: `https://127.0.0.1:8000/`

## Exécution de l'application

Pour exécuter l'application en local, vous pouvez utiliser le serveur web intégré à Symfony. Pour le démarrer, exécutez la commande suivante dans le terminal :

Ensuite, ouvrez votre navigateur web et accédez à `http://localhost:8000`.

## Autres informations

Pour plus d'informations sur la configuration de Symfony, vous pouvez consulter [la documentation officielle de Symfony](https://symfony.com/doc/current/configuration.html).
