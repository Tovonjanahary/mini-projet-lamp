<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="app.js" defer></script>
    <title>Ajouter un article</title>
</head>
<body>
    <?php include("templates/header.php") ?>
    <div class="signin">
        <form action="signin.php" method="post">
            <div class="form-group">
                <label for="autheur">Autheur</label>
                <input type="text" id="autheur" name="autheur">
            </div>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="corps">Article</label>
                <input type="textarea" id="corps" name="corps">
            </div>
            <div class="btn-signin">
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</body>
</html>