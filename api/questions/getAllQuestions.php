<?php
    //Return a random question from the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    $sqlRequest = "SELECT *
                   FROM quizz_questions";
    $result = pg_query($db, $sqlRequest);

    if (!empty($result)) {
        $data = pg_fetch_all($result);

        include_once($_SERVER['DOCUMENT_ROOT']."/api/map/question.php");
        foreach ($data as $key => $value) {
            array_map('mapQuestion', $data[$key]);
        }
        print json_encode($data);
    }else {
        print "false";
    }

?>