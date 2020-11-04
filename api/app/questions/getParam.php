<?php
    //Return a defined number of questions from the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    $sqlRequest = "SELECT *
                   FROM quizz_questions
                   ORDER BY RANDOM() 
                   LIMIT ".$parameter;
    $result = pg_query($db, $sqlRequest);

    if (!empty($result)) {
        $data = pg_fetch_all($result);

        include_once($_SERVER['DOCUMENT_ROOT']."/api/map/question.php");
        print json_encode(array_map('mapQuestion', $data));
    }else {
        print "false";
    }

?>