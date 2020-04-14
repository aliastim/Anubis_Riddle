var player = document.querySelector('#voix');
player.play();

document.getElementById('Do').onclick = function()
{
    var player = document.querySelector('#SON_DO');
    document.getElementById('input').value = document.getElementById('input').value + "DO";
    verif(); player.play();
};

document.getElementById('Re').onclick = function()
{
    var player = document.querySelector('#SON_RE');
    document.getElementById('input').value = document.getElementById('input').value + "RE";
    verif(); player.play();
};

document.getElementById('Mi').onclick = function()
{
    var player = document.querySelector('#SON_MI');
    document.getElementById('input').value = document.getElementById('input').value + "MI";
    verif(); player.play();
};

document.getElementById('Fa').onclick = function()
{
    var player = document.querySelector('#SON_FA');
    document.getElementById('input').value = document.getElementById('input').value + "FA";
    verif(); player.play();
};

document.getElementById('Sol').onclick = function()
{
    var player = document.querySelector('#SON_SOL');
    document.getElementById('input').value = document.getElementById('input').value + "SOL";
    verif(); player.play();
};

document.getElementById('La').onclick = function()
{
    var player = document.querySelector('#SON_LA');
    document.getElementById('input').value = document.getElementById('input').value + "LA";
    verif(); player.play();
};

document.getElementById('Si').onclick = function()
{
    var player = document.querySelector('#SON_SI');
    document.getElementById('input').value = document.getElementById('input').value + "SI";
    verif(); player.play();
};

document.getElementById('Do2').onclick = function()
{
    var player = document.querySelector('#SON_DO_AIGU');
    document.getElementById('input').value = document.getElementById('input').value + "DO2";
    verif(); player.play();
};

document.getElementById('effacer').onclick = function () {

    document.getElementById('input').value = "";
};

function verif() {

    console.log(document.getElementById('input').value);

    if (document.getElementById('input').value === "RESOLLADO2")
    {
        var player = document.querySelector('#SON_COMPLET');
        player.play();
        setInterval("document.location.href='../Differences0.php'", 3000) /*Redirige après 3 secondes*/
        /*document.location.href='../Mensonge0.php';*/
    }
}

/*
function play_DO2 () {
    var player = document.querySelector('#SON_DO');
    player.play();
}
*/
/*

document.getElementById('Do').onclick = function()
{
    var player = document.querySelector('#SON_DO');
    player.play();
};*/