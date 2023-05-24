<?php 
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
    
?>