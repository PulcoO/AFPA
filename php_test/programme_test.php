<?php
include 'function.php';

//$str1 = readline('First string please: '); // Input sur console sans HTML
//$str2 = readline('Second string please: ');

//print_r (remplissage_tableau());
//echo 'le mot ' . $str1." ".palindrome($str1) . ".";

//echo findNumber(saisirInteger(),remplissage_tableau())?"le chiffre est dans le tableau":"le chiffre n'apparait pas dans le tableau";

//echo calculBooleenConjonction(remplissage_tableau_booleen())?"le tableau donne Vrai":"le tableau donne Faux";
//echo calculBooleenDisjonction(remplissage_tableau_booleen())?"le tableau donne Vrai":"le tableau donne Faux";
//print_r(putFalseInImpaireIndexOfBoolArray(remplissage_tableau_booleen()));
$letter = "a";
$string = "bbcaaaaaaaaaaaa";
//$cpt=0;
//echo findLetter($letter,$string)?"trouvé":"et ben non";
//echo nombreOccurences($letter,$string,$cpt);
$occ=lettreMotOccurence($letter,$string);
echo "Lettre trouvée ".$occ." fois";