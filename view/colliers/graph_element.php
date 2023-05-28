

<?php
    function graph($db,$typeCapteur,$idCollier,$timeStart,$timeEnd){
        require_once "../../controller/server_capteur.php";
        $data = retrieveTime($db,$timeStart,$timeEnd,$idCollier,$typeCapteur);

        $date = array();
        $valeur = array();
        foreach($data as $val){
            array_push($date,$val['Date']);
            array_push($valeur,$val['Valeur']);
        }
        
        $taille = count($valeur);

        $date = json_encode($date);
        $valeur = json_encode($valeur);
        $chartId = 'myChart'. strval($typeCapteur);
        $startId = 'timeInputMin'. strval($typeCapteur);
        $endId = 'timeInputMax'. strval($typeCapteur);
        
        echo("
            <div class='debut-fin-div'>
            <h4>Début</h4>
            <input type='datetime-local' class='date-input' id='$startId' max='$timeEnd' value='$timeStart' onchange='updateInput(`$idCollier`)'/>
            <h4>Fin</h4>
            <input type='datetime-local' class='date-input' id='$endId' max='$timeEnd' value='$timeEnd' onchange='updateInput(`$idCollier`)'/>
            </div>
            ");

        if($taille>0){
            echo("
            
            <div class='chart'>
                <canvas id='$chartId' style='width:70vw; height:40vw;'></canvas>
            </div>
            <script>drawChart($date,$valeur,$typeCapteur);</script>
        ");
        }else{
            echo("
            <div class='erreur-div'>
            <p>Aucune données pour ces paramètres</p>
            </div>
            ");
        }
        

    }
    
    
?>



