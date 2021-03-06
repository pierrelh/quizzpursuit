// Fetch data from PHP file
var server = "https://" + window.location.hostname;
fetch(server + "/functions/score/getLeaderboard.php")
  .then((response) => response.json())
  .then(function (response) {

    var leaderBoardList = document.getElementById("leaderboardList");
    
    // Loop in json
    for (const key in response)
      (function (key) {
        if (response.hasOwnProperty(key)) {

          // Create <li> element
          var li = document.createElement("li");
          li.innerHTML = "#" + (+key + 1) + " " + response[key].username + " - " + response[key].score + "%"
          leaderBoardList.appendChild(li);

        }
      })(key);
  });

