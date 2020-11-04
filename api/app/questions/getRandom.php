<?php
    //Return a random question from the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    $sqlRequest = "SELECT *
                   FROM quizz_questions
                   ORDER BY RANDOM() 
                   LIMIT 1";
    $result = pg_query($db, $sqlRequest);

    if (!empty($result)) {
        $data = pg_fetch_all($result);

        include_once($_SERVER['DOCUMENT_ROOT']."/api/map/question.php");
        $data = array_map('mapQuestion', $data);

        $dataSet = new \stdClass();
        $dataSet->questions = $data;
        
        print json_encode($dataSet);
    }else {
        print "false";
    }

?>