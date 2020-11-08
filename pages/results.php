
        <script src="https://cdn.jsdelivr.net/gh/mathusummut/confetti.js/confetti.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>confetti.start(2500, 200, 400)</script>

        <div class="results-body">

            <div class="score-section">
                <h2>Votre score</h2>
                <div class="score-box">
                    <p id="userScore" class="score">90</p>
                    <p>%</p>
                </div>
            </div>

            <div class="username-section">
                <form id="sendScore" action="" method="post">
                    <label for="username">Votre pseudo :</label>
                    <input pattern="[A-Za-z]" class="username-input" type="text" name="username" id="username">    
                    <button id="sendScoreButton" type="submit">Enregistrer</button>          
                </form>
            </div>
            
        </div>

    </body>

    <script src="<?php echo $link ?>/scripts/result.js"></script>

</html>