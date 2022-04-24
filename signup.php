<?php 
    include("manage/ConnexionDb.php");
    $errors = array('nom' =>'', 'prenom' => '', 'email' =>'', 'adresse' => '', 'telephone' => '', 'password' => '' );
    session_start();
    if(isset($_POST['submit'])) {
        if(empty($_POST['nom'])) {
            $errors['nom'] = "nom requis";
        } 
        if(empty($_POST['prenom'])){
            $errors['prenom'] = "prenom requis";
        }
        if(empty($_POST['email'])){
            $errors['email'] = "email requis";
        }
        if(empty($_POST['adresse'])){
            $errors['adresse'] = "adresse requis";
        }
        if(empty($_POST['telephone'])){
            $errors['telephone'] = "telephone requis";
        }
        if(empty($_POST['password'])){
            $errors['password'] = "password requis";
        }

        if(array_filter($errors)) {
            // afficher 'erreur

        } else {
            $nom = mysqli_real_escape_string($conn, $_POST['nom']);
            $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
            $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO utilisateur(nom,prenom,email,adresse,telephone,password) VALUES ('$nom','$prenom','$email','$adresse','$telephone','$password_hash')";
            if(mysqli_query($conn, $sql)) {
                $_SESSION['email'] = $email;
                $_SESSION['nom'] = $nom;
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
	<script src="javascript/utilisateur.js" defer></script>
    <title>Enregistrement de compte</title>
</head>
<body>
    <?php include("templates/topbar.php") ?>
    <?php include("templates/header.php") ?>
    <div class="signin">
        <form action="signup.php" method="POST" id="formulaire">
            <div id="errors"></div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">
                <span class="error"><?php echo $errors['nom']?></span>
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom</label>
                <input type="text" id="Prenom" name="prenom">
                <span class="error"><?php echo $errors['prenom']?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
                <span class="error"><?php echo $errors['email']?></span>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse">
                <span class="error"><?php echo $errors['adresse']?></span>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="number" id="telephone" name="telephone">
                <span class="error"><?php echo $errors['telephone']?></span>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password">
                <span class="error"><?php echo $errors['password']?></span>
            </div>
            <div class="form-group">
                <label for="cf_password">confirmer votre mot de passe</label>
                <input type="password" id="cf_password" name="cf_password">
            </div>
            <div class="btn-signin">
                <button type="submit" name="submit">Inscription</button>
            </div>
            <p>vous avez deja un compte? <span><a href="index.php">connectez-vous</a></span> maintenant</p>
        </form>
    </div>
    <?php include("templates/footer.php")?>
</body>
</html>