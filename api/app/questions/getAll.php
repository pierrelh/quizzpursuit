<?php
    //Return all questions from the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    $sqlRequest = "SELECT *
                   FROM quizz_questions";
    $result = pg_query($db, $sqlRequest);

    if (!empty($result)) {
        $data = pg_fetch_all($result);

        include_once($_SERVER['DOCUMENT_ROOT']."/api/map/question.php");
        $data = array_map('mapQuestion', $data);
        print json_encode($data);
    }else {
        print "false";
    }

?>