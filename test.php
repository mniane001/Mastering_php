<?php

//code php bi fii leu
echo " assalamouhalaykoum aduna ! <br>" ;


//variable
$tour  = "Mouhamed" ;
$at = 26;

echo "sama tour moy $tour te amna $at at <br>";

//condition 
$at = 26;
if ($at >= 18){
    echo "légui mague nga , meune nga voter <br>";
}else{
    echo "xalé nga, meunago voter <br>";
}

//Boucle
for ($i = 1; $i<=5; $i++){
    echo "numéro bi moy $i <br>";
}

//fonctions 
function waxtane($tour){
    echo "na nga def $tour, mba yaa nguissi diam";
}

echo waxtane ("Seynabou");

?>