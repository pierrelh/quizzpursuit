<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    var formData = new FormData();
    formData.append("username", "TestPierre");
    formData.append("score", 50);
    JSON.stringify(Object.fromEntries(formData));
    $.ajax({
        url: "https://polar-ocean-73785.herokuapp.com/score",
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        success: function(data){
            alert("Le script à bien été envoyé !")
        }
    });

</script>