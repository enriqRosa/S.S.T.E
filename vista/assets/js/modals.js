$( document ).ready(function() {
  //--------------------Ventanas Modales---------------------------------------
  console.log("Modal LISTA");    


      $('.btn-pass').on('click', function(){
          $('.pass-modal').addClass('visible');
          $('body').addClass('scrollNO');
          console.log("Abrir Modal");
      })
      $('.close-fancy').on('click', function(){
          $(this).closest('.pass-modal').removeClass('visible');  
          $('body').removeClass('scrollNO');
      });
  
  })