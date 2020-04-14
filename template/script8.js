var player = document.querySelector('#voix');
player.play();

function verif() {

    //console.log(document.getElementById('input').value);

    if ((document.getElementById('A1').value === "0") && (document.getElementById('A2').value === "2") && (document.getElementById('A3').value === "1") && (document.getElementById('B1').value === "1") && (document.getElementById('B2').value === "1") && (document.getElementById('B3').value === "1") && (document.getElementById('C1').value === "2") && (document.getElementById('C2').value === "1") && (document.getElementById('C3').value === "3"))
    {
        /*alert("test");*/
        document.location.href='../Equation0.php';
    }
}
