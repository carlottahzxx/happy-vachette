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

    function urlPermission($db,$idCollier,$email){
        $query = "SELECT IdGrange FROM collier WHERE IdCollier=$idCollier";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        $idGrange = $result['IdGrange'];

        $query = "SELECT IdUser FROM grange WHERE IdGrange=$idGrange";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        $idUser = $result['IdUser'];

        $query = "SELECT mail FROM user WHERE IdUser=$idUser";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        $mail = $result['mail'];

        return($email == $mail);

    }

    function getLastValue($db,$idCollier,$typeCapteur){
        $query = "SELECT MAX(Date) as Date FROM `capteur` WHERE Type=$typeCapteur AND IdCollier=$idCollier";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        $date = $result['Date'];
        
        $info = "";

        

        if($date){
            if($typeCapteur==1){
                $info = " bpm";
            }elseif($typeCapteur==2){
                $info = " °C";
            }elseif($typeCapteur==3){
                $info = " dB";
            }elseif($typeCapteur==4){
                $info = " ppm";
            }

            $query = "SELECT Valeur FROM `capteur` WHERE Type=$typeCapteur AND IdCollier=$idCollier AND Date='$date'";
            $result = mysqli_query($db,$query);
            $result = mysqli_fetch_assoc($result);
            $val = $result['Valeur'];
            $info = $val . $info;
            return $info;
        }
        return "Donnée indisponible";
    
    }

?>