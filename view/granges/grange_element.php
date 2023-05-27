<?php
    function grangeElem($nom,$lieu,$co2,$son){
        echo("
        <div class='grange-elem-div'>
            <div class='grange-img-div'>
                <img src='../../images/grange.png'/>
            </div>

            <div class='general-info-div'>
                <div class='middle-div'>
                    <h4 class='grange-param'>Nom : $nom</h4>
                    <h4 class='grange-param'>Lieu : $lieu</h4>
                </div>
                    
                <div class='middle-div'>
                    <div class='info-div'>
                        <span class='dot'></span>
                        <h4>$co2</h4>
                    </div>
                    <div class='info-div'>
                        <span class='dot'></span>
                        <h4>$son</h4>
                    </div>
                </div>
            </div>
            
        </div>
        ");
    }
    
    
?>

