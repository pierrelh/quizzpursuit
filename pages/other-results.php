        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/mathusummut/confetti.js/confetti.min.js"></script>
        <script>confetti.start(2500, 200, 400)</script>

        <div class="results-body">

            <div class="score-section">
                <h2>Votre score</h2>
                <div class="score-box">
                    <p id="userScore" class="score"><?php echo $_COOKIE['SESSION_SCORE'] ?></p>
                    <p>%</p>
                </div>
            </div>
            
        </div>

    </body>

    <script src="<?php echo $link ?>/scripts/result.js"></script>

</html>