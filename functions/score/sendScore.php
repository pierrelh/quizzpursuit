<?php

    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    $sqlRequest = "INSERT INTO scores
                               (quizz_id,
                               username,
                               score)
                   VALUES($1, $2, $3)
                   ON CONFLICT (username) 
                   DO 
                    UPDATE SET score = ".$_POST['score']."";
    $result = pg_query_params($db, $sqlRequest, array(
                                                    "quizzpursuit",
                                                    $_POST['username'],
                                                    $_POST['score']
                                                ));

    if (is_resource($result)) {
        print "true";
        setcookie("SESSION_PSEUDO", $_POST['username'], strtotime( '+7 days' ), '/');
    }else {
        print "false";
    }

?>