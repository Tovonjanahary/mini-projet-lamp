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
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>listes des articles</title>
</head>
<body>
    <?php include("templates/header.php")?>
    <h1>liste des articles</h1>
    <?php foreach ($articles as $article) {?>
        <p>Ecrite par<?php echo $article['autheur'] ?></p>
        <p><?php echo $article['description'] ?></p>
    <?php }?>
	<script src="app.js"></script>
</body>
</html>