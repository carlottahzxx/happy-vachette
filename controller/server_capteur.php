<?php
    function getDataArray($db,$typeCapteur,$idCollier){
        $data = [];
        $query = "SELECT * FROM capteur WHERE Type=$typeCapteur AND IdCollier=$idCollier ORDER BY Date ASC";
        $result = mysqli_query($db,$query);

        while ($row = mysqli_fetch_array($result)) {
            array_push($data,$row);
            }
        return $data;
        
    }


    function retrieveTime($db,$timeMin,$timeMax,$idCollier,$typeCapteur){
        $data = [];
        $timeMin = str_replace('T',' ',$timeMin);
        $timeMax = str_replace('T',' ',$timeMax);
        $query = "SELECT * FROM `capteur` WHERE IdCollier=$idCollier AND Type=$typeCapteur AND
        Date>'$timeMin' AND Date<='$timeMax'";
       
        $result = mysqli_query($db,$query);

        while ($row = mysqli_fetch_array($result)) {
            array_push($data,$row);
            }
        return $data;

    }

?>