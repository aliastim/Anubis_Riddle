<?php include "Complate/header.php"?>

    <div class="container" style="margin-top: 50px;">
        <h1 class="title heading0">ENIGME 8</h1>

        <audio id="voix" src="Ressources/49_Goblin's_Cave.mp3"></audio>

        <div class="heading text-center" style="margin-top: 90px;">

            <div class="row d-flex justify-content-center">

                <div class="col-4 col-lg-2 qua2"><input class="inptCA in1" id="A1" onkeyup="verif()"></div>
                <div class="col-4 col-lg-2 qua2"><input class="inptCA in2" id="A2" onkeyup="verif()"></div>
                <div class="col-4 col-lg-2 qua2"><input class="inptCA in3" id="A3" onkeyup="verif()"></div>

            </div>
            <div class="row d-flex justify-content-center">

                <div class="col-4 col-lg-2 qua2"><input class="inptCA in4" id="B1" onkeyup="verif()"></div>
                <div class="col-4 col-lg-2 qua2"><input class="inptCA in5" id="B2" onkeyup="verif()"></div>
                <div class="col-4 col-lg-2 qua2"><input class="inptCA in6" id="B3" onkeyup="verif()"></div>

            </div>
            <div class="row d-flex justify-content-center">

                <div class="col-4 col-lg-2 qua2"><input class="inptCA in7" id="C1" onkeyup="verif()"></div>
                <div class="col-4 col-lg-2 qua2"><input class="inptCA in8" id="C2" onkeyup="verif()"></div>
                <div class="col-4 col-lg-2 qua2"><input class="inptCA in9" id="C3" onkeyup="verif()" value="3"></div>

            </div>

        </div>



    </div>

    <script type="application/javascript" src="template/script8.js"></script>
<?php include "Complate/footer.php"?>