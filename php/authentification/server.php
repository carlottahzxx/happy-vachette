
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
?>

<?php



session_abort();

$name ="";
$familyName = "";
$email = "";
$psw = "";
$confpsw = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', 'root', 'happy_vachette');

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $familyName = mysqli_real_escape_string($db, $_POST['familyName']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $psw = mysqli_real_escape_string($db, $_POST['psw']);
    $confpsw = mysqli_real_escape_string($db, $_POST['confpsw']);       
}

if($psw != $confpsw){
    array_push($errors,"The two passwords do not match");
}

if(!validPsw($psw)){
    array_push($errors,"Passwt conord mustain at least a lower AND upper case letter, a number and a special characters");
}

if(count($errors)==0){
    $query = "INSERT INTO user (userId, mail, pswd, administrator, firstName, familyName)
    VALUES (1,'$email','$psw',0,'$name','$familyName')";

    mysqli_query($db, $query);
}


?>
