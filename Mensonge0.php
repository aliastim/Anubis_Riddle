<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix3.wav"></audio>

    <div class="container marge-haute">
        <!--<p class="textscenario heading">Vous arrivez devant une grande porte en pierre fermée</p>
        <p class="textscenario heading">Devant celle-ci se trouve une stelle, il vous semble que vous</p>
        <p class="textscenario heading"> devez écrire quelque chose ! Mais quoi ?!</p>-->

        <p class="textscenario heading">Vous avancez mais la traduction n’est pas finie,</p>
        <p class="textscenario heading"> donc faites attention aux détails et méfiez-vous !<br><br></p>

        <p class="textscenario heading">(Aucune information ne vous a été donnée)</p>

        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Mensonge.php" class="btn_hiero3 mr-auto">OK</a>
        </div>

        <script type="application/javascript">
            var player = document.querySelector('#ambiance');
            player.play();
        </script>


    </div>



<?php include "Complate/footer.php"?>