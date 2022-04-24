<?php 
    session_start();
?>

<nav>
    <div class="logo">
        <img src="assets/images/hinata.jpg" alt="logo">
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="articles.php">Articles</a></li>

        <?php if(isset($_SESSION['nom'])):?>
            <li><a href="ajouterArticle.php">Publier</a></li>
        <?php endif; ?>

        <li><a href="#">Aide</a></li>
        <li class="authentification">
            
        </li>
        <?php if(isset($_SESSION['nom'])):?>
        <div id="dropdown"><?php echo $_SESSION['nom'] ?>
                <div class="user">
                <li class="deconnexion"><a href="profile.php?id=<?php echo $_SESSION['id']?>">Profile</a></li>
                <li class="deconnexion" onclick="confirm('se deconnecter ?')"><a href="deconnexion.php">deconnecter</a></li>
                </div>          
        </div>
            
        <?php else: ?>
            <li>
                <button class="signin"><a href="signin.php">Se connecter</a></button>
            </li>
            <li>
                <button class="signup"><a href="signup.php">S'inscrire</a></button>
            </li>
        <?php endif; ?>
    </ul>
    <div id="hamburger">
        <div class="line1"></div>
        <div class="line1"></div>
        <div class="line1"></div>
    </div>
</nav>
