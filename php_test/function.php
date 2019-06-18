<?php
///////////////// VARIABLE GLOBAL //////////////////////////
$msg_error = 'erreur !!!! repeat the operation, fuck u';
$msg_error_again = "AGAIN";

/////////////////// LE PALINDROME ///////////////////////

function palindrome ($str){
    $str = strtolower($str);
    $longueur = strlen($str)-1;
    $palindrome = true;
        for ($i=0;$i<strlen($str)/2;$i++){
            if($str[$i] != $str[$longueur-$i]){
                $palindrome = false;
                break;
            }
        };  
        if ($palindrome){
            return "est un palindrome";
        }else{
            return "n'est pas un palindrome";
        }
}  

//////////////////////////// LA SOMME ////////////////////

function somme ($array){
    $somme = 0;
    for ($i=0;$i<count($array);$i++){
        $somme += $array[$i];
    }
    return $somme;
}
///////////////////// Recherche de lettres //////////////
function function2($str) {
    $str=clean($str); // on élimine les caractères spéciaux et autres espaces de $str
    $alpha="abcdefghijklmnopqrstuvwxyz";
    $alpha=str_split($alpha);
    $occ="00000000000000000000000000";
    $occ=str_split($occ);
    for ($i=0;$i<sizeof($occ);$i++) {
        $occ[$i]=intval($occ[$i]);
    }
    $str=strtolower($str);
    $currentMaxIndex=0;
    $nbrOfMax=0;
    $currentMax=0;
    for ($i=0;$i<strlen($str);$i++) {
        for ($j=0;$j<sizeof($alpha);$j++)
        {
            if ($alpha[$j]==$str[$i]) {
                $occ[$j]++;
            }
        }
    }
    for ($i=0;$i<sizeof($alpha);$i++) {
        if ($occ[$i]>$currentMax) {
            $currentMax=$occ[$i];
            $currentMaxIndex=$i;
            $maxOcc[$nbrOfMax]=$alpha[$i];
        }
    }
    for ($i=0;$i<sizeof($alpha);$i++) {
        if ($occ[$i]==$currentMax) {
            $maxOcc[$nbrOfMax]=$alpha[$i];
            $nbrOfMax++;
        }
    }
    if ($currentMax!=0) {
        if (sizeof($maxOcc)==1) {
            echo 'Le caractère le plus occurent est "'.$maxOcc[0].'" et il apparaît '.$currentMax.' fois';
        }
        else {
            echo 'Les caractères les plus occurrents sont : " ';
            for ($i=0;$i<sizeof($maxOcc);$i++) {
                echo $maxOcc[$i].' ';
            }
            echo '", et ils apparaissent '.$currentMax.' fois';
        }
    }
    else {
        echo 'Erreur';
    }
}

function clean($string) {
    $string = str_replace(' ', '', $string); // Removes all spaces.
    return preg_replace('/[^A-Za-z\-]/', '', $string); // Removes special chars.
 }

if (isset($_POST['string1']) && $_POST['string1']!='') {
    $string1 = $_POST['string1'];
    function1($string1);
    echo '<br/>';
    function2($string1);
}
///////////////////// TABLEAU ASSOCIATIF ////////////////
function calcul($chaine){

    $mesOccurences=array();
    $valmax=0;
    for ($i=0;$i<strlen($chaine);$i++) {
        //echo $chaine[$i]."<br/>";
        // ajouter une entree dans tableau comme cle la lettre et avec valeur à 1
        if(! isset($mesOccurences[$chaine[$i]])){
            $mesOccurences[$chaine[$i]]=1;
            // si la lettre exite dans mon tableau, j incremente sa valeur , sinon je la rajoute à 1
            for($j=$i+1;$j<strlen($chaine);$j++){
                if($chaine[$i]==$chaine[$j]){
                    $mesOccurences[$chaine[$i]]++;
                }
            }
        }
       
        // ici nous avons un tableau qui prend en compte toute les occurences de lettres et leur nombre de fois associé ! 
        // ce qu'il faut faire c'est trouvé ici la valeur max du tableau, la rentré dans un tableau avec son index
        // puis comparer ce max une nouvelle fois avec l'ensemble du tableau pour vérifier les égalités, et push dans le tableau ces correspondantes égales.
    }
        print_r($mesOccurences);
        $ocs = array ();
        $valmax = $mesOccurences[$chaine[0]];
        echo "<br>". $valmax . " comme valeur max.";

        for ($i=1;$i<count($mesOccurences);$i++){
            if ( $mesOccurences[$chaine[$i]] > $valmax){
                $valmax = $mesOccurences[$chaine[$i]];
                echo "<br>". $valmax . " comme valeur max.";

            }
            
        }
        $ocs[$chaine] = $mesOccurences;
        for ($i=0;$i<count($mesOccurences);$i++){
            if ( $mesOccurences[$chaine[$i]] = $valmax ){
                array_push($ocs, $mesOccurences[$chaine[$i]]);
                print_r($ocs);
            }
        }
    }
