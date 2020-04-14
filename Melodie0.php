<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix4.wav"></audio>

    <div class="container marge-haute">
        <p class="textscenario heading">Vous arrivez enfin à la salle suivante</p>
        <p class="textscenario heading">qui mettra en valeur vos talents de musicien,</p>
        <p class="textscenario heading">à vous de jouer la mélodie.</p>


        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Melodie.php" class="btn_hiero3 mr-auto">OK</a>
        </div>


    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>

<?php include "Complate/footer.php"?>