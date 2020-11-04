<?php
    //Return a random question from the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    $sqlRequest = "SELECT username,
                          score
                   FROM scores
                   ORDER BY score DESC
                   LIMIT ".$parameter;
    $result = pg_query($db, $sqlRequest);

    if (!empty($result)) {
        $data = pg_fetch_all($result);

        // include_once($_SERVER['DOCUMENT_ROOT']."/api/map/score.php");
        print json_encode(array_map('mapScore', $data));
    }else {
        print "false";
    }

?>