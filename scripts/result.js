document.getElementById("sendScore").addEventListener("click", function(event){
    event.preventDefault()
  });

document.getElementById("sendScoreButton").addEventListener("click", function(){
    if (document.getElementById('username').value == "") {
        alert("Veuillez indiquer votre username");
        return;
    }else {
        var formData = new FormData();
        formData.append("username", document.getElementById('username').value);
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
                    alert(data);
                }
        });
    }
});