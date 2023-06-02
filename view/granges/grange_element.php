<?php
    function grangeElem($nom,$lieu,$co2,$son){
        $color_co2 = '#db1f12';
        if($co2 != 'Manquant'){
            if($co2<1000){
                $color_co2 = '#37dc05';
            }elseif($co2<2000){
                $color_co2 = '#ffd500';
            }
            $co2 = $co2 . " ppm";
        }
        
        $color_son = '#db1f12';
        if($son != 'Manquant'){
            if($son<70){
                $color_son = '#37dc05';
            }elseif($son<100){
                $color_son = '#ffd500';
            }
            $son = $son . " dB";
        }
        
       
        
        
        

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
                        <span class='dot' style='background-color : $color_co2'></span>
                        <h4>Co2 : $co2</h4>
                    </div>
                    <div class='info-div'>
                        <span class='dot' style='background-color : $color_son'></span>
                        <h4>Son : $son</h4>
                    </div>
                </div>
            </div>
            
        </div>
        ");
    }
    
    
?>

