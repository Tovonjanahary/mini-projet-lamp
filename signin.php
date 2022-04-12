<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="app.js" defer></script>
    <title>authentification</title>
</head>
<body>
    <?php include("templates/header.php") ?>
    <div class="signin">
        <form action="signin.php">
            <h5>connecter vous maintenant :) !!!</h5>
            <div class="form-group">
                <label for="nom">Entrer votre Email</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="text" id="password" name="password">
            </div>
            <div class="btn-signin">
                <button>Connexion</button>
            </div>
            <p>vous n'avez pas de compte? <span><a href="signup.php">inscrivez-vous </a></span> maintenant</p>
        </form>
    </div>
</body>
</html>