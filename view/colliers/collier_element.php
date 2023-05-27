
<?php
    function collierElement($numero,$img,$nom_vache,$heart,$temp,$sound,$co2){
        echo("
        <div class='general-collier-elem-div'>
            <div class='numero-div'>
                <h3>$numero</h3>
            </div>
        
            <div class='vache-img-div'>
                <img src='../../images/$img'/>
                <h4>$nom_vache</h4>
            </div>
        
            <div class='grid-parent'>
                <div class='grid-elem1'>
                    <img src='../../images/heart.png'/>
                    <h4>$heart</h4>
                </div>
                
                <div class='grid-elem2'>
                    <img src='../../images/temp.png'/>
                    <h4>$temp</h4>
                </div>
                
                <div class='grid-elem3'>
                    <img src='../../images/son.png'/>
                    <h4>$sound</h4>
                </div>
                
                <div class='grid-elem4'>
                    <img src='../../images/co2.png'/>
                    <h4>$co2</h4>
                </div>
        
        
            </div>
        
        </div>
        
        ");
    }


?>

