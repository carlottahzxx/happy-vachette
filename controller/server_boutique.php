<?php
    function productsRequest($db){
        $items = [];
        $query = "SELECT * FROM item";
        $result = mysqli_query($db,$query);

        while ($row = mysqli_fetch_array($result)) {
            array_push($items,$row);
        }
        return $items;

    }

?>