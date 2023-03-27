

<?php
     $connected = true;
?>

<div>
    <header>
        <a href="../pages/index.php"><img class="logo2" src="../../../images/green_hv_logo.png" alt="logo" /></a> 
        
        <div class = "header-title-div">
            <a class ="label-title" href="../general/index.php">Accueil</a>  
            <a class ="label-title" href="../boutique/boutique.php">Boutique</a>  
            <ul class="menu">Mon espace
                <div class="dropdown">
                    <?php
                        if($connected){
                            echo '<li><a href="#">Granges</a></li>
                            <li><a href="#">Vaches</a></li>
                            <li><a href="#">Colliers</a></li>';
                        }else{
                            echo '<li><a href="#">Connectez vous</a></li>';
                        }
                    ?>
                </div>
            </ul>   
        </div>
        <?php
           
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