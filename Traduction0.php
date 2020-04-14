<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix2.wav"></audio>

    <div class="container marge-haute">
        <!--<p class="textscenario heading">Votre coequiper a trouvé une traduction sur un papyrus !"</p>
        <p class="textscenario heading">Sur le mur devant vous est inscrit le mot <strong>"SARCOPHAGE"</strong></p>-->

        <p class="textscenario heading">La porte de l’épreuve suivante s’ouvre et vous voilà maintenant face à un ancien texte égyptien,<br>à vous de le traduire.</p>
        <p class="textscenario heading">Il est inscrit le mot <strong>"TOMBE"</strong></p>

        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Traduction.php" class="btn_hiero3 mr-auto">OK</a>
        </div>

        <script type="application/javascript">
            var player = document.querySelector('#ambiance');
            player.play();
        </script>


    </div>



<?php include "Complate/footer.php"?>