# Exercice 4: Utilisation des volumes

## Exigences

1. Ajoutez un volume pour le service `web` pour monter le dossier `html` sur le conteneur Nginx.
2. Créez un fichier `welcome.html` (voir annexes) dans le dossier `html` monté et vérifiez qu'il est accessible depuis le conteneur Nginx.
3. Utilisez un volume **nommé** (type=volume) pour le service database afin de persister les données de la base de données. (jouez directement avec des requêtes SQL dans le conteneur)
4. Vérifiez que les données de la base de données persistent même après l'arrêt et le redémarrage des conteneurs.

## Annexes

### Contenu du fichier welcome.html

```html
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Docker Compose Exercise</title>
    </head>
    <body>
        <h1>Hello, Docker Compose!</h1>
    </body>
</html>
``````
