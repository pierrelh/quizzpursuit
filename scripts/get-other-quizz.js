// Fetch data from PHP file
var server = "https://" + window.location.hostname;
fetch(server + "/api/out/questions/getQuestions.php")
    .then((response) => response.json())
    .then(function (response) {

        console.log(response);

        // Loop in json
        var key = 0;
        var count = 0
        var val;
        var radios;

        addQuestion();
        
        document.getElementById("nextButton").addEventListener("click", function(event){
            form = document.getElementById("quizform");
            // get list of radio buttons with specified name
            radios = form.elements["quiz"];
                
            // loop through list of radio buttons
            for (var i = 0, len = radios.length; i < len; i++) {
                if ( radios[i].checked ) { // radio checked?
                    val = parseInt(radios[i].value) - 1; // if so, hold its value in val
                    radios[i].checked = false; //reseting the checkmark
                    break; // and break out of for loop
                }
            }

            var answers = response[key].answers;
            //Break if user asn't choose an answer
            if (val == undefined) {
                alert("Veuillez choisir une réponse.")
                return;
            }else if (answers[val].isCorrect) {
                count++
            }

            key++
            if (key == response.length) {
                var score = Math.round(count / key * 100);
                //Create the cookie to remember the user's username
                let date = new Date(Date.now() + 3600);
                date = date.toUTCString();
                
                document.cookie = "SESSION_SCORE=" + score.toString() + "; SameSite=Lax; path=/; expires=" + date;
                
                //Redirect the user to the main page
                window.location.assign(server + "/other-results");
                
            }
            //Reseting val
            val = undefined
            addQuestion();
        });
        
        function addQuestion()
        {
            if (response.hasOwnProperty(key)) {
                // Replace dummy question with current question in loop
                document.getElementById('quizzQuestion').innerHTML = response[key].question;

                // get list of radio buttons with specified name
                var labels = document.getElementsByName("formLabel");

                var answers = response[key].answers;

                for (var index = 0; index < labels.length; index++) {
                    var labelId = "label" + (index + 1);
                    if (answers[index] != undefined) { //Check if there is an answer for the label
                        var spanId = "reponse" + (index + 1);
                        document.getElementById(spanId).innerText = answers[index].answer; //Fill the label with the answer
                        document.getElementById(labelId).style.display = "flex"; //Hide the label if there is no answer
                    }else {
                        document.getElementById(labelId).style.display = "none"; //Hide the label if there is no answer
                    }

                }

            }

        }

  });

