var player = document.querySelector('#voix');
player.play();

document.getElementById('12').onclick = function()
{
    document.getElementById('input1').value = 12;
    verif();
};

document.getElementById('34').onclick = function()
{
    document.getElementById('input2').value = 34;
    verif();
};

document.getElementById('42').onclick = function()
{
    document.getElementById('input3').value = 42;
    verif();
};


function verif() {

    console.log(document.getElementById('input1').value);

    if ((document.getElementById('input1').value === "12") && (document.getElementById('input2').value === "34") && (document.getElementById('input3').value === "42"))
    {
        document.location.href='../formes0.php';
    }
}
