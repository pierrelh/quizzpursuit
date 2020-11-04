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
        $firstAnswer->answer = $question['first_choice'];
        $firstAnswer->isCorrect = $isFirst;
        $firstAnswer = json_encode($firstAnswer);

        $secondAnswer->answer = $question['second_choice'];
        $secondAnswer->isCorrect = $isFirst;
        $secondAnswer = json_encode($secondAnswer);
        
        $thirdAnswer->answer = $question['third_choice'];
        $thirdAnswer->isCorrect = $isFirst;
        $thirdAnswer = json_encode($thirdAnswer);
        
        $fourthAnswer->answer = $question['fourth_choice'];
        $fourthAnswer->isCorrect = $isFirst;
        $fourthAnswer = json_encode($fourthAnswer);
        
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