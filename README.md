# contact-form

Ce projet est un formulaire de contact facilement réutilisable et intégrable dans différents projets web. 
Le formulaire permet aux utilisateurs d'envoyer leur message sous forme de mail via un formulaire web. 
Il comprend des champs pour le nom, l'adresse e-mail, le sujet du message et le message.
Ce projet utilise PHPMailer et des variables d'environnement à configurer pour fonctionner.


Pour réutiliser le projet : 

1. Cloner le projet avec git clone

2. Installer les bibliothèques en entrant "composer install" dans le terminal.

3. Configurer les 6 variables d'environnement dans un fichier .env :
    - Une variable MAIL_HOST     : Spécifie le serveur SMTP que PHPMailer doit utiliser pour envoyer des emails. 
    - Une variable MAIL_USER     : Contient le nom d'utilisateur pour se connecter au serveur SMTP.
    - Une variable MAIL_PASSWORD : Contient le mot de passe associé pour se connecter au serveur SMTP.
    - Une variable MAIL_PORT     : Spécifie le port à utiliser pour la connexion SMTP.
    - Une variable MAIL_TO       : Spécifie l'adresse mail du destinaire.
    - Une variable MAIL_NAME_TO  : Spécifie le nom du destinaire.
