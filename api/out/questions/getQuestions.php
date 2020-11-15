<?php

    $links = ['https://polar-ocean-73785.herokuapp.com/api/questions/3',
              'https://wsf-popcorn-backend.herokuapp.com/api/questions/4',
              'https://adley-quizz.herokuapp.com/api/questions/3'];
    $questions = [];
    foreach ($links as $value) {
        $raw = file_get_contents($value);
        $json = json_decode($raw);
        $result = get_object_vars($json);
        $result = $result['questions'];
        foreach ($result as $key => $value) {
            foreach ($value as $value) {
                array_push($questions, get_object_vars($value));
            }
        }
        
    }
    print json_encode($questions);


?>