<?php include "Complate/header.php"?>

    <div class="container text-center" style="margin-top: 50px;">
        <h1 class="title heading">ENIGME 5</h1>

        <input class="inptcompteur heading text-center" disabled style="margin-top: 60px;" id="compteur" value="0">

        <audio id="voix" src="Ressources/82_Nightmare.mp3"></audio>

        <div class="heading" style="margin-top: -120px;">

            <div class="row" id="zoneafairedisparaitre">

               <img src="Ressources/Diff%204.png" class="img-fluid image-diff mx-auto" style="margin-top: 50px;">

                <button class="bouton-diff1" style="/*background: red;*/" id="btn1"></button>
                <button class="bouton-diff2" style="/*background: orange;*/" id="btn2"></button>
                <button class="bouton-diff3" style="/*background: blue;*/" id="btn3"></button>
                <button class="bouton-diff4" style="/*background: blueviolet;*/" id="btn4"></button>

                <input type="hidden" id="input1">
                <input type="hidden" id="input2">
                <input type="hidden" id="input3">
                <input type="hidden" id="input4">


                <div class="col-md-12 text-center heading" style="margin-top: 0px;">

                    <p class="textscenario2">Ton partenaire est bloqué à l'énigme 4 : "Clique en haut à gauche puis en haut à droite"</p>

                </div>

            </div>

            <div style="display: none" id="zoneafaireapparaitre">


            </div>



        </div>





    </div>

    <script type="application/javascript" src="template/script5.js"></script>
<?php include "Complate/footer.php"?>