<!DOCTYPE html>
<html>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/assets/header-results.php");
    ?>
    <body>

        <div class="page-logo">
            <h1><a href="<?php echo $link ?>">Quizz Pursuit</a></h1>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo $link ?>/scripts/confetti.min.js"></script>
        <script>confetti.start(2500, 200, 400)</script>

        <div class="results-body">

            <div class="score-section">
                <h2>Votre score</h2>
                <div class="score-box">
                    <p id="userScore" class="score"><?php echo $_COOKIE['SESSION_SCORE'] ?></p>
                    <p>%</p>
                </div>
            </div>

            <div class="username-section">
                <form id="sendScore" action="" method="post">
                    <label for="username">Votre pseudo :</label>
                    <input placeholder="Pseudo" class="username-input" value="<?php if (isset($_COOKIE['SESSION_PSEUDO'])) {echo $_COOKIE['SESSION_PSEUDO'];} ?>" type="text" name="username" id="username">    
                    <button id="sendScoreButton" type="submit">Enregistrer</button>          
                </form>
            </div>
            
        </div>

        <script src="<?php echo $link ?>/scripts/result.js"></script>

    </body>

</html>