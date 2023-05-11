

<div class="form-popup" id="conForm">
    <form class="form-container" action="javascript:void(0);"  method="post">
            <a class = "croix"  href ="index.php"> <img src="../../../images/traverser.png" /></a>
            <div class="form-title">Connexion</div>

        <input type="text" id="conEmail" placeholder="Votre Email" name="email" required />
        <input type="password" id="conPsw" placeholder="Votre Mot de passe" name="psw" required/> 

        <div class="mdp">Mot de passe oublié ?</div>
        <button type="submit" class="btn" name="login">Se connecter</button>

        Pas de compte ? 
        <a class = "inscription"  onclick="openInsForm()">Inscrivez-vous</a>
        <div class="signup-popup"></div>
    </form>
</div>