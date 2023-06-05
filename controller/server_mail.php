<?php
    function envoieMail($email,$objet,$msg){
        $headers = 'From: happyvachette@gmail.com'."\r\n".
        'MIME-Version: 1.0'."\r\n" .
        'Content-type: text/html; charset=utf-8';

        mail($email,$objet,$msg,$headers);
          
    }


?>