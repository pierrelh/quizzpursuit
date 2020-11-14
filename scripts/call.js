// Fetch data from PHP file
var server = "https://" + window.location.hostname;
fetch(server + "/functions/getQuestions/getQuestions.php")
  .then((response) => response.json())
  .then(function (response) {

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
              val = radios[i].value; // if so, hold its value in val
              radios[i].checked = false; //reseting the checkmark
              break; // and break out of for loop
          }
      }
      //Break if user asn't choose an answer
      if (val == undefined) {
        alert("Veuillez choisir une réponse.")
        return;
      }else if (val == response[key].answer) {
        count++
      }
      key++
      if (key == response.length) { //Check if user finished the quizz
        var score = Math.round(count / key * 100);
        //Create the cookie to remember the user's username
        let date = new Date(Date.now() + 3600);
        date = date.toUTCString();
        
        document.cookie = "SESSION_SCORE=" + score.toString() + "; SameSite=Lax; path=/; expires=" + date;
        
        //Redirect the user to the main page
        window.location.assign(server + "/results");
        
      }
      //Reseting val
      val = undefined;
      addQuestion();
    });
      
    function addQuestion()
    {
        if (response.hasOwnProperty(key)) {
          // Question number
          document.getElementById('questionNumber').innerHTML = "Question " + (key+1) + "/" + (response.length+1);;
          
          // Replace dummy question with current question in loop
          document.getElementById('quizzQuestion').innerHTML = response[key].question;

          // First answer
          document.getElementById("reponse1").innerText = response[key].first_choice;

          // Second answer
          document.getElementById("reponse2").innerText = response[key].second_choice;

          // Third answer
          document.getElementById("reponse3").innerText = response[key].third_choice;

          // Fourth answer      
          document.getElementById("reponse4").innerText = response[key].fourth_choice;

        }

      }    
     
  });

