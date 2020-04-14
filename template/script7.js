var player = document.querySelector('#voix');
player.play();

document.getElementById('input').onkeyup = function()
{
    let input = document.getElementById('input').value;

    verif();
};

function verif() {

    console.log(document.getElementById('input').value);

    if ((document.getElementById('input').value === "Crocodile") || (document.getElementById('input').value === "CROCODILE") || (document.getElementById('input').value === "crocodile"))
    {
        /*alert("test");*/
        document.location.href='../Morpion0.php';
    }
}
