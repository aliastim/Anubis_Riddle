<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix9.wav"></audio>

    <div class="container marge-haute">
        <p class="textscenario heading">Vous découvrez sur le sol un papyrus sur lequel</p>
        <p class="textscenario heading">vous pouvez distinguer quelques symboles,</p>
        <p class="textscenario heading">mais de quoi peut-il bien s'agir ?</p>


        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Equation.php" class="btn_hiero3 mr-auto">OK</a>
        </div>

    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>


<?php include "Complate/footer.php"?>