var container = document.getElementById('rain-container');
var numRaindrops = 100;
var animationDuration = 4; // Durée totale de l'animation en secondes

for (var i = 0; i < numRaindrops; i++) {
  var raindrop = document.createElement('div');
  raindrop.classList.add('raindrop');
  raindrop.style.left = Math.random() * 100 + '%';
  
  // Calculer le délai d'animation pour chaque goutte en fonction de son index et de la durée totale
  var animationDelay = (i * animationDuration) / numRaindrops;
  raindrop.style.animationDelay = animationDelay + 's';
  
  raindrop.style.height = Math.random() * (100 - 20) + 20 + 'px'; // Taille aléatoire entre 20px et 100px
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
  });


  
  