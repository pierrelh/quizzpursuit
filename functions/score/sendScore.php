<?php

    //Create the connexion to the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();
    
    //Send the user's score and username or just update the user's score
    $sqlRequest = "INSERT INTO scores
                               (quizz_id,
                               username,
                               score)
                   VALUES($1, $2, $3)
                   ON CONFLICT (username) 
                   DO 
                    UPDATE SET score = ".$_POST['score']."";
    
    //Launch the request
    $result = pg_query_params($db, $sqlRequest, array(
                                                    "quizzpursuit",
                                                    $_POST['username'],
                                                    $_POST['score']
                                                ));

    //If a resource is returned then the request success
    if (is_resource($result)) {
        print "true";
    }else {
        print "false";
    }

?>