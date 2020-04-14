<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix7.wav"></audio>

    <div class="container marge-haute">
        <p class="textscenario heading">Vous trouvez une étrange statue au centre d’un</p>
        <p class="textscenario heading">mystère lié aux dieux, celle-ci semble</p>
        <p class="textscenario heading">pouvoir vous être utile pour cette énigme.<br><br></p>
        <p class="textscenario heading">(De quoi peut-il bien s'agir ?)</p>


        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="formes.php" class="btn_hiero3 mr-auto">OK</a>
        </div>
    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>



<?php include "Complate/footer.php"?>