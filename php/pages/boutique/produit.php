<?php 
    function product($name,$price,$image){
        echo("<a href='./productPage.php?name=$name&price=$price&image=$image&description=Description'
         class='product-div'>
            <div class='product-image'>
                <img src='../../../images/$image'/>
            </div>
            <div class='product-text'>
                <h2>$name</h2>
                <p>$price</p>
            </div>
        </a>");
    }

?>