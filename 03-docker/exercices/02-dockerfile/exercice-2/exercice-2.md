# Construire votre Dockerfile

Dans cet exercice vous avez un dossier `webapp` et un `database` et vous devez construire leur Dockerfile et le fichier `compose.yaml`.

## Structure du projet

### Base de données

Une base de données MySQL consistant en une table avec quelques films (voir `database/database.sql`).

### Application web

L'application web récupère les films de la base de données et les affiche dans une page HTML. Cette application web est construite en utilisant Flask (un Microframework Python).

## Exercice

## 1. Créer les Dockerfiles

Ici vous devez créer les Dockerfiles de la `database` et de la `webapp`.

## 2. Exécuter avec Docker Compose
Pour lancer les conteneurs, il faut exécuter 3 commandes. Il serait plus facile de n'avoir à exécuter qu'une seule commande. Nous pouvons y parvenir en utilisant Docker Compose.

### Création d'un compose.yaml
Créer un fichier docker-compose.yml pour exécuter l'application web et la base de données. Des informations sur la façon de créer un tel fichier peuvent être trouvées ici :
* https://docs.docker.com/compose/overview/
* https://docs.docker.com/compose/compose-file/

Une fois que vous avez créé le fichier docker-compose.yml, exécutez :

```bash
docker-compose up
```
