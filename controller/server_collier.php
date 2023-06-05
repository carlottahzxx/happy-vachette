<?php 

    function getGrangeCollier($db,$nom_grange,$idUser){
        $colliers = [];
        $id_grange = 0;
        $query = "SELECT IdGrange FROM grange WHERE Nom='$nom_grange' AND IdUser=$idUser";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        if($result!=null){
            $id_grange = $result['IdGrange'];
        }
       


        $query = "SELECT * FROM collier WHERE IdGrange='$id_grange'";
        $result = mysqli_query($db,$query);

        while ($row = mysqli_fetch_array($result)) {
            array_push($colliers,$row);
        }
        return $colliers;

    }
    
    function request_granges($email,$db){
        $nom_granges = [];
        $query = "SELECT * FROM user WHERE mail = '$email'";
        $id = mysqli_query($db,$query);
        $id = mysqli_fetch_array($id);
        $id = $id['IdUser'];
        
        $query = "SELECT Nom FROM grange WHERE IdUser='$id'";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
        array_push($nom_granges,$row['Nom']);
        }
        return $nom_granges;
    }

    function requestCollier($db,$nom_grange){
        $query = "SELECT IdGrange FROM grange WHERE Nom='$nom_grange'";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        $id_grange = $result['IdGrange'];

        $collier = [];
        $query = "SELECT IdCollier FROM collier WHERE IdGrange='$id_grange'";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
        array_push($collier,$row['IdCollier']);
        }
        return $collier;
    }


    if(isset($_POST['ajout-collier'])){
        $grange = $_POST['selected-grange'];
        $id_form =$_POST['id-collier'];
        $query = "SELECT * FROM collier WHERE IdCollier='$id_form'";
        $result = mysqli_query($db,$query);
        $in_base = mysqli_fetch_assoc($result);
        if($in_base){
            if($id_form==''){

            }else{
                echo '<p class="p-error">Erreur ce numéro de collier est déja assigné</p>';
            }
                
        }else{
            $query = "SELECT IdGrange FROM grange WHERE Nom = '$grange'";
            $result = mysqli_query($db,$query);
            $result = mysqli_fetch_assoc($result);
            $id_grange = $result['IdGrange'];

           

            $query = "INSERT INTO collier (IdCollier,IdGrange) VALUES ('$id_form','$id_grange')";
            mysqli_query($db, $query);
            
        }


    }

    if(isset($_POST['supprimer-collier'])){
        $idCollier = $_POST['selection-collier'];
        $query = "DELETE FROM collier WHERE IdCollier=$idCollier";
        mysqli_query($db,$query);
        header("Location:colliers.php");
        exit;
    }

    
    
?>