///////////////////// DECOUPAGE STRING ////////////////////
function decoupageStr($str, $indexD, $indexF){

    if ((($indexD > strlen($str)) && ($indexD >= 0)) || ((($indexF > strlen($str))) && ($indexF >= 0))) {
        
        echo 'kjoofsoko';

    }else{
        
        for($i = $indexD;$i <= $indexF; $i++){
            echo ($str[$i]);
        }
    }
}
////////////////////////// ELECTRICAL DECHARGE //////////////
function electrical_decharge($str){
    $random = rand(0, count($str));
    echo $str[$random] . ' ' . 'se prend de plein fouet l\'attaque tonnerre de Pikachu';  
}
//////////////////// BONJOUR ///////////////////////
function bonjour($nom){
    echo 'Bonjour' . ' '. $nom . '<br>';
}
///////////////// RECHERCHE INDEX ////////////////////
function rechercheIndex($str,$int){
    if ($int >= strlen($str)){
        echo 'Ta mère';
    }else{
        return $str[$int];
    }  
}
///////////////// REMPLISSAGE TABLEAU ////////////////////
function remplissage_tableau (){
    $saisieCorrect = false;
    $msg_error = 'erreur !!!! repeat the operation, fuck u';
    $msg_error_again = "AGAIN";
    do{
        $int = readline ("Entrer la nombre de valeurs voulu, a introduire dans le tableau: ");
        if(($int == 0) || (is_numeric($int == false)) || ($int < 0 )){
            echo $msg_error. ' !';
            echo "\n";
            $msg_error .= ' ' .$msg_error_again;
        }else{
            $saisieCorrect=true;
        }
    }while (!$saisieCorrect);
    
    
    for($i=0;$i<$int;$i++){
        $array[$i] = readline('Entrer la valeur '.($i+1).', à introduire dans le tableau : ');
    }
    return $array;
}
///////////////// FIND NUMBER IN ARRAY ////////////////////
function findNumber($intrecherche,$array){
    $findIt = false;
    for ($i=0;$i<count($array);$i++){
        if ($array[$i] == $intrecherche){
            $findIt = true;
            return $findIt;
            break;
        }
    }
    return $findIt;
}
/////////////////// Saisir et verification entier //////////////////
function saisirInteger(){
    $saisieCorrect = false;
    do {
        $int = readline("integer please : ");
        if(is_numeric($int)==false){
            echo 'erreur !!!! repeat the operation, fuck u';
        } else {
            $saisieCorrect=true;
        }
    }while (!$saisieCorrect);
    return $int;
}
////////////////////////////////////////////////////////////////////////////////////
///////////////////// TABLEAU BOOLEEN ////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////


