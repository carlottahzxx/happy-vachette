

<div class="login-popup">
    <div class="form-popup" id="conForm">
        <form action="/action_page.php" class="form-container">
             <a class = "croix" onclick="closeForms()"> <img src="../../../images/traverser.png" /></a>
             <div class="form-title">Connexion</div>

            <input type="text" id="conEmail" placeholder="Votre Email" name="email" required />
            <input type="password" id="conPsw" placeholder="Votre Mot de passe" name="psw" required/> 

            <div class="mdp">Mot de passe oublié ?</div>
            <button type="submit" class="btn">Se connecter</button>

            Pas de compte ? 
            <a class = "inscription"  onclick="openInsForm()">Inscrivez-vous</a>
            <div class="signup-popup"></div>
        </form>
    </div>

    <div class="form-popup" id="insForm">
        <form action="/action_page.php" class="form-container">
             <a class = "croix" onclick="closeForms()"> <img src="../../../images/traverser.png" /></a>
            <div class="form-title">Inscription</div>
            <input type="text" id="firstName" placeholder="Votre nom" name="name" required />
            <input type="text" id="name" placeholder="Votre prénom" name="name" required />
            <input type="text" id="insEmail" placeholder="Votre Email" name="email" required />
            <input type="password" id="insPsw" placeholder="Votre Mot de passe" name="psw" required/> 
            <input type="checkbox" id="cgu" required/>J'accepte les<a href="../pages/general/CGU.php">CGU</a>
            <button type="submit" class="btn">S inscrire</button>

            Déjà un compte ? 
            <a class = "inscription"  onclick="openConForm()">Connectez-vous</a>

        </form> 
        
    </div>
</div>
