<?php

    $links = ['https://polar-ocean-73785.herokuapp.com/api/questions/2',
              'https://wsf-popcorn-backend.herokuapp.com/api/questions/2',
              'https://adley-quizz.herokuapp.com/api/questions/2'];
    foreach ($links as $value) {
        $raw = file_get_contents($value);
        // $json = json_decode($raw);
        print $raw;
    }


?>