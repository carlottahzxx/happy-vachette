



<div>
    <header class = "header">
        <a class ="logo2" href="../pages/index.php">
            <img src="../../images/green_hv_logo.png" alt="logo" />
        </a> 
        
        <div class = "header-title-div">
            <a class ="label-title" href="../../php/pages/index.php">Accueil</a>  
            <a class ="label-title" href="../../php/pages/boutique.php">Boutique</a>  
            <a class ="menu-espace" href="../../php/pages/mon_espace.php">Mon espace</a>
            <ul class="menu">
                <li><a href="#">Option 1</a></li>
                <li><a href="#">Option 2</a></li>
                <li><a href="#">Option 3</a></li>
            </ul>
            
        </div>
        <?php
            $connected = true;
            if($connected){
                echo '<a class = "logo-notif" href="../../connexion.html"> <img src="../../images/notif.png" alt="logo-notif" /></a>';
            }

            echo '<a class = "logo-connect" href="../../connexion.html"> <img src="../../images/compte.png" alt="logo-connect" /></a>
            </header>';

            if($connected){
                echo '<hr style="margin-left : 19%; margin-right:2%;">';
            }else{
                echo '<hr style="margin-left : 24%; margin-right:3%;">';
            }
                
        ?>
        
    
</div>