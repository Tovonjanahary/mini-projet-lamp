<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="app.js" defer></script>
    <title>Enregistrement de compte</title>
</head>
<body>
    <?php include("templates/header.php") ?>
    <div class="signin">
        <form action="signin.php">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom</label>
                <input type="text" id="Prenom" name="Prenom">
            </div>
            <div class="form-group">
                <label for="nom">Email</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="Adresse">Adresse</label>
                <input type="text" id="Adresse" name="Adresse">
            </div>
            <div class="form-group">
                <label for="Telephone">Telephone</label>
                <input type="number" id="Telephone" name="Telephone">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="text" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password">confirmer votre mot de passe</label>
                <input type="text" id="password" name="password">
            </div>
            <div class="btn-signin">
                <button>Inscription</button>
            </div>
            <p>vous avez deja un compte? <span><a href="signin.php">se connecter</a></span> maintenant</p>
        </form>
    </div>
</body>
</html>