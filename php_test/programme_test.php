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

str_to_upper_per_line("aBc");
print_r(two_pair_after(5));
echo max_integer_uneven_index([5,1,6]);
echo multiplication_of_2_integer(5,4);
echo occurence_bool_in_array_of_bool([true,false,true], true);