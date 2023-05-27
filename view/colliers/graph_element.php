

<?php
    function graph($db,$typeCapteur,$idCollier){
        require_once "../../controller/server_capteur.php";
        $data = getDataArray($db,$typeCapteur,$idCollier);

        $date = array();
        $valeur = array();
        foreach($data as $val){
            array_push($date,$val['Date']);
            array_push($valeur,$val['Valeur']);
        }
        
        $taille = count($valeur);

        $date = json_encode($date);
        $valeur = json_encode($valeur);
        $id = 'myChart'. strval($typeCapteur);

        if($taille>0){
            echo("
            <div class='chart'>
                <canvas id='$id'></canvas>
            </div>
            <script>drawChart($date,$valeur,$typeCapteur);</script>
        ");
        }else{
            echo("<p>Aucune donnée pour ce capteur</p>");
        }
        

    }
    
    
?>



