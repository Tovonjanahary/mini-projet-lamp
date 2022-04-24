<?php 
    include("manage/ConnexionDb.php");
    $errors = array('email' =>'','password' => '','cf_password' =>'','cf_email' => '');
    session_start();
    if(isset($_POST['submit'])) {
        if(empty($_POST['email'])) {
            $errors['email'] = "email requis";
        }
        if(empty($_POST['password'])){
            $errors['password'] = "mot de passe requis";
        }

        if(array_filter($errors)) {
            // afficher 'erreur

        } else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $sql = "SELECT * FROM utilisateur WHERE email='$email'";
            $results = mysqli_query($conn, $sql);
                // print_r($results);
            if(mysqli_num_rows($results) === 1 ) {
                $row = mysqli_fetch_assoc($results);
                $comparePassword = password_verify($password, $row['password']);
                if($comparePassword) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['nom'] = $row['nom'];
                    $_SESSION['id'] = $row['id'];
                    header('Location:index.php');
                } else {
                    $errors['cf_password'] = "mot de passe incorrecte";
                }
            } else {
                $errors['cf_email'] = "verifiez bien votre email";
            }
            // if(mysqli_query($conn, $sql)) {
            //     header('Location:index.php');
            // } else {
            //     echo 'query error:' . mysqli_error($conn);
            // }
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
	<script src="javascript/app.js"></script>
    <title>authentification</title>
</head>
<body>
    <?php include("templates/topbar.php") ?>
    <?php include("templates/header.php") ?>
    <div class="signin">
        <form action="signin.php" method="post">
            <h5>connecter vous maintenant :) !!!</h5>
            <span class="error" style="color:crimson; font-size:0.9em"><?php echo $errors['cf_password']?></span>
            <span class="error"style="color:crimson; font-size:0.9em"><?php echo $errors['cf_email']?></span>
            <div class="form-group">
                <label for="email">Entrer votre Email</label>
                <input type="email" id="email" name="email">
                <span class="error"><?php echo $errors['email']?></span>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password">
                <span class="error"><?php echo $errors['password']?></span>
            </div>
            <div class="btn-signin">
                <button type="submit" name="submit">Connexion</button>
            </div>
            <p>vous n'avez pas de compte? <span><a href="signup.php">inscrivez-vous </a></span> maintenant</p>
        </form>
    </div>
    <?php include("templates/footer.php")?>
</body>
</html>