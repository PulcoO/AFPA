
//////////// Js non natif ==> J.queries ////////////
const side1 = $('.side-1'); // Recherche dans le Dom la class side 1 en html
const side2 = $('.side-2'); // Recherche dans le Dom la class side 2 en html
const signInF = $('.sign-in fieldset'); // recherche dans le DOM Html l'élément ayant pour direction sign-in et pour classe fieldset
const signUpF = $('.sign-up fieldset'); // recherche dans le DOM Html l'élément ayant pour direction sign-up et pour classe fieldset


//ici possibilité de fonctionner via une fonction clic acceptant un paramètre (event) permettant de fonctionner avec un if, else si besoin.

$('.side-1 .toggle-log').click(function () { //Mise en place de réponse clic pour le bouton toggle log situé dans la side 1
  side1.css({ 'transform': 'rotateY(180deg)', 'background-position': '100%' }); // Viens modifier les paramètres dans le css .side1 permet la rotation
  side2.css({ 'transform': 'rotateY(0deg)', 'background-position': '100%' }); // viens modifier les paramètres dans le css .side2
  signInF.attr('disabled', 'disable'); //securité pour éviter les bugs ==> disable = TRUE
  signInF.addClass('block'); // ajoute la class="block" ==> cela permet de jouer avec la classe css correspondante : ici le déplacement horizontale ect ...
  signUpF.removeAttr('disabled'); // permet de rendre les inputs de la nouvelle page fonctionnels
  signUpF.removeClass('block'); // il faut bien penser a retirer la classe block : et pourquoi, parce que sinon l'animation meurt si je retourne une nouvelle fois la page
});
$('.side-2 .toggle-log').click(function () { //Mise en place de réponse clic pour le bouton toggle log situé dans la side 2
  side1.css({ 'transform': 'rotateY(0deg)', 'background-position': '0%' });
  side2.css({ 'transform': 'rotateY(-180deg)', 'background-position': ' 0%' });
  signInF.removeAttr('disabled');
  signInF.removeClass('block'); // retire la class="block" ==> cela permet de jouer avec la classe css correspondante : ici le déplacement horizontale ect ...
  signUpF.attr('disabled', 'disable');
  signUpF.addClass('block');
});
// Annulation de la fonction, du a l'interaction avec php, qui redigire directement sur index.php, ce qui coupe la possibilité de l'animation
// puisque la page index commence déja de l'autre coté de la page ^^

// $('.forms .input-submit').click(function () { ////Mise en place de réponse clic pour le bouton input-submit situé dans les forms (puisque il n'y en a qu'un concerné)
//   side1.css({ 'transform': 'rotateY(0deg)', 'background-position': '0%' });
//   side2.css({ 'transform': 'rotateY(-180deg)', 'background-position': ' 0%' });
//   signInF.removeAttr('disabled');
//   signInF.removeClass('block');
//   signUpF.attr('disabled', 'disable');
//   signUpF.addClass('block');
// });

//////////// Fonction clic concernant mon oeil de passeword ////////////

// function myFunction() {
//   var x = document.getElementById("myInput");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// }

// $(".input-text .style").click(function(){
//    alert("Hello!");
// });


