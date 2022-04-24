<?php 
    include("manage/ConnexionDb.php");
    if(isset($_GET['id'])) {
       $id = mysqli_real_escape_string($conn, $_GET['id']);

       $sql = "SELECT * FROM article WHERE id=$id";

       $results = mysqli_query($conn, $sql);

       $article = mysqli_fetch_assoc($results);
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
        <?php if($article):?>
            <div class="singleArticle">
                <p class="auteur">ecrite par: <span><?php echo $article['autheur'] ?></span></p> 
                <h5>intitule: <?php echo $article['titre'] ?> </h5>
                <p> <?php echo $article['description'] ?></p> 
                <article><?php echo $article['corps'] ?></article> 
            </div>
        <?php endif; ?>
    </div>
    <?php include("templates/footer.php")?>
	<script src="javascript/app.js"></script>
</body>
</html>