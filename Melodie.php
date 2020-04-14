<?php include "Complate/header.php"?>

    <div class="container marge-haute">
        <h1 class="title heading">ENIGME 4</h1>

        <audio id="voix" src="Ressources/39_Temple_of_the_Eye.mp3"></audio>

        <div class="heading">

            <div class="row">

                <audio id="SON_DO" src="Ressources/Egypte%20Do%20plus%20grave.wav"></audio>
                <audio id="SON_RE" src="Ressources/Egypte%20son%20RÉ.wav"></audio>
                <audio id="SON_MI" src="Ressources/Egypte%20mi.wav"></audio>
                <audio id="SON_FA" src="Ressources/Egypte%20fa.wav"></audio>
                <audio id="SON_SOL" src="Ressources/Egypte%20son%20SOL.wav"></audio>
                <audio id="SON_LA" src="Ressources/Egypte%20son%20LA.wav"></audio>
                <audio id="SON_SI" src="Ressources/Egypte%20SI.wav"></audio>
                <audio id="SON_DO_AIGU" src="Ressources/Egypte%20son%20DO.wav"></audio>

                <audio id="SON_COMPLET" src="Ressources/Egypte%20son%20complet.wav"></audio>

                <div class="col-md-12 text-center" style="margin-top: 50px;">

                    <button class="btn_meldodie" id="Do">Do</button>
                    <button class="btn_meldodie" id="Re">Re</button>
                    <button class="btn_meldodie" id="Mi">Mi</button>
                    <button class="btn_meldodie" id="Fa">Fa</button>
                    <button class="btn_meldodie" id="Sol">Sol</button>
                    <button class="btn_meldodie" id="La">La</button>
                    <button class="btn_meldodie" id="Si">Si</button>
                    <button class="btn_meldodie" id="Do2">Do</button>

                </div>

                <div class="col-md-4 mx-auto">

                    <input id="input" disabled style="width: 100%; margin-top: 50px; font-family: hieroglyphe; font-size: 50px; color: black; display: none;">

                </div>

            </div>

            <div class="col-md-4 mx-auto btnrecmelodie">

                <button class="btn_hiero2" id="effacer">RECOMMENCER</button>

            </div>

        </div>

        <div class="col-md-12 text-center heading" style="margin-top: 20px;">

            <p class="textscenario2">Ton partenaire est bloqué à l'énigme 3 :<br>"Clique sur le symbole de la plume"</p>

        </div>



    </div>

    <script type="application/javascript" src="template/script4.js"></script>
<?php include "Complate/footer.php"?>