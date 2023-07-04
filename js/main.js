$(document).ready(function() {
    // Effet de fadeIn sur l'image
    $('img').fadeIn(1500);
  
    // Animation du formulaire de connexion
    $('form').hide().fadeIn(1500);
  
    // Animation des boutons de partage
    $('.btn-primary').hover(
      function() {
        $(this).addClass('animate__animated animate__pulse');
      },
      function() {
        $(this).removeClass('animate__animated animate__pulse');
      }
    );
  
    // Animation du bouton de connexion
    $('button[name="connect"]').click(function(event) {
      event.preventDefault();
      $(this).addClass('animate__animated animate__rubberBand');
      // Effectuer les actions de connexion ici
    });
  });
  