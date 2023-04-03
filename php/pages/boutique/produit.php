<?php 
    function product($name,$price,$image){
        echo("<div class='product-div'>
            <div class='product-image'>
                <img src='../../../images/$image'/>
            </div>
            <div class='product-text'>
                <h2>$name</h2>
                <p>$price</p>
            </div>
        </div>");
    }

?>