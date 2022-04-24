<?php 
    include("manage/ConnexionDb.php");
    $errors = array('autheur' =>'', 'titre' => '', 'description' =>'', 'corps' => '' );
    session_start();
    if(isset($_POST['submit'])) {
        if(empty($_POST['autheur'])) {
            $errors['autheur'] = "autheur requis";
        } 
        if(empty($_POST['titre'])){
            $errors['titre'] = "titre requis";    
        }
        if(empty($_POST['description'])){
            $errors['description'] = "description requis";
        }
        if(empty($_POST['corps'])){
            $errors['corps'] = "corps requis";
        }
        
        if(array_filter($errors)) {
            // afficher 'erreur

        } else {
            $autheur = mysqli_real_escape_string($conn, $_POST['autheur']);
            $titre = mysqli_real_escape_string($conn, $_POST['titre']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $corps = mysqli_real_escape_string($conn, $_POST['corps']);

            $sql = "INSERT INTO article(autheur,titre,description,corps) VALUES ('$autheur','$titre','$description','$corps')";
            if(mysqli_query($conn, $sql)) {
                header('Location:index.php');
            } else {
                echo 'query error:' . mysqli_error($conn);
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/import.css">
    <!-- <script src="javascript/article.js" defer></script> -->
    <title>Ajouter un article</title>
</head>
<body>
    <?php include("templates/topbar.php") ?>
    <?php include("templates/header.php") ?>
    <div class="signin">
        <form action="ajouterArticle.php" method="POST" id="ajouterArticle">
            <div id="errorMessages"></div>
            <div class="form-group">
                <label for="autheur">Auteur</label>
                <input type="text" id="autheur" name="autheur" value="<?php echo $_SESSION['nom']?>">
                <span class="error"><?php echo $errors['autheur']?></span>
            </div>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre">
                <span class="error"><?php echo $errors['titre']?></span>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" id="description" name="description">
                <span class="error"><?php echo $errors['description']?></span>
            </div>
            <div class="form-group">
                <label for="corps">Article</label>
                <input type="textarea" id="corps" name="corps">
                <span class="error"><?php echo $errors['corps']?></span>
            </div>
            <div class="btn-signin">
                <button type="submit" name="submit">Enregistrer</button>
            </div>
        </form>
    </div>
    <?php include("templates/footer.php")?>
</body>
</html>