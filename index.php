<?php 
    include("manage/ConnexionDb.php");
    $sql = "SELECT * FROM article ORDER BY id DESC LIMIT 2 ";

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
    <title>page d'accueil</title>
</head>
<body>
    <?php include("templates/topbar.php") ?>
    <?php include("templates/header.php")?>
    <div class="jumbotron">
        <div class="btn-jumbotron">
            <div>
                <button class="btn1">Naviguez</button>
                <button class="btn2">Savoir plus</button>           
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ex nemo obcaecati quod alias eaque accusantium .</p>
        </div>
    </div>
    <div class="articles">
    <h1>Article recents</h1>
        <?php foreach ($articles as $article) {?>
            <div class="article">
                <p class="auteur">Ecrite par <?php echo $article['autheur'] ?></p>
                <p><?php echo $article['description'] ?></p>
                <button class="btn-afficher-plus"><a href="detailsArticle.php?id=<?php echo $article['id'] ?>">lire la suite</a></button>
            </div>   
        <?php }?>
    </div>
    <?php include("templates/footer.php")?>
	<script src="javascript/app.js"></script>
</body>
</html>