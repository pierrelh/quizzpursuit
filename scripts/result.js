//Prevent form default action
document.getElementById("sendScore").addEventListener("click", function(event){
    event.preventDefault();
});

//When form is send
document.getElementById("sendScoreButton").addEventListener("click", function(){

    var username = document.getElementById('username').value;

    //Check if username is empty or in a non valid format
    if (username == "") {
        alert("Veuillez indiquer votre username");
        return;
    }else {
        var nameReg = /^[A-Za-z]*$/;
        if (!nameReg.test(username)) {
            alert("Veuillez ne mettre que des lettres dans votre Pseudo")
            return;
        } else {

            //Send datas if everything is fine
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
                        if (data == "true") {

                            //Create the cookie to remember the user's username
                            let date = new Date(Date.now() + 86400000);
                            date = date.toUTCString();

                            document.cookie = "SESSION_PSEUDO=" + username + "; SameSite=Strict; path=/; expires=" + date;

                            //Redirect the user to the main page
                            window.location.assign(server);
                        }else {
                            alert("Une erreur est survenue, veuillez réessayer plus tard.")
                        }
                    }
            });
        }
    }
});