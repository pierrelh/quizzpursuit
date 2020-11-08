// Fetch data from PHP file
var server = "https://" + window.location.hostname;
fetch(server + "/functions/getQuestions/getQuestions.php")
  .then((response) => response.json())
  .then(function (response) {

    console.log(response);

    // Loop in json
    var key = 0;
    var count = 0
    var val;
    var radios;

    addQuestion();
      submitbutton.onclick = function() {
        form = document.getElementById("quizform");
        // get list of radio buttons with specified name
        radios = form.elements["quiz"];
        
        // loop through list of radio buttons
        for (var i=0, len=radios.length; i<len; i++) {
            if ( radios[i].checked ) { // radio checked?
                val = radios[i].value; // if so, hold its value in val
                break; // and break out of for loop
            }
        }
        console.log(response[key].answer);
        if (val == response[key].answer) {
          count++
        }
        key++
        if (key == 10) {
          window.alert("Le score est de " + count + "/10");
        }
        addQuestion();
        submitbutton = document.getElementsByClassName('answerbutton')[0];
      }
      
    function addQuestion()
    {
        if (response.hasOwnProperty(key)) {
          console.log(response[key].question);
          
          // Replace dummy question with current question in loop
          document.getElementsByClassName('question')[0].innerHTML = response[key].question;

          // Empty the anwser form
          form = document.getElementById("quizform");
          form.innerHTML = "";

          //////////////////
          // First answer //
          //////////////////

          // Create <label> element
          var label = document.createElement("LABEL");
          label.classList.add("radiocontainer");
          label.id = "label1"

          // Create <span> element
          var span = document.createElement("SPAN");
          span.innerText = response[key].first_choice;

          // Create <input> element
          var input = document.createElement("INPUT");
          input.type = "radio";
          input.name = "quiz";
          input.id = 1;
          input.value = "1";
          
          input.setAttribute("required", "");

          // Create second <span> element
          var spanbis = document.createElement("SPAN");
          spanbis.classList.add("checkmark");

          label.appendChild(span);
          label.appendChild(input);
          label.appendChild(spanbis);

          ///////////////////
          // Second answer //
          ///////////////////

          // Create <label> element
          var label2 = document.createElement("LABEL");
          label2.classList.add("radiocontainer");
          label2.id = "label2"

          // Create <span> element
          var span2 = document.createElement("SPAN");
          span2.innerText = response[key].second_choice;

          // Create <input> element
          var input2 = document.createElement("INPUT");
          input2.type = "radio";
          input2.name = "quiz";
          input2.id = 2;
          input2.value = "2";
          input2.setAttribute("required", "");

          // Create second <span> element
          var spanbis2 = document.createElement("SPAN");
          spanbis2.classList.add("checkmark");

          label2.appendChild(span2);
          label2.appendChild(input2);
          label2.appendChild(spanbis2);

          //////////////////
          // Third answer //
          //////////////////

          // Create <label> element
          var label3 = document.createElement("LABEL");
          label3.classList.add("radiocontainer");
          label3.id = "label3"

          // Create <span> element
          var span3 = document.createElement("SPAN");
          span3.innerText = response[key].third_choice;

          // Create <input> element
          var input3 = document.createElement("INPUT");
          input3.type = "radio";
          input3.name = "quiz";
          input3.id = 3;
          input3.value = "3";
          input3.setAttribute("required", "");

          // Create second <span> element
          var spanbis3 = document.createElement("SPAN");
          spanbis3.classList.add("checkmark");

          label3.appendChild(span3);
          label3.appendChild(input3);
          label3.appendChild(spanbis3);

          ///////////////////
          // Fourth answer //
          ///////////////////

          // Create <label> element
          var label4 = document.createElement("LABEL");
          label4.classList.add("radiocontainer");
          label4.id = "label4"

          // Create <span> element
          var span4 = document.createElement("SPAN");
          span4.innerText = response[key].fourth_choice;

          // Create <input> element
          var input4 = document.createElement("INPUT");
          input4.type = "radio";
          input4.name = "quiz";
          input4.id = 4;
          input4.value = "4";
          input4.setAttribute("required", "");

          // Create second <span> element
          var spanbis4 = document.createElement("SPAN");
          spanbis4.classList.add("checkmark");

          label4.appendChild(span4);
          label4.appendChild(input4);
          label4.appendChild(spanbis4);

          ////////////
          // Button //
          ////////////

          var button = document.createElement("BUTTON");
          button.classList.add("answerbutton");
          button.innerText = "Suivant";
          button.type = "button";
          

          /////////////////
          // Insert html //
          /////////////////

          form.appendChild(label);
          form.appendChild(label2);
          form.appendChild(label3);
          form.appendChild(label4);
          form.appendChild(button);
        }

      }

      
     
  });

