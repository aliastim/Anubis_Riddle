<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix10.wav"></audio>

    <div class="container marge-haute">
        <p class="textscenario heading">Bien joué voyageur !<br>Vous pouvez vous féliciter d’être parvenu jusqu’ici, mais la pyramide souhaite vous soumettre à un dernier dilemme. Choisirez vous de vivre et d'abandonner votre partenaire ou bien de vous sacrifier pour lui laisser la vie ?</p>

        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Final.php" class="btn_hiero3 mr-auto">OK</a>
        </div>

    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>



<?php include "Complate/footer.php"?>