<?php include "Complate/header.php"?>

    <audio id="ambiance" src="Ressources/9_Before_The_Storm.mp3"></audio>

    <div class="container text-center" style="margin-top: 50px;">
        <h1 class="title heading" style="color: #F8AA22; margin-bottom: 50px;">VICTOIRE</h1>
        <img src="Ressources/balance.png" class="img-fluid heading" style="max-height: 300px;">
        <p class="textscenario heading" style="margin-top: 50px;">Vous avez tous les deux choisi le sacrifice, ce qui est une qualité rare. Anubis vous laisse la vie sauve.</p>


    </div>

    <script type="application/javascript">
        var player = document.querySelector('#ambiance');
        player.play();
    </script>

<?php include "Complate/footer.php"?>