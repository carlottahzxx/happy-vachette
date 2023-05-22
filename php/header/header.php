

<div>
<header class="header">
        <div class="login-popup">
        
           <?php include("../../authentification/connexion.php");?>
           <?php include("../../authentification/inscription.php");?>
           <?php 
               include("../../authentification/server.php");

               if(count($insErrors)!=0){
                   $error = $insErrors[0];
                   echo("<script>openInsForm();
               setInsError('$error');
               </script>");
               }

               if(count($conErrors)!=0){
                   $error = $conErrors[0];
                   echo("<script>openConForm();
               setConError('$error');
               </script>");
               }


           ?>
       
       </div>

        <a class="logo2" href="../../pages/general/index.php"><img src="../../../images/green_hv_logo.png" alt="logo" /></a> 
        
        <div class = "header-title-div">
            <a class ="label-title" href="../general/index.php">Accueil</a>  
            <a class ="label-title" href="../boutique/boutique.php">Boutique</a>  
            <ul class="menu">
                <h6>Mon espace</h6>
                <div class="dropdown">
                    <?php
                        
                        if($connected){
                            echo '<li><a href="../../pages/general/grange.php">Granges</a></li>
                            <li><a href="../../pages/vaches/vaches.php">Vaches</a></li>
                            <li><a href="../../pages/general/colliers.php">Colliers</a></li>';
                        }else{
                            echo '<li><a onclick="openConForm()">Connectez vous</a></li>';
                        }
                    ?>
                </div>
            </ul>   
        </div>


        <?php
           
           
            if($connected){
                echo '
                <div class="header-connect-div">
                    <a class = "logo-notif"  onclick="openConForm()"> 
                    <img src="../../../images/notif.png" alt="logo-notif" /></a>';
                    

                    echo '
                    <a class = "logo-connect"  onclick="openConForm()"> 
                    <img src="../../../images/compte.png" alt="logo-compte" /></a> 
                    
                </div>';
                
            }else{
                echo '<a class = "logo-connect"  onclick="openConForm()"> 
            <img src="../../../images/compte.png" alt="logo-compte" /></a>';
            }

            
         
           
        ?>
        
    </header>
    <?php
        if($connected){
            $name = $_SESSION['firstName'];
            $familyName = $_SESSION['familyName'];
            echo("<div class='below-header'>
                    <div class='connection-info'>
                        <h6>$name $familyName</h6>");
                        echo('<a href="../../pages/general/index.php?disconnect=true" >Disconnect</a>
                    </div>
                </div>');
        }
        
    ?>
</div>
