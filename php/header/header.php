

<?php
     $connected = true;
?>

<div>
    <header class="header">
        <a class="logo2" href="../../pages/general/index.php"><img src="../../../images/green_hv_logo.png" alt="logo" /></a> 
        
        <div class = "header-title-div">
            <a class ="label-title" href="../general/index.php">Accueil</a>  
            <a class ="label-title" href="../boutique/boutique.php">Boutique</a>  
            <ul class="menu">
                <h6>Mon espace</h6>
                <div class="dropdown">
                    <?php
                        if($connected){
                            echo '<a class ="label-title" href="../../pages/general/grange.php">Granges</a>
                            <a class ="label-title" href="../../pages/vaches/vaches.php">Vaches</a>
                            <a class ="label-title" href="../../pages/general/colliers.php">Colliers</a>';
                        }else{
                            echo '<a href="#">Connectez vous</a>';
                        }
                    ?>
    </nav>
        <a class="logo2" href="../../pages/general/index.php"><img src="../../../images/green_hv_logo.png" alt="logo" /></a> 
        



        <?php
           
            if($connected){
                echo '
                <a class = "logo-notif"  onclick="openConForm()"> 
                <img src="../../../images/notif.png" alt="logo-notif" /></a>';
            }

            echo '<a class = "logo-connect"  onclick="openConForm()"> 
            <img src="../../../images/compte.png" alt="logo-compte" /></a>';
         
            include("connexion.php");    

        ?>
        
</div>
