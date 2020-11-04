<?php
    //Map the random question for the API
    function mapScore($score) {
        $data = [
            "questionID" => $question['id'],
            "question" => $question['question'],
            "answer" => [
                $question['first_choice'] => $isFirst,
                $question['second_choice'] => $isSecond,
                $question['third_choice'] => $isThird,
                $question['fourth_choice'] => $isFourth
            ]
        ];
        return $data;
    }

?>