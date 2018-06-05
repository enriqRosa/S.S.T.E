//--------------------Ventanas Modales boton btn-pass---------------------------------------
$( document ).ready(function() {
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
  //--------------------Ventanas Modales boton btn-editar---------------------------------------
  $( document ).ready(function() {
  console.log("Modal LISTA");    
      $('.btn-editar').on('click', function(){
          $('.editar-modal').addClass('visible');
          $('body').addClass('scrollNO');
          console.log("Abrir Modal");
      })
      $('.close-fancy').on('click', function(){
          $(this).closest('.editar-modal').removeClass('visible');  
          $('body').removeClass('scrollNO');
      });
  
  })
//--------------------Ventanas Modales boton btn-status---------------------------------------
   $( document ).ready(function() {
  console.log("Modal LISTA");    
      $('.btn-status').on('click', function(){
          $('.editar-status').addClass('visible');
          $('body').addClass('scrollNO');
          console.log("Abrir Modal");
      })
      $('.close-fancy').on('click', function(){
          $(this).closest('.editar-status').removeClass('visible');  
          $('body').removeClass('scrollNO');
      });
  
  })
 //--------------------Ventanas Modales para el registro de seguimiento tutorial-------------------------- 
 $( document ).ready(function() {
  console.log("Modal LISTA");    
      $('.btn-registar').on('click', function(){
          $('.registar-modal').addClass('visible');
          $('body').addClass('scrollNO');
          console.log("Abrir Modal");
      })
      $('.close-fancy').on('click', function(){
          $(this).closest('.registar-modal').removeClass('visible');  
          $('body').removeClass('scrollNO');
      });
  
  })