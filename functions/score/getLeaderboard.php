<?php

    //Create the connexion to the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    //Get the to 10 scorers
    $sqlRequest = "SELECT username,
                          score
                   FROM scores
                   ORDER BY score DESC 
                   LIMIT 10";

    //Launch the request
    $result = pg_query($db, $sqlRequest);

    if (!empty($result)) {
        //If there is a result then format and return it
        $val = pg_fetch_all($result);
        print json_encode($val);
    }else {
        print "false";
    }

?>