/////////////////////////// Scroll ancrage //////////////////////////////
		// ne fonctionne pas grrrrrrrr
////////////////////////// Animate Icones //////////////////////////////

function AnimateIcones(buttonsId){
  
  if ((buttonsId == "btn-all") || (buttonsId == "p-all")){

    console.log("le btn all fonctionne");
    $(".icone").show(1000).animate({opacity:1});


  }else if((buttonsId == "btn-generales") || (buttonsId == "p-generales")){

    console.log("le btn generales fonctionne");
    $(".icone-generales").show(1000).animate({opacity:1});

    $(".icone-languages").animate({opacity:0}).hide(1000);
    $(".icone-frameworks").animate({opacity:0}).hide(1000);
    $(".icone-outils").animate({opacity:0}).hide(1000);

  }else if((buttonsId == "btn-languages") || (buttonsId == "p-languages")){

    console.log("le btn languages fonctionne");
    $(".icone-languages").show(1000).animate({opacity:1});

    $(".icone-outils").animate({opacity:0}).hide(1000);
    $(".icone-generales").animate({opacity:0}).hide(1000);
    $(".icone-frameworks").animate({opacity:0}).hide(1000);

  }else if((buttonsId == "btn-outils") || (buttonsId == "p-outils")){

    console.log("le btn outils fonctionne");
    $(".icone-outils").show(1000).animate({opacity:1});

    $(".icone-languages").animate({opacity:0}).hide(1000);
    $(".icone-frameworks").animate({opacity:0}).hide(1000);
    $(".icone-generales").animate({opacity:0}).hide(1000);

  }else if((buttonsId == "btn-frameworks") || (buttonsId == "p-frameworks")){

    console.log("le btn frameworks fonctionne");
    $(".icone-frameworks").show(1000).animate({opacity:1});

    $(".icone-languages").animate({opacity:0}).hide(1000);
    $(".icone-outils").animate({opacity:0}).hide(1000);
    $(".icone-generales").animate({opacity:0}).hide(1000);

  }
}
///////////////////////////////// Script JS Clics //////////////////////////////////
var modal;

// Recuperer le boutton qui ouvre le modal
var buttons = document.getElementsByClassName("btn");
   
// Recuperer le boutton (le spans) qui ferme la page.
var spans = document.getElementsByClassName("close");

//icone de compétences//
var iconesGenerales = document.getElementsByClassName(".icone-generales");
var iconesLanguages = document.getElementsByClassName("icone-languages");
var iconesAll = document.getElementsByClassName("icone");
var iconesOutils = document.getElementsByClassName("icone-outils");
var iconesFrameworks = document.getElementsByClassName("icone-frameworks");

//Fonction Rumdum !!! 
// var randomSpeed = Math.round(Math.random()*200);
// var defaultSpeed = 200;
// var bounceSpeed = defaultSpeed + randomSpeed;   
    
// var randomX = Math.round(Math.random()*200);

////////////////////////////////////////////////////////////////// Function ////////////////////////////////////////////////////////////////////

 //fonction Clic pour récuperer dans le DOM (document)l'ensemble des éléments buttons de class btns (tableau) puis les trier

for (var i = 0; i < buttons.length; i++) { // for
  buttons[i].onclick = function(e){  //déclenchement de la fonction onclick pour chaque élément du tableau, mise en place de la variable e event
    var buttonsId = e.target.id; // extraction de l'id de l'élément target de l'event clic
    if (buttonsId == "btnHTML") { // début de la comparaison des id
      console.log("le button HTML fonctionne");
      modal = document.getElementById("modalHTML");
      modal.style.display = "block"; // lancer le modal
    }else if (buttonsId == "btnCSS"){
      modal = document.getElementById("modalCSS");
      modal.style.display = "block";
    }else if (buttonsId == "btnPHP"){
      modal = document.getElementById("modalPHP");
      modal.style.display = "block";
    }else if (buttonsId == "btnJS"){
      modal = document.getElementById("modalJS");
      modal.style.display = "block";
    }else if (buttonsId == "btnJAVA"){
      modal = document.getElementById("modalJAVA");
      modal.style.display = "block";
    }else if (buttonsId == "btnSQL"){
      modal = document.getElementById("modalSQL");
      modal.style.display = "block";
    }else if (buttonsId == "btnQUERY"){
      modal = document.getElementById("modalQUERY");
      modal.style.display = "block";
      // Page compétences // ne fonctionne pas ! changer de function pour plus de visibilité et changer en jquery selector
    }else if ((buttonsId == "btn-all") || (buttonsId == "p-all") || (buttonsId == "btn-generales") || (buttonsId == "p-generales") || (buttonsId == "btn-languages") || (buttonsId == "p-languages") || (buttonsId == "btn-outils") || (buttonsId == "p-outils") || (buttonsId == "btn-frameworks") || (buttonsId == "p-frameworks")){

      console.log("actif done");
      $(".btn").removeClass("active");
      $(this).addClass("active");

      AnimateIcones(buttonsId);
    } // end if competences
  } // end function clic
}; // end for

// Span close, modal
 for (var i = 0; i < spans.length; i++) {
   // lorsque l'utilisateur appui sur la spans close => fermeture du modal.
   spans[i].onclick = function(e){
     if(modal != undefined){
       modal.style.display = "none";
     }
     modal = undefined;
   }
 };

// lorsque l'utilisateur appui en dehors du cadre du modal => fermeture du modal.
// window.onclick = function(event) {
//                if (modal != undefined && event.target == modal) {
//                   modal.style.display = "none";
//                   modal = undefined;
//                }
//              }

// $(".icone-languages").fadeOut(200);
      // $(".icone-outils").fadeOut(200);
      // $(".icone-frameworks").fadeOut(200);

      // $(".icone-languages").animate({ // tentative de random
      //    left:'"+='+randomX+'"',
      //    opacity:0
      //    },bounceSpeed,
      //    "linear",
      //    function() {
      //    $(".icone-languages").hide();
      //    });