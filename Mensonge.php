<?php include "Complate/header.php"?>

    <div class="container marge-haute">
        <h1 class="title heading">ENIGME 3</h1>

        <audio id="voix" src="Ressources/119_Spire_Amaranth_a.mp3"></audio>

        <div class="heading text-center">

            <img src="Ressources/PYRAMIDE.png" class="img-fluid img-pyramide">

            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mx-auto">

                    <input id="texte" onkeyup="texte = (this.value);" style="width: 100%; margin-top: 50px; font-family: volt; font-size: 50px; color: black;  border-radius: 20px 20px 20px 20px;">

                </div>

                <div class="col-12 col-md-6 col-lg-4 mx-auto">

                    <input id="copie" disabled class="inputrecopie">

                </div>

            </div>

            <div class="col-md-4 mx-auto heading" style="margin-top: 100px;">

                <button class="btn_hiero2" id="effacer">EFFACER</button>

            </div>

            <button class="btn-EN3 heading" onmouseover="aide1()" onmouseout="aide2()">?</button>

            <p id="phraseaide" style="display:none; font-family: trajan; color: #F8AA22; font-size: 15px; margin-top: 20px;">Le pharaon (se) retourne dans sa tombe</p>

        </div>



    </div>

    <script type="application/javascript" src="template/script3.js"></script>
<?php include "Complate/footer.php"?>