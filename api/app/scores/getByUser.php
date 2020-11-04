<?php
    //Return an user score & username
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    $sqlRequest = "SELECT username,
                          score
                   FROM scores
                   WHERE username = '".$parameter."'";
    $result = pg_query($db, $sqlRequest);

    if (!empty($result)) {
        $data = pg_fetch_all($result);
        print json_encode($data);
    }else {
        print "false";
    }

?>