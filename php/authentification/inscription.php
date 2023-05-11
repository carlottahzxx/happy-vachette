
<header>

</header>
<div class="form-popup" id="insForm">
    <form class="form-container" method="post"> 
            <a class = "croix" href ="index.php"> <img src="../../../images/traverser.png" /></a>
        <div class="form-title">Inscription</div>
        <?php include("errors.php");?>
        <input type="text" id="firstName" placeholder="Votre prenom" name="name" required />
        <input type="text" id="name" placeholder="Votre nom" name="familyName" required />
        <input type="text" id="insEmail" placeholder="Votre Email" name="email" required />
        <input type="password" id="insPsw" placeholder="Votre Mot de passe" name="psw" required/> 
        <input type="password" id="confpsw" placeholder="Confirmer le mot de passe" name="confpsw" required/> 
        <input type="checkbox" id="cgu" required/>J'accepte les<a href="../pages/general/CGU.php">CGU</a>
        <button type="submit" class="btn" name="register">S inscrire</button>

        Déjà un compte ? 
        <a class = "inscription"  onclick="openConForm()">Connectez-vous</a>

    </form> 
</div>