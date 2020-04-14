var player = document.querySelector('#voix');
player.play();

document.getElementById('texte').onkeyup = function()
{
    let texte = document.getElementById('texte').value;
    document.getElementById('copie').value = texte;

    verif();
};

document.getElementById('effacer').onclick = function () {

    document.getElementById('texte').value = "";
    document.getElementById('copie').value = "";
};

function aide1() {
    document.getElementById("phraseaide").setAttribute('style', 'display:block; font-family: trajan; color: #F8AA22; font-size: 15px; margin-top: 20px; margin-bottom: -43px;')
}

function aide2() {
    document.getElementById("phraseaide").setAttribute('style', 'display:none; font-family: trajan; color: #F8AA22; font-size: 15px; margin-top: 20px; margin-bottom: -20px;')
}

function verif() {

    console.log(document.getElementById('copie').value);

    if ((document.getElementById('copie').value === "EBMOT") || (document.getElementById('copie').value === "ebmot") || (document.getElementById('copie').value === "Ebmot"))
    {
        document.location.href='../Melodie0.php';
    }
}
