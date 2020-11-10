
        <div class="quizz-body">

            <div>
                <img class="image-question" src="../../images/question.svg" alt="deux personnes avec un point d'interrogation">
            </div>
            <div class="question">Chargement...</div>

            <div class="answers">
                <form role="form" id="quizform" name="quizform" method="post">
                    <label class="radiocontainer" id="label1">Réponse 1
                        <input type="radio" name="quiz" id="1" value="1">
                    </label>
                    <label class="radiocontainer" id="label2">Réponse 2
                        <input type="radio" name="quiz" id="2" value="2">
                    </label>
                    <label class="radiocontainer" id="label3">Réponse 3
                        <input type="radio" name="quiz" id="3" value="3">
                    </label>
                    <label class="radiocontainer" id="label4">Réponse 4
                        <input type="radio" name="quiz" id="4" value="4">
                    </label>

                    <button id="nextButton" class="answerbutton" type="submit">Suivant</button>
                </form>
            </div>
            
        </div>

        <script src="<?php echo $link ?>/scripts/call.js"></script>

    </body>
</html>