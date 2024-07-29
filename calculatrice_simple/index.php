<?php 
//Calculatrice Simple: Def loo xam ne mën nga ci def opérations mathématiques yu simple 
//(plus, moins, fois, divisé). 
//Li day jëfandikoo variables, conditions, ak fonctions.

function calculer ($nombre1,$nombre2,$operation){
    switch($operation){
        case'+' :
            return $nombre1 + $nombre2;
        case '-' :
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1*$nombre2;
        case '/':
            if($nombre2!=0){
                return $nombre1/$nombre2;
            }else{
                return "erreur, division par 0 impossible";
            }
        default:
            return "opération invalide";
            
    }
}

//utilisation
$operation1 = calculer(10,5,'+');
$operation2 = calculer(10,5,'-');
$operation3 = calculer(10,5,'*');
$operation4 = calculer(10,5,'/');

echo "les résultats sont : <br> $operation1 <br> $operation2 <br> $operation3 <br> $operation4 <br>";