// Exo tableau inverse // 

//déclaration des variables // 

let tableau = [8,12,5,16,9,10,11,7];  
// ou const tableau = [8,12,5,16,9,10,11,7];
// ou var tableau = [8,12,5,16,9,10,11,7];

// exemple avec Boucle & utilisation d'une fonction push array

//version avec for en décrémentation
var tableauBis = []; // déclaration du tableau bis
for (i=tableau.length-1; i>=0; i--){
    
    tableauBis.push(tableau[i]);
};
console.log(tableauBis);

//version avec for en incrémentation
var tableauBis = [];
for (i=0;i<tableau.length; i++){
    tableauBis.unshift(tableau[i]);
};
console.log(tableauBis);

//nouvelle version for each, pemettant l'utilisation de fonction

var tableauBis = [];
tableau.forEach(function(element){ //specificité ici un increment est automatiquement ajouté
    tableauBis.unshift(element); // element ou nimporte quelle nom de variable prend la valeur de l'élement du tableau en fonction de l'index
}); // en O.O il est possible de choisir quelle valeurs de l'élément du tableau initial est a copié, retiré ect ... 
console.log(tableauBis); 

// ou autre version avec for in 
var tableauBis = [];

for (i in tableau){
    tableauBis.unshift(tableau[i]);
};
console.log(tableauBis);

// exo 10 du td 3


for (i=0;i<1000;i++){
    let array = [i]; // je pense qu'il est possible de directement le déclarer et le convertir en string mais il est tard ^^ 
    console.log (array);
    let arraybis = array.map(String);// ici je crée un tableau de string et non d'un nombre. 
    var somme= 0;
    console.log(arraybis);
    for (j=0;j<arraybis.length;j++){
         let nb = Number(arraybis[j]);
         console.log(nb);
         somme = somme + (nb*nb*nb);
         console.log(somme);
         if ((somme == i) && (somme !=0)) {
             console.log ( i + "est un nombre narcisse");
         };   
    };
};   

