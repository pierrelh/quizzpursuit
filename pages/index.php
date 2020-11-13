<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/assets/header-index.php");
    ?>
    <body>
        <div class="page-logo">
            <h1><a href="<?php echo $link ?>">Quizz Pursuit</a></h1>
        </div>
        
        <div class="homepage-body">
            <div>
                <img class="image-start" src="<?php echo $link ?>/images/quizz1.svg" alt="">
            </div>
            
            <div class="start-button">
                <a href="<?php echo $link ?>/quizz">Lancer un <span>quizz</span></a>
            </div>

            <div class="description">
                <p>Quizz de culture générale : 10 questions, 4 choix de réponse, 1 seule bonne réponse !</p>
            </div>

            <div class="leaderboard">
                <h2>
                    <span class="mdi mdi-trophy"></span>
                    Leaderboard
                    <span class="mdi mdi-trophy"></span>
                </h2>
                <ul id="leaderboardList" class=leaderboard-list></ul>
            </div>

            <div class="other-quizz">
                <a id="otherQuizz" href="<?php echo $link ?>/other-quizz">Autres quizz</a>
            </div>

            <div class="description other">
                <p>Quizz sur d'autres sujets, provenant de sources différentes. Quizz Pursuit n'est pas responsable du contenu de ces quizz.</p>
            </div>

        </div>
        
        <script src="<?php echo $link ?>/scripts/leaderboard.js"></script>

    </body>

</html>

