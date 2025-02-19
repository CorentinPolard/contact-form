<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
    <main>
        <h1>Formulaire de contact</h1>
        <form action="./traitement.php" method="post">
            <div>
                <label for="nom">Nom :</label>
                <input id="nom" name="nom" type="text" required/>
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input id="prenom" name="prenom" type="text" required/>
            </div>
            <div>
                <label for="mail">E-mail :</label>
                <input id="mail" name="mail" type="email" required/>
            </div>
            <div>
                <label for="objet">Objet :</label>
                <input id="objet" name="objet" type="text" required/>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="message" type="text-area" required></textarea>
            </div>
            <input type="submit" value="Envoyer"/>
        </form>

        <?php 
        if (isset($_GET['isValid'])) {
            if ($_GET['isValid'] == true): ?>
                <p>Le message a bien été envoyé.</p>
            <?php else: ?>
                <p>Une erreur est survenue, le message ne s'est pas envoyé.</p>
            <?php endif; 
        }
        ?>
    </main>
</body>
</html>