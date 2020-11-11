<?php

    //Map the response question for the API
    function mapQuestion($question) {
        $firstAnswer = new \stdClass();
        $secondAnswer = new \stdClass();
        $thirdAnswer = new \stdClass();
        $fourthAnswer = new \stdClass();

        $isFirst = false;
        $isSecond = false;
        $isThird = false;
        $isFourth = false;

        //Get witch of the answer is the right one
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
        $firstAnswer->answer = $question['first_choice'];
        $firstAnswer->isCorrect = $isFirst;

        $secondAnswer->answer = $question['second_choice'];
        $secondAnswer->isCorrect = $isSecond;
        
        $thirdAnswer->answer = $question['third_choice'];
        $thirdAnswer->isCorrect = $isThird;
        
        $fourthAnswer->answer = $question['fourth_choice'];
        $fourthAnswer->isCorrect = $isFourth;
        
        $data = [
            "questionID" => $question['id'],
            "question" => $question['question'],
            "answer" => [
                $firstAnswer,
                $secondAnswer,
                $thirdAnswer,
                $fourthAnswer,
            ]
        ];

        return $data;
    }

?>