<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix1.wav"></audio>

    <div class="container marge-haute">
        <p class="textscenario heading">Vous rentrez dans le lieu où se</p>
        <p class="textscenario heading">déroulera la première énigme, vous devez </p>
        <p class="textscenario heading">résoudre le mystère du sarcophage d’Anubis.</p>
        <p class="textscenario heading">Arriverez vous à résoudre cette énigme ?!</p>


        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Introduction.php" class="btn_hiero3 mr-auto">OK</a>
        </div>



    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>



<?php include "Complate/footer.php"?>