// Fetch data from PHP file
var server = "https://" + window.location.hostname;
fetch(server + "/functions/getQuestions/getQuestions.php")
  .then((response) => response.json())
  .then(function (response) {

    console.log(response);

    // Loop in json

    for (const key in response)
      (function (key) {
        if (response.hasOwnProperty(key)) {
          console.log(response[key].question);
          
          // Replace dummy question with current question in loop
          document.getElementsByClassName('question')[0].innerHTML = response[key].question;

          // Empty the anwser form
          document.getElementById("quizform").innerHTML = "";

          //////////////////
          /* First answer */
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
          input.value = 1;

          // Create second <span> element
          var spanbis = document.createElement("SPAN");
          spanbis.classList.add("checkmark");

          span.appendChild(label);
          input.append(span);
          spanbis.append(input);

          ///////////////////
          /* Second answer */
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
          input2.value = 2;

          // Create second <span> element
          var spanbis2 = document.createElement("SPAN");
          spanbis2.classList.add("checkmark");

          span2.appendChild(label2);
          input2.append(span2);
          spanbis2.append(input2);

          //////////////////
          /* Third answer */
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
          input3.value = 3;

          // Create second <span> element
          var spanbis3 = document.createElement("SPAN");
          spanbis3.classList.add("checkmark");

          span3.appendChild(label3);
          input3.append(span3);
          spanbis3.append(input3);

          ///////////////////
          /* Fourth answer */
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
          input4.value = 4;

          // Create second <span> element
          var spanbis4 = document.createElement("SPAN");
          spanbis4.classList.add("checkmark");

          span4.appendChild(label4);
          input4.append(span4);
          spanbis4.append(input4);

          ////////////////
          /* Merge html */
          ////////////////

          label2.append(label);
          label3.append(label2);
          label4.append(label3);

          // insert html
          document.getElementById("quizform").appendChild(label);
        }
      })(key);
  });

