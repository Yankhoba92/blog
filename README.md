# Prise de notes

## Création d'un projet

```bash
symfony new blog --webapp
```

## Lancement et arrêt du serveur

```bash
cd blog
symfony serve -d # -d pour lancer en arrière plan
symfony server:stop
```

## Configuration de la base de données

Dans le fichier `.env`, on modifie les informations de connexion à la base de données.

## Configuration du serveur de mail

Avec mailtrap, un service gratuit de test de mail qui n'a aucun lien avec Symfony. On a mis en place la ligne de configuration dans un fichier `.env.local` pour ne pas que les informations de connexion à mailtrap se retrouvent sur le dépôt github.

## Permière commande avec symfony-cli

La base c'est :

- être dans le dossier du projet avec son terminal
- utiliser `symfony console` pour lancer une commande
- l'autre alternative est `php bin/console`

Afin de créer notre premier controlleur, nous avons tapé dans le terminal la commande suivante :

```bash
symfony console make:controller
```
Suite à cela un assistant nous demande le nom du controlleur (classe), nous avons choisi `PageController`.

Le résultat a été la création d'un fichier `src/Controller/PageController.php` et d'un fichier `templates/page/index.html.twig`. Cette page est accessible à l'adresse `http://127.0.0.1:8000/page`.

Pour en faire notre page d'accueil, nous avons modifié le chemin de la route dans le fichier du controlleur.

```php
// Avant
#[Route('/page', name: 'app_page')]

// Après
#[Route('/', name: 'app_page')]
```

## Les extensions dans VSCode

Pour travailler plus facilement avec Symfony, il est conseillé d'installer les extensions suivantes :

- PHP Intelephense
- Twig Language 2
- Twig code snippets
- Namespace Resolver
- Prettier

## Notre première entité

Dans ce projet de blog, nous avons besoin d'une entité `Post` qui aura les propriétés suivantes :

- id
- title
- slug
- content
- image
- created_at
- updated_at

Pour créer cette entité, nous avons utilisé la commande suivante :

```bash
symfony console make:entity
```

Ensuite, nous avons répondu aux questions de l'assistant pas à pas avec les information correspondante à nos besoins.

Lorsque qu'on a terminé avec la création de notre entité et cela sera pareil pour les autres, on effectue une migration (représentation en base de données de notre entité) avec la commande suivante :

```bash
symfony console make:migration
```

Puis on exécute la migration avec la commande suivante :

```bash
symfony console doctrine:migrations:migrate
```