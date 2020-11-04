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
        $secondAnswer->isCorrect = $isFirst;
        
        $thirdAnswer->answer = $question['third_choice'];
        $thirdAnswer->isCorrect = $isFirst;
        
        $fourthAnswer->answer = $question['fourth_choice'];
        $fourthAnswer->isCorrect = $isFirst;
        
        $dataSet = [
            "questionID" => $question['id'],
            "question" => $question['question'],
            "answer" => [
                $firstAnswer,
                $secondAnswer,
                $thirdAnswer,
                $fourthAnswer,
            ]
        ];

        $data->question = $dataSet;

        return $data;
    }

?>