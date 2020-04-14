<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix5.wav"></audio>

    <div class="container marge-haute">
        <p class="textscenario heading">Félicitations ! Vous êtes à moitié chemin,</p>
        <p class="textscenario heading">mais la suite risque de vous surprendre</p>
        <p class="textscenario heading">nous allons voir si vous avez le sens du détail !</p>


        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Differences.php" class="btn_hiero3 mr-auto">OK</a>
        </div>

    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>


<?php include "Complate/footer.php"?>