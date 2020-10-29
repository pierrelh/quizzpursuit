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
          console.log(response[key]);
        }
      })(key);
  });

