<?php

    function getUserId($db,$email){
        $query = "SELECT IdUser FROM user WHERE mail='$email'";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        $id_user = $result['IdUser'];
        return $id_user;
    }

    function grangesRequest($db,$id_user){
        $granges = [];
        $query = "SELECT * FROM grange WHERE IdUser = $id_user";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
            array_push($granges,$row);
        }
        return $granges;
    }

    function getMeanCo2($db,$idGrange){
        $colliers = [];
        $means = [];
        $query = "SELECT IdCollier FROM collier WHERE IdGrange=$idGrange";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
            array_push($colliers,$row);
        }
        foreach($colliers as $col){
            $id = $col['IdCollier'];
            $query = "SELECT AVG(Valeur) AS Valeur FROM capteur WHERE IdCollier=$id AND Type=2";
            $result = mysqli_query($db,$query);
            $result = mysqli_fetch_assoc($result);
            $value = $result['Valeur'];
            array_push($means,$value);
        }
        if(count($means)!=0){
            $mean = array_sum($means)/count($means);
            return round($mean,1);
        }else{
            $mean = "Manquant";
            return $mean;
        }
    }

    function getMeanSon($db,$idGrange){
        $colliers = [];
        $means = [];
        $query = "SELECT IdCollier FROM collier WHERE IdGrange=$idGrange";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
            array_push($colliers,$row);
        }
        foreach($colliers as $col){
            $id = $col['IdCollier'];
            $query = "SELECT AVG(Valeur) AS Valeur FROM capteur WHERE IdCollier=$id AND Type=3";
            $result = mysqli_query($db,$query);
            $result = mysqli_fetch_assoc($result);
            $value = $result['Valeur'];
            array_push($means,$value);
        }
        if(count($means)!=0){
            $mean = array_sum($means)/count($means);
            return round($mean,1);
        }else{
            $mean = "Manquant";
            return $mean;
        }
        
        
    }


    
    if(isset($_POST['ajout-grange'])){
        $nom = $_POST['nom-grange'];
        $lieu =$_POST['lieu-grange'];
       
        $query = "SELECT * FROM grange WHERE Nom='$nom'";
        $result = mysqli_query($db,$query);
        $in_base = mysqli_fetch_assoc($result);

        if($in_base){
            if($nom != '' && $lieu != ''){
                echo '<p class="p-error">Erreur Une grange avec ce nom existe deja</p>';
            }
        }else{
            $email = $_SESSION['email'];
            $query = "SELECT IdUser FROM user WHERE mail = '$email'";
            $result = mysqli_query($db,$query);
            $result = mysqli_fetch_assoc($result);
            $id_user = $result['IdUser'];

           

            $query = "INSERT INTO grange (Lieu,Nom,IdUser) VALUES ('$lieu','$nom','$id_user')";
            mysqli_query($db, $query);
            header("Location:grange.php");
            exit;

        }

    }

    if(isset($_POST['supprimer-grange'])){
        $grange = $_POST['selection-grange'];
        $query = "DELETE FROM grange WHERE Nom='$grange'";
        mysqli_query($db,$query);
        header("Location:grange.php");
        exit;
    }


?>