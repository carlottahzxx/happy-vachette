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

?>