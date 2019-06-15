////////////////////////////// Animation /////////////////////////

function competencesAnimate(iconeToAnime,functionHide){
    iconeToAnime.animate({left :'0px', opacity: 1},"veryfast");
    functionHide(iconeToAnime);
}
function functionHide(iconeToAnime){
    iconeToAnime.hide();
}
///////////////////////////////// Anchor pagination //////////////////////////////////
(function() {

    $('a[href*=#]:not([href=#])').click(function() {
    
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    
    var target = $(this.hash);
    
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    
    if (target.length) {
    
    $('html,body').animate({scrollTop: target.offset().top}, 1000);
    
        return false;
        }
      }  
    }); 
  });
  
// $(".icone-generales").animate({
//     left :'0px',
//     opacity: 1
//   },"veryfast",function(){
//     $(".icone-generales").fadeIn({
//     },"veryfast");
//   });
  
//   $(".icone-outils").animate({
//     left :'0px',
//     opacity: 1
//   },"veryfast",function(){
//     $(".icone-outils").fadeIn({
//     },"veryfast");
//   });
  
//   $(".icone-frameworks").animate({
//     left : '0px',
//     opacity: 1
//   },"veryfast",function(){
//     $(".icone-frameworks").fadeIn({
//     },"veryfast");
//   });

// }else if ((buttonsId == "btn-generales") || (buttonsId == "p-generales")){
//   console.log("btn genrales fonctionne");
//   $(".btn").removeClass("active");
//   $(this).addClass("active");
  
//   $(".icone-languages").animate(
//     {transform: "scale(0)", opacity: 0.5},1,'linear');
  
//   $(".icone-outils").animate(
//     {left :'-1000px', opacity: 0, duration: 1000},150,
//     function(){$(".icone-outils").hide({delay:1000});}
//   );

//   $(".icone-frameworks").animate(
//     {left :'-1000px', opacity: 0, duration: 1000},"150",
//     function(){$(".icone-frameworks").hide({delay:1000});}
//   );

//     //fade in
//   $(".icone-generales").animate(
//     { opacity: 1, left :'0px', duration: 1000},"150",
//     function(){$(".icone-generales").fadeIn({delay:1000},'150');}
//   );

// }else if ((buttonsId == "btn-languages") || (buttonsId == "p-languages")){
//   console.log("btn languages fonctionne");
//   $(".btn").removeClass("active");
//   $(this).addClass("active");

//   $(".icone-generales").animate({
//     left :'-750px',
//     opacity:0
//   },"slow",function() {
//     $(".icone-generales").hide();
//     });

//   $(".icone-outils").animate({
//     left :'-750px',
//     opacity:0
//   },"slow",function() {
//     $(".icone-outils").hide();
//     });

//   $(".icone-frameworks").animate({
//     left : '-750px',
//     opacity:0
//   },"slow",function() {
//     $(".icone-frameworks").hide();
//     });

//     //fade in
//   $(".icone-languages").animate({
//       opacity: 1,
//       left :'0px',
//   },"slow",function(){
//       $(".icone-languages").fadeIn({
//       },"slow");
//   });

// }else if ((buttonsId == "btn-outils") || (buttonsId == "p-outils")){
//   console.log("btn outils fonctionne");
//   $(".btn").removeClass("active");
//   $(this).addClass("active");
  
//   $(".icone-generales").animate({
//     left :'-750px',
//     opacity:0
//   },"slow",function() {
//     $(".icone-generales").hide();
//     });

//   $(".icone-languages").animate({
//     left :'-750px',
//     opacity:0
//   },"slow",function() {
//     $(".icone-languages").hide();
//     });

//   $(".icone-frameworks").animate({
//     left : '-750px',
//     opacity:0
//   },"slow",function() {
//     $(".icone-frameworks").hide();
//     });

//     //fade in
//   $(".icone-outils").animate({
//       opacity: 1,
//       left :'0px',
//   },"slow",function(){
//       $(".icone-outils").fadeIn({
//       },"slow");
//   });

// }else if ((buttonsId == "btn-frameworks") || (buttonsId == "p-frameworks")){
//   console.log("btn frameworks fonctionne");
//   $(".btn").removeClass("active");
//   $(this).addClass("active");
  
//   $(".icone-generales").animate({
//     left :'-750px',
//     opacity:1
//   },3000,function(){
//     $(".icone-generales").hide();
//     });

//   $(".icone-languages").animate({
//     left :'-750px',
//     opacity:1
//   },3000,function(){
//     $(".icone-languages").hide();
//     });

//   $(".icone-outils").animate({
//     left : '-750px',
//     opacity:1
//   },3000,function(){
//     $(".icone-outils").hide();
//     });

//     //fade in
//   $(".icone-frameworks").animate({
//       opacity: 1,
//       left :'0px',
//   },3000,function(){
//       $(".icone-frameworks").fadeIn({
//       });
//   });