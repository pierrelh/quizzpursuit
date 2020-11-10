<?php
    header("Access-Control-Allow-Origin: *");
    header('content-type:text/html;charset=utf-8');

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

    if (!$result) {
        
        //An error occurred during the process
        $data = [
            "status_code" => "500",
            "error_message" => "An error occurred during while processing your request."
        ];

    }else {
        
        $data = pg_fetch_all($result);

        if (!$data) {

            //The returned result is empty
            $data = [
                "status_code" => "200",
                "error_message" => "Your request as been successfully treated but the returned data is empty"
            ];

        }else {
            print $data;
        }


    }

    print json_encode($data);

?>