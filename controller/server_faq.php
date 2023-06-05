<?php
    require_once "../../controller/server_mail.php";

    function isAdmin($db,$email){
        $query = "SELECT administrator FROM user WHERE mail='$email'";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        $admin = $result['administrator'];
        return $admin;
    }

    function dropQuestion($db,$questionId){
        $query = "DELETE FROM faq WHERE IdFaq=$questionId";
        mysqli_query($db,$query);

    }

    function getPendingQuestions($db){
        $questions = [];
        $query = "SELECT * FROM faq WHERE answered=0";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
            array_push($questions,$row);
        }

        return $questions;

    }

    function requestQuestion($db,$id){
        $query = "SELECT * FROM faq WHERE IdFaq=$id";
        $result = mysqli_query($db,$query);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

    function requestFaqQuestions($db){
        $questions = [];
        $query = "SELECT * FROM faq WHERE InFaq=1";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
            array_push($questions,$row);
        }
        return $questions;
    }

    if(isset($_POST['send'])){
        $question = mysqli_real_escape_string($db, $_POST['question']);
        
        if($question!=''){
            $query = "INSERT INTO faq(question,answer,answered,author,inFaq) VALUES ('$question','',0,'$email',0)";
            mysqli_query($db, $query);

            envoieMail($email,"Vos nous avez contacté","<p>Nous avons bien recu votre question ! 
            Nous allons y répondre dans les plus bref délais ! </p><p>Merci de votre confiance</p>
            <p>L'equipe Happy Vachette</p>");

        }
       
        
    }

    if(isset($_POST['reponse-q'])){
        $inFaq = 0;
        $add_faq = mysqli_real_escape_string($db, $_POST['add-faq']);
        $reponse = mysqli_real_escape_string($db, $_POST['reponse']);
        $id_faq = mysqli_real_escape_string($db, $_POST['reponse-q']);

       
        if($add_faq == 'oui'){
            $inFaq = 1;
        }

        if($reponse != ''){
            $query = "SELECT * FROM faq WHERE IdFaq=$id_faq";
            $result = mysqli_query($db,$query);
            $result = mysqli_fetch_assoc($result);
            $email = $result['author'];
            $question = $result['question'];

            $query = "UPDATE faq SET answer='$reponse',answered=1,inFaq=$inFaq WHERE IdFaq=$id_faq";
            mysqli_query($db, $query);

            
            envoieMail($email,"Réponse a votre question","<p>A l'écoute de nos clients, voici la réponse votre question :
            </p> <p>$question </p> <p>Réponse de votre conseiller Happy Vachette : $reponse </p>");

            header("Location:admin_contact.php");
            exit;
        }
        

    }




?>