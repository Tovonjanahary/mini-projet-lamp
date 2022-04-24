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
    <script src="article.js" defer></script>
    <title>listes des articles</title>
</head>
<body>
    <?php include("templates/header.php")?>
    <table>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>action</th>
        </tr>
            <?php foreach ($articles as $article) {?>
                <tr>
                    <td><?php echo $article['id'] ?></td>
                    <td><?php echo $article['autheur'] ?></td>
                    <td><?php echo $article['description'] ?></td>
                    <td><button>supprimer</button></td>
                </tr>
            <?php }?>
    </table>
    <?php include("templates/footer.php")?>
	<script src="javascript/article.js"></script>
</body>
</html>