<?php

    $links = ['https://polar-ocean-73785.herokuapp.com/api/questions/3',
              'https://wsf-popcorn-backend.herokuapp.com/api/questions/3',
              'https://adley-quizz.herokuapp.com/api/questions/4'];
    $questions = [];
    foreach ($links as $value) {
        $raw = file_get_contents($value);
        echo "Brut:";
        echo "<br>";
        print ($raw);
        echo "<br>";
        $json = json_decode($raw);
        echo "Decode:";
        echo "<br>";
        print ($raw);
        echo "<br>";
        $result = get_object_vars($json);
        echo "Get Object:";
        echo "<br>";
        print ($raw);
        echo "<br>";
    }


?>