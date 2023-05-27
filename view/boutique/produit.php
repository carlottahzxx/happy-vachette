<?php 
    function product($productName,$price,$image,$description){
        echo("<div
         class='product-div'>
            <a href='./productPage.php?productName=$productName&price=$price&image=$image&description=$description'
             class='product-middle-div'>
                <div class='product-image'>
                    <img src='../../images/$image'/>
                </div>
                <div class='product-text'>
                    <h2>$productName</h2>
                    <p>$price</p>
                </div>
            </a>
        </div>");
    }

?>