

<div class="form-popup" id="conForm">
    <form action="../accueil/index.php" class="form-container" method="post">
            <a class = "croix"  onclick='reset()'> <img src="../../images/traverser.png" /></a>
            <div class="form-title">Connexion</div>
            <p class='p-error' id='errorConText'></p>
        <input type="email" id="conEmail" placeholder="Votre Email" name="email" required />
        <input type="password" id="conPsw" placeholder="Votre Mot de passe" name="psw" required/> 

        <div class="mdp">Mot de passe oublié ?</div>
        <button type="submit" class="btn" name="login">Se connecter</button>

        <div class="compte">Pas de compte ?
        <a class = "inscription"  onclick="openInsForm()">Inscrivez-vous</a></div>
        <div class="signup-popup"></div>
    </form>
</div>