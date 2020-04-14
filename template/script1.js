var player = document.querySelector('#voix');
player.play();

document.getElementById('A').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "A";
    verif();
};
document.getElementById('B').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "B";
    verif();
};
document.getElementById('C').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "C";
    verif();
};
document.getElementById('D').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "D";
    verif();
};
document.getElementById('E').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "E";
    verif();
};
document.getElementById('F').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "F";
    verif();
};
document.getElementById('G').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "G";
    verif();
};
document.getElementById('H').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "H";
    verif();
};
document.getElementById('I').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "I";
    verif();
};
document.getElementById('J').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "J";
    verif();
};
document.getElementById('K').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "K";
    verif();
};
document.getElementById('L').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "L";
    verif();
};
document.getElementById('M').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "M";
    verif();
};
document.getElementById('N').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "N";
    verif();
};
document.getElementById('O').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "O";
    verif();
};
document.getElementById('P').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "P";
    verif();
};
document.getElementById('Q').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "Q";
    verif();
};
document.getElementById('R').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "R";
    verif();
};
document.getElementById('S').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "S";
    verif();
};
document.getElementById('T').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "T";
    verif();
};
document.getElementById('U').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "U";
    verif();
};
document.getElementById('V').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "V";
    verif();
};
document.getElementById('W').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "W";
    verif();
};
document.getElementById('X').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "X";
    verif();
};
document.getElementById('Y').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "Y";
    verif();
};
document.getElementById('Z').onclick = function()
{
    document.getElementById('input').value = document.getElementById('input').value + "Z";
    verif();
};


document.getElementById('effacer').onclick = function () {

    document.getElementById('input').value = "";
};

function verif() {

    console.log(document.getElementById('input').value);

    if (document.getElementById('input').value === "INVERSER")
    {
        document.location.href='../Traduction0.php';
    }
}
