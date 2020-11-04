<?php
    //Return all or a defined number of scores and username
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

        $dataSet = new \stdClass();
        $dataSet->scores = $data;

        print json_encode($dataSet);
    }else {
        print "false";
    }

?>