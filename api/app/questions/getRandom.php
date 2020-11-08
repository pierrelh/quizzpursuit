<?php

    //Create the connexion to the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    //Get a random question
    $sqlRequest = "SELECT *
                   FROM quizz_questions
                   ORDER BY RANDOM() 
                   LIMIT 1";
    
    //Launch the request
    $result = pg_query($db, $sqlRequest);

    //If the result isn't empty then format and return it
    if (!empty($result)) {
        $data = pg_fetch_all($result);

        //Map the result for the adapted format
        include_once($_SERVER['DOCUMENT_ROOT']."/api/map/question.php");
        $data = array_map('mapQuestion', $data);

        $dataSet = new \stdClass();
        $dataSet->questions = $data;
        
        print json_encode($dataSet);
    }else {
        print "false";
    }

?>