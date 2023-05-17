
<?php
    function validPsw($psw){
        $majuscule = false;
        $minuscule = false;
        $nombre = false;
        $charactere = false;
        
        $nb = strlen($psw);
        
        $majArray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U",
        "V","W","X","Y","Z");

        $minArray = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u",
        "v","w","x","y","z");

        $numArray = array("0","1","2","3","4","5","6","7","8","9");
        
        $charArray = array("@","[","]","^","_","!",'"',"#","$","%","&","'","(",")","*","+",",","-",
        ".","/",":",";","{","}","<",">","=","|","~","?");

        for($b=0; $b<$nb; $b++){
            if(in_array($psw[$b],$majArray)){
                $majuscule = true;
            }
            if(in_array($psw[$b],$minArray)){
                $minuscule = true;
            }
            if(in_array($psw[$b],$numArray)){
                $nombre = true;
            }
            if(in_array($psw[$b],$charArray)){
                $charactere = true;
            }
        }

        return ($majuscule && $minuscule) && ($charactere && $nombre);

    }

    function firstNameFromMail($mail){
        $db = mysqli_connect('localhost', 'root', 'root', 'happyvachette');
        $query = "SELECT firstName FROM user WHERE mail='$mail'";
        $result = mysqli_query($db,$query);
        
        return $result->fetch_row()[0];
    }

    function familyNameFromMail($mail){
        $db = mysqli_connect('localhost', 'root', 'root', 'happyvachette');
        $query = "SELECT familyName FROM user WHERE mail='$mail'";
        $result = mysqli_query($db,$query);

        return $result->fetch_row()[0];
    }


?>

<?php
session_start();

if(isset($_SESSION['email'])){
    $sessionEmail = $_SESSION['email'];
}else{
    $sessionEmail = "";
}




$name ="";
$familyName = "";
$psw = "";
$email = "";
$confpsw = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', 'root', 'happyvachette');


if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $psw = mysqli_real_escape_string($db, $_POST['psw']);

    $conn_check = "SELECT * FROM user WHERE mail='$email' AND pswd='$psw'";
    $result = mysqli_query($db,$conn_check);
    $can_conn = mysqli_fetch_assoc($result);

    if($can_conn){
        $_SESSION['email'] = $email;
        $name = firstNameFromMail($email);
        $lastName = familyNameFromMail($email);
        echo("$name $lastName");
        
    }else{
        echo("<script>openConForm();
                setConError('Email or password incorrect');
                </script>");
    }

    

}


if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $familyName = mysqli_real_escape_string($db, $_POST['familyName']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $psw = mysqli_real_escape_string($db, $_POST['psw']);
    $confpsw = mysqli_real_escape_string($db, $_POST['confpsw']);


    if($psw!=="" && $email!==""){

        $email_check = "SELECT * FROM user WHERE mail='$email'";
        $result = mysqli_query($db,$email_check);
        $email_exist = mysqli_fetch_assoc($result);


        if(!validPsw($psw)){
            array_push($errors,'error');
            echo("<script>openInsForm();
            setInsError('Password must contain at least a lower AND upper case letter, a number and a special character');
            </script>");
        }
        
        if($psw != $confpsw){
            array_push($errors,'error');
            echo("<script>openInsForm();
            setInsInsError('The two passwords have to match');
            </script>");
        }

        if(strlen($psw)<6){
            array_push($errors,'error');
            echo("<script>openInsForm();
            setInsError('Password must contain at least 7 characters');
            </script>");
        }
        
        if($email_exist){
            array_push($errors,'error');
            if($email !== $sessionEmail){
                echo("<script>openInsForm();
                setInsError('An account already exists with this email');
                </script>");
            }
    
        }

        if(count($errors)==0){
            $query = "INSERT INTO user (mail, pswd,familyName,firstName,administrator)
            VALUES ('$email','$psw','$familyName','$name',0)";
            $_SESSION['email'] = $email;
            $sessionEmail = $email;
            mysqli_query($db, $query);
        
            echo $sessionEmail;
        }

    }
}



?>
