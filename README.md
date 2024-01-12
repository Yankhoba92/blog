# Prise de note

## Création d'un projet

``` bash
symfony new blog --webapp

```

## Lancement et arrêt du serveur

```bash
cd blog # -d pour lancer en arriére plan
symfony serve - d
symfony serve:stop

```

## Configuration de la base de données

Dans le fichier `.env`, on modifie les informations de connexion à la baser de donnés.

## Configuration du serveur mail

Avec mailtrap, un setrvice gratuit de test de mail qui n'a aucun lien avec symfony.
On a mis en place la ligne de configuration dans un fichier `.env.local` pour ne pas que les in formations de connexion à mlailtrap se retrouvent dans le dépôt github.

## Premiére commande avec symfony-cli

La base c'est : 

- être dans le dossier du projet avec son terminal
- utiliser `symfony console` pour lancer une commande
- l'autre alternative est `php bin\console`

Afin de créer notre premier controlleur, nous 

```bash
symfony console make:controller

```

Suite à cela un assistant nous demande le nom du controlleur (classe), nous avions choisi `PageController`.

Le résultat a été la création d'un fichier `src/controller/pageController.php` et d'un fichier `templates/page/index.html.twig`.
cette page est accesible à l'adresse `http//127.0.0.1:8000/page`.

Pour en faire notre page d'accueil, nous avons modifié le chemin de la route dans le fichier du controlleur.

```php
// Avant
#[Route('/page' name:'app_page')]

// Aprés
#[Route('/' name:'app_page')]

```

## Les extensions dans VScode

Pour travailler plus facilement avec symfony, il est conseillé d'installer les extensions suivantes :

- PHP Intelephense
- Twig Langage 2 
- Namespace Resolver