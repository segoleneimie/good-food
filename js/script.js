// -------------------------//
// formulaire candidat/collab //
// --------------------------//


// sélection du formulaire collab 
elmt = document.getElementsByClassName("collab");
formcollab=elmt[0];
// rend le formulaire non visible
formcollab.style.display = 'none';
// sélectionne le formulaire candiat
form=document.getElementsByClassName("candidat");
formcandidat=form[0];
// sélectionne le lien vers le formulaire collaborateur
lien=formcandidat.getElementsByTagName('div');
liencollab=lien[1];
//lorsque l'on clique sur le lien le formulaire candidat disparait et le collab devient visible
liencollab.addEventListener('click', function(event){
    // sélectionne le formulaire candiat
	elmt=document.getElementsByClassName("candidat");
    formcandidat=elmt[0];
 // le formulaire candidat disparait
    formcandidat.style.display="none";

        elmt = document.getElementsByClassName("collab");
    formcollab=elmt[0];
// rend le formulaire  visible
    formcollab.style.display = '';
});

//sélection du lien vers form cadidat
formulaire = document.getElementsByClassName("collab");
formulaire=formulaire[0];
lien = formulaire.getElementsByTagName('div');
liencandidat=lien[0];

liencandidat.addEventListener('click', function(event){
    // sélectionne le formulaire collab
    elt=document.getElementsByClassName("collab");
    formcollab=elt[0];
 // le formulaire collab disparait
    formcollab.style.display="none";
// sélection formulaire candidat
    elmt = document.getElementsByClassName("candidat");
    formccandidat=elmt[0];
// rend le formulaire  visible
    formccandidat.style.display = '';
});

// ------------------//
// bouton back to top  //
// ------------------//

// // appel de la fonction d'affichage
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//     // si le dosument est scrollé plus de 20 px affichage du bouton  
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     document.getElementById("myBtn").style.display = "";
//     // sinon on affiche pas le bouton
//   } else {
//     document.getElementById("myBtn").style.display = "none";
//   }
// }

// // retour vers le haut lors du click
// function topFunction() {
//   document.body.scrollTop = 0; // For Safari
//   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
// } 