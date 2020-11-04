
        <div class="quizz-body">

            <div>
                <img class="image-question" src="../../images/question.svg" alt="deux personnes avec un point d'interrogation">
            </div>
            <div class="question">Question blablabla lorem ipsum dolor machin</div>

            <div class="answers">
                <form role="form" id="quizform" name="quizform" action="quiztest.asp?qtest=HTML" method="post">
                    <label class="radiocontainer" id="label1"> Home Tool Markup Language
                        <input type="radio" name="quiz" id="1" onclick="clickRadio(this)" value="1">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radiocontainer" id="label2"> Hyperlinks and Text Markup Language
                        <input type="radio" name="quiz" id="2" onclick="clickRadio(this)" value="2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radiocontainer" id="label3"> Hyper Text Markup Language
                        <input type="radio" name="quiz" id="3" onclick="clickRadio(this)" value="3">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radiocontainer" id="label4"> Hyper Text Markup Language
                        <input type="radio" name="quiz" id="4" onclick="clickRadio(this)" value="4">
                        <span class="checkmark"></span>
                    </label>

                    <button class="answerbutton" type="submit" onclick="clickNextButton(1)">Suivant</button>
                </form>
            </div>
            
        </div>

    </body>
</html>