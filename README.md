# AllInBox Email Campaign

AllInBox Email Campaign est une mini application Laravel pour pouvoir créer et récupérer des campagnes email en utilisant une interface simple et intuitive.
Elle utilise l'API de Brevo (anciennement Sendinblue) pour la gestion des campagnes email.

# Lancement du projet

1. Clonez le dépôt:
    ```bash
    git clone <URL_DU_DEPOT>
     cd AllInBox-EmailCampaign
    ```
2. Installez les dépendances:
    ```bash
    composer install
    npm install
    ```
3. Configurez votre environnement:

    ```bash
     cp .env.example .env
    ```

4. Générez la clé de l'application:
    ```bash
    php artisan key:generate
    ```
5. Lancer le serveur de développement:
    ```bash
    php artisan serve
    ```

## Fonctionnalités

-   **Création de Campagnes**: Créez des campagnes email avec un titre, sujet et un contenu.
-   **Liste des Campagnes**: Affichez une liste de toutes les campagnes créées.

## Routes Disponibles

-   `GET /email-campaign`: Affiche la liste des campagnes.
-   `GET /email-campaign/create`: Affiche le formulaire de création de campagne.
-   `POST /email-campaign/store`: Soumet le formulaire de création de campagne.

## Technologies Utilisées

-   **Laravel**: Framework PHP pour le backend.
-   **Blade**: Moteur de templates pour les vues.
-   **Tailwind CSS**: Framework CSS pour le design réactif.
-   **Bladewind**: Composants UI pour Blade et Tailwind CSS.
-   **Brevo API**: Intégration pour l'envoi d'emails.

## Sources

-   [Laravel](https://laravel.com/)
-   [Tailwind CSS](https://tailwindcss.com/)
-   [Bladewind](https://bladewindui.com/)
-   [Brevo API](https://www.brevo.com/fr/)
