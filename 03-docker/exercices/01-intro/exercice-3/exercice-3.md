# Exercice 3: Définir des variables d'environnement

## Exigences

1. Ajoutez une variable d'environnement `POSTGRES_USER=example_user`, `POSTGRES_PASSWORD=example_password`, `POSTGRES_DB=example_db` dans le service `database` pour définir respectivement un utilisateur, son mot de passe et la base de données pour le service PostgreSQL.
2. Utilisez la syntaxe `${}` pour définir une variable d'environnement pour le port du service `web`.
3. Assurez-vous que ces variables sont accessibles à l'intérieur des conteneurs correspondants.
4. Exécutez `docker-compose up` et vérifiez que les variables sont correctement prises en compte.

> _Indice:_ pour afficher une variable d'env vous pouvez exécuter `echo $NOMDEVARIABLE` dans le conteneur
