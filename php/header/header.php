

<?php
     $connected = true;
?>

<div>
    <header class="header">
    <nav>
    <div class="navicon">
      <div></div>
    </div>
  
                <a class ="label-title" href="../general/index.php">Accueil</a>  

                <a class ="label-title" href="../boutique/boutique.php">Boutique</a>  

                <?php
                        if($connected){
                            echo '<a class ="label-title" href="../../pages/general/grange.php">Granges</a>
                            <a class ="label-title" href="../../pages/vaches/vaches.php">Vaches</a>
                            <a class ="label-title" href="../../pages/general/colliers.php">Colliers</a>';
                        }else{
                            echo '<li><a href="#">Connectez vous</a></li>';
                        }
                    ?>
</nav>
        <a class="logo2" href="../../pages/general/index.php"><img src="../../../images/green_hv_logo.png" alt="logo" /></a> 
        



        <?php
           
            if($connected){
                echo '
                <a class = "logo-notif"  onclick="openForm()"> <img src="../../../images/notif.png" alt="logo-notif" /></a>';
            }

            echo '<a class = "logo-connect"  onclick="openForm()"> <img src="../../../images/compte.png" alt="logo-compte" /></a>

            <div class="login-popup">
            <div class="form-popup" id="popupForm">
              <form action="/action_page.php" class="form-container">
              Connexion <a class = "croix" onclick="closeForm()"> <img src="../../../images/traverser.png" /></a>
              
                <input type="text" id="email" placeholder="Votre Email" name="email" required />
                <input type="password" id="psw" placeholder="Votre Mot de passe" name="psw" required/> 

                <div class="mdp">Mot de passe oublié ?</div>
                <button type="submit" class="btn">Se connecter</button>
        
               Pas de compte ? 
                <a>Inscrivez-vous</a> 
                <a class = "inscription"  onclick="openForm()"> </a>
                <div class="signup-popup">
            <div class="form-popup" id="popupForm">
              <form action="/action_page.php" class="form-container">
              Inscription <a class = "croix" onclick="closeForm()"> <img src="../../../images/traverser.png" /></a>

                <input type="text" id="name" placeholder="Votre nom" name="name" required />
                <input type="text" id="name" placeholder="Votre prénom" name="name" required />
                <input type="text" id="email" placeholder="Votre Email" name="email" required />
                <input type="password" id="psw" placeholder="Votre Mot de passe" name="psw" required/> 
                <input type="checkbox" id="cgu" required/>J accepte les<a href=""../pages/general/CGU.php"">CGU</a>
                <button type="submit" class="btn">S inscrire</button>
        
               Déjà un compte ? 
                <a>Connectez-vous</a> 
                <a class = "inscription"  onclick="openForm()"> </a>

              </form> 
              
            </div>
          </div>
          <script>
              function openForm() {
                document.getElementById("popupForm").style.display = "block";
              }
        
              function closeForm() {
                document.getElementById("popupForm").style.display = "none";
              }
            </script>';

         
                
        ?>
        
    
</div>