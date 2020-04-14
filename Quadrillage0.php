<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/Voix6.wav"></audio>

    <div class="container marge-haute">
        <p class="textscenario heading">Maintenant, vous allez devoir faire</p>
        <p class="textscenario heading">face à un code mais encore faut-il faut comprendre</p>
        <p class="textscenario heading">à quoi il sert et comment l’utiliser, réfléchissez !</p>


        <div class="heading text-center" style="width: 100%; margin-top: 100px;">
            <a href="Quadrillage.php" class="btn_hiero3 mr-auto">OK</a>
        </div>

    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>

<?php include "Complate/footer.php"?>