

<?php
    require_once "../../controller/server_faq.php";
    $questions = getPendingQuestions($db);
    foreach($questions as $q){
        $val = $q['question'];
        $author = $q['author'];
        $id = $q['IdFaq'];
        echo("
        <div class='general-question-div'>
            <div class = 'question-div'>
                <div class='suppression'>
                    <h4>Auteur : $author</h4>
                    <div class='answer-div'>
                        <a class='repondre' href='../footer/reponse.php?id=$id'>Repondre</a>
                        <a class='corbeille'><img src='../../images/corbeille.png'/></a>
                    </div>
                </div>
    
                <p>
                $val
                </p>
            </div>
            
        </div>
        ");
    }
    if(count($questions)==0){
        echo("<p>Pas de question en attente</p>");
    }
    

?>

