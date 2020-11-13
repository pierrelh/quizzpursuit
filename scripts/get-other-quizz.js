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
            for (var i=0, len=radios.length; i<len; i++) {
                if ( radios[i].checked ) { // radio checked?
                    val = parseInt(radios[i].value) - 1; // if so, hold its value in val
                    radios[i].checked = false; //reseting the checkmark
                    break; // and break out of for loop
                }
            }

            var answers = response[key].answers;
            if (answers[val].isCorrect) {
                count++
            }

            key++
            if (key == response.length) {
                var score = count / key * 100;
                //Create the cookie to remember the user's username
                let date = new Date(Date.now() + 3600);
                date = date.toUTCString();
                
                document.cookie = "SESSION_SCORE=" + score.toString() + "; SameSite=Lax; path=/; expires=" + date;
                
                //Redirect the user to the main page
                window.location.assign(server + "/other-results");
                
            }

            addQuestion();
        });
        
        function addQuestion()
        {
            if (response.hasOwnProperty(key)) {
                // Replace dummy question with current question in loop
                document.getElementById('quizzQuestion').innerHTML = response[key].question;

                // get list of radio buttons with specified name
                labels = document.getElementsByName("formLabel");

                var answers = response[key].answers;

                for (let index = 0; index < labels.length; index++) {
                    var id = "reponse" + (index + 1);
                    if (answers[index].answer != undefined) { //Check if there is an answer for the label
                        document.getElementById(id).innerText = answers[index].answer; //Fill the label with the answer
                    }else {
                        document.getElementById(id).remove(); //Delete the label if there is no answer
                    }

                }

            }

        }
        
  });

