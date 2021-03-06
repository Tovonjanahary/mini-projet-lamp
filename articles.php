<?php 
    include("manage/ConnexionDb.php");

    $sql = "SELECT * FROM article";

    $result = mysqli_query($conn, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    mysqli_close($conn);
    // print_r($articles);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/import.css">
    <script src="javascript/article.js" defer></script>
    <title>listes des articles</title>
</head>
<body>
    <?php include("templates/topbar.php") ?>
    <?php include("templates/header.php")?>
    <div class="articles">
    <h1>liste des articles</h1>
        <?php foreach ($articles as $article) {?>
            <div class="article">
            <p class="auteur">Ecrite par <span><?php echo $article['autheur'] ?></span></p>
            <p><?php echo $article['description'] ?></p>
            <!-- <article id="article"><?php echo $article['corps'] ?></article> -->
            <button class="btn-afficher-plus"><a href="detailsArticle.php?id=<?php echo $article['id'] ?>">lire la suite</a></button>
            </div>       
        <?php }?>
    </div>
    <?php include("templates/footer.php")?>
</body>
</html>