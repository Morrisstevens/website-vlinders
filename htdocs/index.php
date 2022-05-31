<!DOCTYPE html>
<html lang=”nl”>
<body>
<link rel="STYLESHEET" href="index.css" >
<?php

echo "Vandaag is het  " . date("d.m.y");
?>
<h1>De vlindertuin</h1>
<p> Kies een willekeurig getal om een keuze te maken welke vlinder je meer over wil zeten</p>
<button onclick="myFunction()">random getal</button>

<script>
function myFunction() {
  var number = Math.floor((Math.random() * 3) + 1);
  alert("Je random getal is " + number);
}

</script>

<p>1. Blauwe morpho</p>
<img src="Blue_Morpho.jpg" alt="blauwe morpho">

<button type="button"
onclick=window.open("https://www.burgerszoo.nl/blauwe-morpho");>
Klik voor meer info</button>

<p>2. Het boomblauwtje</p>
<img src="boomblauwtje.jpg" alt="boomblauwtje">

<button type="button"
onclick=window.open("https://www.vlinderstichting.nl/vlinders/overzicht-vlinders/details-vlinder/boomblauwtje");>
Klik voor meer info</button>

<p>3. Het landkaartje</p>
<img src="landkaartje.jpg" alt="landkaartje">

<button type="button"
onclick=window.open("https://www.vlinderstichting.nl/vlinders/overzicht-vlinders/details-vlinder/landkaartje");>
Klik voor meer info</button>

</body>
</html>
