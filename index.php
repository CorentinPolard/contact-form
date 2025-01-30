<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        form {
            display: flex;
            flex-flow: column nowrap;
            align-items: start;
            width: 350px;
        }

        label {
            width: 80px;
        }
        
        input, textarea {
            margin-bottom: 10px;
            width: 250px;
            border-radius: 10px;
        }

        textarea {
            vertical-align: top;
            height: 100px;
        } 

        .submit {
            width: 335px;
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulaire de contact</h1>
        <form action="" method="post">
            <div>
                <label for="nom">Nom :</label>
                <input id="nom" name="nom" type="text" required/>
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
            <div  class="submit">
                <input type="submit" value="Envoyer"/>
            </div>
        </form>

        <?php 
        if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['objet']) && isset($_POST['message'])) {
            var_dump($_POST);
        }?>

    </div>
</body>
</html>