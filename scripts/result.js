document.getElementById("sendScore").addEventListener("click", function(event){
    event.preventDefault()
  });

document.getElementById("sendScoreButton").addEventListener("click", function(){
    var username = document.getElementById('username').value;
    if (username == "") {
        alert("Veuillez indiquer votre username");
        return;
    }else {
        var nameReg = /^[A-Za-z]*$/;
        if (!nameReg.test(username)) {
            alert("Veuillez ne mettre que des lettres dans votre Pseudo")
            return;
        } else {
            var formData = new FormData();
            formData.append("username", username);
            formData.append("score", document.getElementById('userScore').innerHTML);
            var server = "https://" + window.location.hostname;
            $.ajax({
                    url: server + "/functions/score/sendScore.php",
                    type: "POST",
                    dataType: 'script',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(data){
                        if (data != false) {
                            window.location.replace = server;
                        }else {
                            alert("Une erreur est survenue, veuillez réessayer plus tard.")
                        }
                    }
            });
        }
    }
});