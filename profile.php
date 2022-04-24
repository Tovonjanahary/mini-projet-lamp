<?php 
    include("manage/ConnexionDb.php");
    if(isset($_GET['id'])) {
       $id = mysqli_real_escape_string($conn, $_GET['id']);

       $sql = "SELECT * FROM utilisateur WHERE id=$id";

       $results = mysqli_query($conn, $sql);

       $user = mysqli_fetch_assoc($results);
       mysqli_free_result($results);
       mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/import.css">
    <title>page d'accueil</title>
</head>
<body>
    <?php include("templates/topbar.php") ?>
    <?php include("templates/header.php")?>
    <div>
        <?php if($user):?>
            <div class="singleArticle">
                <p class="auteur">Nom: <span><?php echo $user['nom'] ?></span></p> 
                <p class="auteur">Prenom: <span><?php echo $user['prenom'] ?></span></p> 
                <h5>email: <?php echo $user['email'] ?> </h5>
                <p> adresse: <?php echo $user['adresse'] ?></p> 
                <article>Telephone: <?php echo $user['telephone'] ?></article> 
            </div>
        <?php endif; ?>
    </div>
    <?php include("templates/footer.php")?>
	<script src="javascript/app.js"></script>
</body>
</html>