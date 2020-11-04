<?php
    //Map the response question for the API
    function mapQuestion($question) {
        $isFirst = false;
        $isSecond = false;
        $isThird = false;
        $isFourth = false;

        switch ($question['answer']) {
            case 1:
                $isFirst = true;
                break;
            case 2:
                $isSecond = true;
                break;

            case 3:
                $isThird = true;
                break;

            case 4:
                $isFourth = true;
                break;
            
            default:
                return false;
                break;
        }
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