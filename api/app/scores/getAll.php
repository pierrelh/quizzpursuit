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

    if (!$result) {
        
        //An error occurred during the process
        $dataSet = [
            "status_code" => "500",
            "error_message" => "An error occurred during while processing your request."
        ];

    }else {

        $data = pg_fetch_all($result);

        if (!$data["scores"]) {
                    
            //The returned result is empty
            $dataSet = [
                "status_code" => "200",
                "error_message" => "Your request as been successfully treated but the returned data is empty"
            ];

        }else {

            //The returned result is good
            $dataSet = new \stdClass();
            $dataSet->scores = $data;

        }
    }

    print json_encode($dataSet);

?>