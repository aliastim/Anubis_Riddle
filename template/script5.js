var player = document.querySelector('#voix');
player.play();

document.getElementById('btn1').onclick = function()
{
    document.getElementById('input1').value = 1;
    document.getElementById('compteur').value= parseInt(document.getElementById('compteur').value) + parseInt(1);
    verif();
};

document.getElementById('btn2').onclick = function()
{
    document.getElementById('input2').value = 1;
    document.getElementById('compteur').value= parseInt(document.getElementById('compteur').value) + parseInt(1);
    verif();
};

document.getElementById('btn3').onclick = function()
{
    document.getElementById('input3').value = 1;
    document.getElementById('compteur').value= parseInt(document.getElementById('compteur').value) + parseInt(1);
    verif();
};

document.getElementById('btn4').onclick = function()
{
    document.getElementById('input4').value = 1;
    document.getElementById('compteur').value= parseInt(document.getElementById('compteur').value) + parseInt(1);
    verif();
};

function verif() {

    console.log(document.getElementById('input1').value);
    console.log(document.getElementById('input2').value);
    console.log(document.getElementById('input3').value);
    console.log(document.getElementById('input4').value);

    if ((document.getElementById('input1').value === "1") && (document.getElementById('input2').value === "1") && (document.getElementById('input3').value === "1") && (document.getElementById('input4').value === "1"))
    {
        /*alert("gagné !");*/
        var zone1 = document.getElementById('zoneafairedisparaitre');
        zone1.setAttribute('style', 'display:none');

        var zone2 = document.getElementById('zoneafaireapparaitre');
        zone2.setAttribute('style', 'display:block');
        zone2.innerHTML = '<p class="textscenario heading" style="margin-top: 300px;">Ose toucher la mort 3 fois !</p>';

        setInterval("document.location.href='../Quadrillage0.php'", 3000) /*Redirige après 3 secondes*/
        /*document.location.href='../Mensonge0.php';*/
    }
}
