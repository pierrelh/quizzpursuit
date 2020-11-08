<?php

    //Create the connexion to the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    //Get the username & score of a certain number of leaderboard
    $sqlRequest = "SELECT username,
                          score
                   FROM scores
                   ORDER BY score DESC
                   LIMIT ".$parameter;
    
    //Launch the request
    $result = pg_query($db, $sqlRequest);

    //If the result isn't empty then format and return it
    if (!empty($result)) {
        $data = pg_fetch_all($result);

        $dataSet = new \stdClass();
        $dataSet->scores = $data;

        print json_encode($dataSet);
    }else {
        print "false";
    }

?>