///////////////////// REMPLISSAGE TABLEAU BOOLEEN ////////////////////////
function remplissage_tableau_booleen (){
    $saisieCorrect = false;
    $msg_error = 'erreur !!!! repeat the operation, fuck u';
    $msg_error_again = "AGAIN";
    do{
        $int = readline ("Entrer la nombre de valeurs voulu, a introduire dans le tableau: ");
        if(($int == 0) || (is_numeric($int == false)) || ($int < 0 )){
            echo $msg_error. ' !';
            echo "\n";
            $msg_error .= ' ' .$msg_error_again;
        }else{
            $saisieCorrect=true;
        }
    }while (!$saisieCorrect);
    
    
    
    for($i=0;$i<$int;$i++){
        $saisieCorrect = false;
        do{
            $saisie= readline ("Entrer la valeur Booléenne V/F ". ($i+1)." : ");

                if(strtolower($saisie) == "v"){
                    $bool = true;
                    $saisieCorrect=true;
                    $arrayBool[$i]= $bool;

                }elseif(strtolower($saisie) == "f"){
                    $bool = false;
                    $saisieCorrect=true;
                    $arrayBool[$i]= $bool;

                }else{
                    echo $msg_error. ' !';
                    echo "\n";
                    $msg_error .= ' ' .$msg_error_again;
                }
        }while($saisieCorrect == false);
    }
    return $arrayBool;
}
///////////////////// REMPLISSAGE TABLEAU BOOLEEN >1 ////////////////////////
function remplissage_tableau_booleen_sup_a_1(){
    $saisieCorrect = false;
    $msg_error = 'erreur !!!! repeat the operation, fuck u';
    $msg_error_again = "AGAIN";
    do{
        $arrayBool=remplissage_tableau_booleen();

        if((count($arrayBool)) < 1){
            echo $msg_error. ' !';
            echo "\n";
            $msg_error .= ' ' .$msg_error_again;
        }else{
            $saisieCorrect=true;
        }
    }while($saisieCorrect=false);

    return $arrayBool;
}
//////////////////////// Calcul booléen d'un tableau conjonction ////////////////////
function calculBooleenConjonction($arrayBool){
	$conjonction = $arrayBool[0];
    for ($i=1; $i <count($arrayBool) ; $i++){ 
	    $conjonction&=$arrayBool[$i]; // and
	}
    return $conjonction;
}
//////////////////////// Calcul booléen d'un tableau disjonction ////////////////////
function calculBooleenDisjonction($arrayBool){
	$disjonction = $arrayBool[0];
    for ($i=1; $i <count($arrayBool) ; $i++)
    { 
	    $disjonction|=$arrayBool[$i]; // or
	}
    return $disjonction;
}
/////////////////////////////// Bool impaire False //////////////////////////////
function putFalseInImpaireIndexOfBoolArray($arrayBool){
    
    for ($i=1;$i<count($arrayBool);$i+=2){
        $arrayBool[$i] = false;
    }
    return $arrayBool;
}
//////////////////////////////// trouve lettre //////////////////////////////////////
function findLetter ($letter,$string){
    if (strlen($string) == 0){
        return false;
    }elseif ($string[0]== $letter){
        return true;
    }else{
        return findLetter($letter,substr($string,1));
    }
}
//////////////// nombre d'occurence ////////
function nombreOccurences($letter,$string,$cpt){
    if (strlen($string) == 0){
        return $cpt;
    }elseif ($string[0]=== $letter){
        $cpt++;
        return nombreOccurences($letter,substr($string,1),$cpt);
    }else{
        return nombreOccurences($letter,substr($string,1),$cpt);
    }
}
/////////////////////// nombre d'occurence sans variable d'entrée //////////////////////
function lettreMotOccurence($letter,$string)
{
    if (strlen($string) > 0) 
    {
        if ($string[0] == $letter)
        {
            return (1+lettreMotOccurence($letter,substr($string,1)));
        }
        return (lettreMotOccurence($letter,substr($string,1)));
    }
    return 0;
}

//////////////////////////// Fonction Recherche dictionnaire ////////////////////////////
function rechercheDisctionnaire ($word){

}

///////////////////////////  function str to upper per line /////////////////////
function str_to_upper_per_line ($str){
    if (strlen ($str) == 0){
        echo "error";
    }else{
        for ($i =0; $i< strlen($str); $i++){
            echo (strtoupper($str[$i]) . "<br>");
        }
    }
}
//////////////////////////// function afficher les deux pair after //////////////
function two_pair_after($int){
    $arraypair = Array (2);
    if (($int % 2) == 0){
        $arraypair[0] = $int +2;
        $arraypair[1] = $int +4;
        return $arraypair;
    }else{
        $arraypair[0] = $int +1;
        $arraypair[1] = $int +3;
        return $arraypair;
    }
}
//////////////////////////////// max_integer_uneven_index ///////////////////////
function max_integer_uneven_index ($arrayOfInt){
    if ((count($arrayOfInt)) == 0){
        return " Error ! Votre tableau est vide ! ";
    }else{
        $max = $arrayOfInt[1];
        for ($i=3;$i<count($arrayOfInt);$i+=2){
            if ($arrayOfInt[$i]> $max){
                $max = $arrayOfInt;
            }
        }    
    }
    return $max;
}
/////////////////////////// multiplication_of_two_integer ////////////////////////
function multiplication_of_2_integer ($intA,$intB){
    $resultat = 0;

    if (($intA == 0) || ($intB == 0)){
        return $resultat;
    }else{
        for ($i=0; $i<abs($intA); $i++){
            $resultat += abs($intB);  
        }
    }

    if (($intA < 0) || ($intB < 0)){
        $resultat = -($resultat);
        return $resultat;
    }else{
        return $resultat;
    }
    
}
///////////////////////// occurence bool dans tableau bool //////////////////////
function occurence_bool_in_array_of_bool ($arrayOfBool, $bool){
    $cpt = 0;
    if (count($arrayOfBool) == 0){
        return "votre tableau est vide";
    }else{
        for ($i=0; $i<count($arrayOfBool); $i++){
            if ($arrayOfBool[$i] == $bool){
                $cpt ++;
            }
        }
        return "Votre tableau de boolèen contient" . " " . $cpt . " " . "fois, la valeur boolèene" . " " . (($bool)?'true':'false') . ".";
    }
}
