<?php
    header("Access-Control-Allow-Origin: *");
    
    //Create the connexion to the db
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
    $db = connect();

    //Get a defined number of random questions
    $sqlRequest = "SELECT *
                   FROM quizz_questions
                   ORDER BY RANDOM() 
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

        if (!$data) {
                    
            //The returned result is empty
            $dataSet = [
                "status_code" => "200",
                "error_message" => "Your request as been successfully treated but the returned data is empty"
            ];

        }else {

            //The returned result is good
            //Map the result for the adapted format
            include_once($_SERVER['DOCUMENT_ROOT']."/api/map/question.php");
            $data = array_map('mapQuestion', $data);

            $dataSet = new \stdClass();
            $dataSet->questions = $data;

        }
    }

    print json_encode($dataSet, JSON_UNESCAPED_UNICODE);

?>