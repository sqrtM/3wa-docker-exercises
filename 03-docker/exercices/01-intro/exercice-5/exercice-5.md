# Exercice 5: Réseaux personnalisés

## Exigences

1. Créez un réseau personnalisé dans votre fichier `compose.yaml`.
2. Ajoutez les services `web` et `database` à ce réseau personnalisé.
3. Utilisez les noms de service comme hôtes pour la connexion entre les services.
4. Vérifiez que les services peuvent se connecter entre eux en utilisant les noms de service.

> _Indice:_ Pour vérifier que les services sont bien connecter, depuis le conteneur Nginx vous pouvez exécuter la commande suivante `ping database` ou `nc -zv database 5432`
