// ------------------//
// bouton back to top  //
// ------------------//

// appel de la fonction d'affichage
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    // si le dosument est scrollé plus de 20 px affichage du bouton  
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("backToTop").style.display = "block";
    // sinon on affiche pas le bouton
  } else {
    document.getElementById("backToTop").style.display = "none";
  }
}

// retour vers le haut lors du click
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 