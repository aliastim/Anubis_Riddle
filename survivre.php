<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/7_The_Desert_Awaits.mp3"></audio>

    <div class="container text-center" style="margin-top: 50px;">
        <h1 class="title heading" style="color: #F8AA22; margin-bottom: 50px;">DEFAITE</h1>
        <img src="Ressources/COUTEAU.png" class="img-fluid heading" style="max-height: 300px;">
        <p class="textscenario heading" style="margin-top: 50px;">Votre égoïsme vous a mené à votre perte ainsi qu’à celle de votre partenaire, vous voilà condamné à jamais dans ce tombeau.</p>


    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>

<?php include "Complate/footer.php"?>