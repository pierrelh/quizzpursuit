<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/assets/header-quizz.php");
    ?>
    <body>

        <div class="page-logo">
            <h1>Quizz Pursuit</h1>
        </div>

        <div class="quizz-body">

            <div>
                <a class="quit btn" onclick="confirmExit()" href="#">Quitter<span class="mdi mdi-close-box"></span></a>
            </div>

            <div>
                <img class="image-question" src="<?php echo $link ?>/images/question.svg" alt="deux personnes avec un point d'interrogation">
            </div>
            
            <div class="question-box">
                <p id="questionNumber">Question 1/10</p>
                <p id="quizzQuestion" class="question">Chargement...</p>
            </div>

            <div class="answers">
                <form role="form" id="quizform" name="quizform" method="post">
                    <label class="radiocontainer" id="label1" for="1">
                        <span id="reponse1">Réponse 1</span>
                        <input required type="radio" name="quiz" id="1" value="1">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radiocontainer" id="label2" for="2">
                        <span id="reponse2">Réponse 2</span>
                        <input required type="radio" name="quiz" id="2" value="2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radiocontainer" id="label3" for="3">
                        <span id="reponse3">Réponse 3</span>
                        <input required type="radio" name="quiz" id="3" value="3">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radiocontainer" id="label4" for="4">
                        <span id="reponse4">Réponse 4</span>
                        <input required type="radio" name="quiz" id="4" value="4">
                        <span class="checkmark"></span>
                    </label>

                    <button id="nextButton" class="answerbutton" type="button">Suivant</button>
                </form>
            </div>
            
        </div>

        <script src="<?php echo $link ?>/scripts/call.js"></script>
        <script>function confirmExit() { if (confirm("Êtes-vous sur de vouloir quitter le quizz ?\nVotre progression sera perdue.")) {window.location.href = "<?php echo $link ?>"};}</script>

    </body>
</html>