var container = document.getElementById('rain-container');

for (var i = 0; i < 100; i++) {
  var raindrop = document.createElement('div');
  raindrop.classList.add('raindrop');
  container.appendChild(raindrop);
}



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
    document.getElementById('play').addEventListener('click', function() {
      // Effectuer ici les actions souhaitées lors du clic sur le bouton Play
      // Par exemple, vous pouvez utiliser JavaScript pour envoyer les données à la base de données
    });
  });
  


  
  