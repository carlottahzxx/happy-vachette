
<header>

</header>
<div class="form-popup" id="insForm">
    <form action="../accueil/index.php" class="form-container" method="post" id="insForm"> 
            <a class = "croix" onclick='reset()'> <img src="../../images/traverser.png" /></a>
        <div class="form-title">Inscription</div>
        <p class="p-error" id='errorText'></p>
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