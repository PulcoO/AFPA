///////////////////////////////////////LES VARIABLES///////////////////////////////////////////

let contact;


//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////// Objets /////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

class Contact  {
    constructor (nom, prenom) {
      this.nom = nom;
      this.prenom = prenom;
    }
    description(){
        return `Nom : ${this.nom}, Prenom : ${this.prenom}`;
    }
};

// Tableau des contacts//
var tableauContacts = [];

//.push //


tableauContacts.push(new Contact ("Lewiss", "Carole"));
tableauContacts.push(new Contact ("Nel", "Mélodie"));

//contacts.push(new Contact ("Levis","Carole"));
//contacts.push(new Contact ("Nelson", "Melodie"));

////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////// FUNCTION /////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

function listeContacts() {
    console.log("Voici la liste de tous vos contacts :");
    for (let i=0; i< tableauContacts.length;i++){
        console.log(tableauContacts[i].description());
    }
    console.log("");
}

function ajoutContact() {
    var nom = prompt("Entrez le nom du nouveau contact :");
    var prenom = prompt("Entrez le prénom du nouveau contact :");
    tableauContacts.push(new Contact(nom , prenom));
    console.log("Le nouveau contact a été ajouté");
}

function option() {
    console.log ("1 : Voulez vous afficher les contacts préalablement entrés ?");
    console.log ("2 : Voulez vous ajouter un contact");
    console.log ("0 : Voulez vous quitter le gestionnaire de Contact ?");
    
}

////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////// PROGRAMME ////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

alert ("Bienvenue sur le gestionnaire de Contact");
console.log("Bienvenue sur le gestionnaire de Contact");

option();

// variable choix //
let choix = prompt("Choississez une option :");
// Debut de la boucle choix !=0 //
while (choix !== "0" ){
    // Switch en fonction de choix, case 1 et 2) mieux avec if else if else
    switch (choix){
        case "1":
        console.log(listeContacts());
        option();
        choix = prompt("Choississez une option :");
        break;
        case "2":
        console.log(ajoutContact());
        option();
        choix = prompt("Choississez une option :");
        break;
        console.log("Ce n'est pas une choix possible");
    }


     
}console.log("Au revoir");

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// FIN DU PROGRAMME ///////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////