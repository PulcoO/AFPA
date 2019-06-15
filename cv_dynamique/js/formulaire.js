



// Fonction clic sur le button "envoyer moi un message"//
var BtnForm = $('.button-text');
var divBtnForm = $('.send-message');
var fieldset = $('.formulaire fieldset');

$(document).ready(function(){
  $('.button-text').click(function () {
    
    console.log ("le clic fonctionne");
    fieldset.removeAttr('disabled');
    $('.send-message').animate({
      
      left: '-750px',
      opacity:0
    },"slow");
    
    $('send-message').css ({'display':'none'});
    $('.sayHi').fadeIn(3000);
    $('.formulaire fieldset').animate({
      right: '-200px',
      opacity: '0.5' 
    }, "slow");
    $('.formulaire fieldset').animate({
      right: '-100px',
      opacity: '0.8' 
    }, "slow");
    $('.formulaire fieldset').animate({
      right: '0px',
      opacity: '1' 
    }, "slow");
    
    
  })  
});
$(document).ready(function(){
  $('input-submit').click(function (){
    console.log("le buttton fonctionne bien");
    fieldset.attr('disabled', 'disable');
    $('formulaire fieldset')


  })
});


