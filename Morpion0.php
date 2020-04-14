<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix8.wav"></audio>

    <div class="container" style="margin-top: 200px;">
        <p class="textscenario heading">Une stèle gravée semble égayer votre curiosité,</p>
        <p class="textscenario heading">celle-ci nécessite votre réflexion !</p>


        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Morpion.php" class="btn_hiero3 mr-auto">OK</a>
        </div>
    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>


<?php include "Complate/footer.php"?>