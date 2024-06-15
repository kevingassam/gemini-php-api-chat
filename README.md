# Intégration de l'API Google Gemini avec PHP

Ce script utilise l'API de Google Gemini.

![Logo](img/gemini.png)

## Instructions d'installation

### Prérequis
0. Installez Composer sur votre ordinateur.

### Étapes d'installation

1. À la racine de votre projet, créez un fichier nommé `key.php` et ajoutez-y le contenu suivant :
    ```php
    <?php
    $ApiKey = "Remplacer par votre clé d'API";
    ?>
    ```

2. Si l'installation ne fonctionne pas correctement, ajoutez Composer à votre projet avec la commande suivante :
    ```bash
    composer require google-gemini-php/client
    ```
    
Ces étapes vous permettront de configurer l'API Google Gemini avec succès dans votre projet PHP.