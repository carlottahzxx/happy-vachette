
<?php  
        $admin = 0;
        if($connected){
                $email = $_SESSION['email'];
                require_once "../../controller/server_faq.php";
                $admin = isAdmin($db,$email);
        }

        
?>

<div class="footer-div">
        <footer class = "footer">
                <div class = "contacts">
                        <?php
                                if($admin){
                                        echo("
                                        <a class = 'footer-text' href='../footer/admin_contact.php'>Contact</a>  
                                        ");

                                }else{
                                        echo("
                                        <a class = 'footer-text' href='../footer/contact.php'>Contact</a>  
                                        ");
                                }
                        ?>
                       
                        <a class = "footer-text" href="../footer/FAQ.php">FAQ</a>  
                        <a class = "footer-text" href="../footer/mentions_légales.php">Mentions légales</a>
                </div>

        Happy Vachette - Tous droits réservés © 2023  

        </footer>
</div>


