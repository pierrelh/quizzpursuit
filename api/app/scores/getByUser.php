<?php

    //Create the connexion to the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    //Get the username & the score of a defined user
    $sqlRequest = "SELECT username,
                          score
                   FROM scores
                   WHERE username = '".$parameter."'";
    
    //Launch the request
    $result = pg_query($db, $sqlRequest);

    //If the result isn't empty then format and return it
    if (!empty($result)) {
        $data = pg_fetch_all($result);
        print json_encode($data);
    }else {
        print "false";
    }

?>