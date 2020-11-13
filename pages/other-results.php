<!DOCTYPE html>
<html>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/assets/header-results.php");
    ?>
    <body>

        <div class="page-logo">
            <h1><a href="<?php echo $link ?>">Quizz Pursuit</a></h1>
        </div>
        
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

            <div class="btn">
                <a href="<?php echo $link ?>">Revenir à l'accueil</a>
            </div>
            
        </div>

    </body>

</html>