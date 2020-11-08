function setLeaderboard(users) {
    for (let i = 0; i < users.length; i++) {
        console.log(users[i]);        
    }
}

document.getElementById("sendScoreButton").addEventListener("click", function(){
    $.ajax({
        url: server + "/functions/score/getLeaderboard.php",
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            if (data != "false") {
                setLeaderboard(data);
            }else {
                console.log("Warning: Chargement du leaderboard impossible.")
            }
        }
    });
});