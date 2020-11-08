        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <div class="homepage-body">

            <div>
                <img class="image-start" src="<?php echo $link ?>/images/quizz1.svg" alt="">
            </div>
            <div class="start-button">
                <a href="<?php echo $link ?>/quizz">Lancer un <span>quizz</span></a>
            </div>

            <div class="leaderboard">
                <h2>
                    <span class="mdi mdi-trophy"></span>
                    Leaderboard
                    <span class="mdi mdi-trophy"></span>
                </h2>
                <ul id="leaderboardList" class=leaderboard-list>
                </ul>
            </div>

        </div>

    </body>

    <script src="<?php echo $link ?>/scripts/leaderboard.js"></script>

</html>

