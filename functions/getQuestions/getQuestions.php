<?php

    //Create the connexion to the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    //Get 10 random questions
    $sqlRequest = "SELECT *
                   FROM quizz_questions
                   ORDER BY RANDOM() 
                   LIMIT 10";
    
    //Launch the request
    $result = pg_query($db, $sqlRequest);

    //If the result is not empty, then return it
    if (!empty($result)) {
        $val = pg_fetch_all($result);
        print json_encode($val);
    }else {
        print "false";
    }

?>