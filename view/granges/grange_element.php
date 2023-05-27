<?php 
    function grange($nom,$lieu,$co2,$son){
        echo("<div
         class='product-div'>
            <a href='./productPage.php?name=$name&price=$price&image=$image&description=Description'
             class='product-middle-div'>
                <div class='product-image'>
                    <img src='../../images/$image'/>
                </div>
                <div class='product-text'>
                    <h2>$name</h2>
                    <p>$price</p>
                </div>
            </a>
        </div>");
    }

?>