<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="../../css/index.css" />
    <link rel="stylesheet" href="../../css/header.css"/>
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../../scripts/form.js"></script>
    <script src="../../scripts/customSubmit.js"></script>
    <script src="../../scripts/adminIns.js"></script>
    
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);
    
    if(isset($_GET['disconnect'])){
        session_destroy();
        $connected = false;
    }


?>

<body>
    
    <div  class="header-background">
        <?php include("../header/header.php") ?> 
    </div> 

    <main>

        <div class = "middle-section">

            <div class = "general-text">
                <h3>HAPPY VACHETTE ET SES COLLIERS</h3>
            
                <div class = "description-text">
                    <p><br>Notre équipe est composée de six étudiants de l’ISEP 
                    <span class="ma-classe">surmotivés</span>
                                pour améliorer les conditions de vie des animaux d’élevages 
                                en particulier les vaches.</p>
                </div>

                <div class = "description-text">
                    <p><br>Notre concept est d’améliorer la vie de vos animaux grâce à un
                        collier connecté. Ce collier comporte de nombreux capteurs qui
                        permettent d’analyser le comportement de la vache afin de
                        pouvoir déduire si elle vit dans de bonnes conditions ou pas.</p>
                </div>

                <div class = "description-text">
                    <p><br>Si nous détectons grâce à ce collier que vos vaches vivent 
                    dans de bonnes conditions alors nous vous attribuerons notre 
                    label qui est preuve d’engagement dans le bien-être 
                    animal.</p>
                </div>

            </div>

            <div class = "div-vachette">
                <img class = "image-vachette" id ="vachette" src="../../images/vachette2.png"/>
                <img id="left-eye" src="../../images/eye.png">
                <img id="right-eye" src="../../images/eye.png">
            </div>
        </div>


  
    <div class="animation_div">
        <figure class="carre-vache">

            <figcaption>
                <h2>Client</h2>
                <p>De nombreux éleveurs nous font confiance !</p>
            </figcaption>

            <a href="#"></a><img class="image-vachette" src="../../images/vachette.jpg" alt="sample45" />
        </figure>

        <figure class="carre-vache">
            <figcaption>
                <h2>Capteurs</h2>
                <p>Les capteurs sont super.</p>
            </figcaption>
            <a href="#"></a><img class="image-vachette" src="../../images/vachette.jpg" alt="sample59" />
        </figure>

        <figure class="carre-vache">
            <figcaption>
                <h2>Résultats</h2>
                <p>Des résultats top.</p>
            </figcaption>
            <a href="#"></a><img class="image-vachette"  src="../../images/vachette.jpg" alt="sample60" />
        </figure>
    </div>


        <div class="botom-section">
            <div class="portrait-antoine">
                <footer class = "middle-section-footer">Antoine</footer>
            </div>
            <div class="portrait-antoine">
                <footer class = "middle-section-footer">Maxence</footer>
            </div>
            <div class="portrait-antoine">
                <footer class = "middle-section-footer">Léonard</footer>
            </div>
        </div>
        <div class = "botom-section"> 
            <div class="portrait-antoine">
                <footer class = "middle-section-footer">Carlotta</footer>
            </div>
            <div class="portrait-antoine">
                <footer class = "middle-section-footer">Daniel</footer>
            </div>
            <div class="portrait-antoine">
                <footer class = "middle-section-footer">Léa</footer>
            </div>
        </div>  

    </main>

    <?php include("../footer/footer.php"); ?>
    <script src="../../scripts/eyeFollow.js"></script>

    
</body>

</html>