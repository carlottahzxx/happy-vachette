<?php 

    function product($name,$price,$image,$description){
        echo("<div class='logo-div'>
        <a class='retour-div' href='./boutique.php'>
            <img src='../../../images/retour.png' class='retour-img'/>
        </a>

        <a class='panier-div' href='./panier.php'>
            <img src='../../../images/panier.png' class='panier-img' />
        </a>
    </div>
    <div class='product-detail-div'>
        <img src='../../../images/$image' class='product-detail-image'/>

        <div class='product-info-div'>
            <div>
                <h1 class='product-title'>$name</h1>
                <h2 class='product-price'>$price</h2>
                <h4 class='product-desc'>$description</h4>
            </div>
            <button class='bouton-panier'>
                <h2>Ajouter au panier</h2>
            </button>
            
        </div>
    </div>");
    }

?>