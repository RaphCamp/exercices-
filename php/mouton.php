
<?php

// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard', 60]];

// J'ajoute un mouton
array_push($moutons, ['Gérard', 120]);

//fonction qui permet de calculer rapidement à tout moment le nombre de moutons et leur moyenne
function calcul($moutons)
{
    $i = 0;
    $nbMoutons = 0;
    $sumValMoutons = 0;
    foreach ($moutons as $mouton) {
        $sumValMoutons = $sumValMoutons + $mouton[1];
        $nbMoutons++;
        $i++;
    }
    $moyValMoutons = $sumValMoutons / $i;
    echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $moyValMoutons . "</br>";
}

//je compte les 3 premiers moutons
calcul($moutons);

//fonction qui permet de rajouter un nombre de moutons à spécifier et leur attribuer des noms et valeurs aléatoires
function randomPush($nbDeMoutonsAjoutés)
{
    // Ajout de 100 moutons aléatoires
    for ($j = 0; $j < $nbDeMoutonsAjoutés; $j++) {
        $randNameMouton = "";
        $nbCharsNameMouton = rand(3, 15);
        $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
        $nbChars = strlen($chaine);
        $randValMoutons = rand(10, 200);
        for ($k = 0; $k < $nbCharsNameMouton; $k++) {
            $randNameMouton .= $chaine[rand(0, ($nbChars - 1))];
        }
        array_push($GLOBALS['moutons'], [$randNameMouton, $randValMoutons]);
    }
}

//je rajoute 100 moutons
randomPush(100);

//je recompte mes moutons 
calcul($moutons);

//Amélioration: faire une class s'il y a plusieurs enclos de moutons différents.
?>