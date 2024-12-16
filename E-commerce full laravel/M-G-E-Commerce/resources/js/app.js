import './bootstrap';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

document.addEventListener("DOMContentLoaded",()=>{
    console.log("ok")
    const masqueFlash = document.querySelector('#flash-message')
    if (masqueFlash)
        setTimeout(() => {
            masqueFlash.style.display ='none';
        }, 2000);
})

window.changeImg = function (el , x) {
   const change = el.querySelector("#img-menu")
   change.src = x
}

window.reduireMen = function (){
    const menu = document.querySelector("#menu-lat")
    const afficheBtn = document.querySelector('#reparedMenu')
    afficheBtn.style.display = "block"
    menu.classList.remove('meni-width2')
    menu.classList.add('meni-width') 
    menu.addEventListener("transitionend", function () {
        menu.style.display = "none";
      }, { once: true });
}
window.functO = function (el , x){
    const change = el.querySelector("#img-menu2")
   change.src = x
}
// window.appairMen = function (){
//     const menu = document.querySelector("#menu-lat")
//     const afficheBtn = document.querySelector('#reparedMenu')
//     afficheBtn.style.display = "none"
//     menu.classList.remove('meni-width')
//     menu.classList.add('meni-width2') 
//     menu.addEventListener("transitionend", function () {
//         menu.style.display = "flex";
//       }, { once: true });
// }
window.appairMen = function () {
    const menu = document.querySelector("#menu-lat");
    const afficheBtn = document.querySelector("#reparedMenu");
    afficheBtn.style.display = "none";
    menu.style.display = "flex";
    setTimeout(() => {
        menu.classList.remove("meni-width");
        menu.classList.add("meni-width2");
      }, 100);
  };

  window.afficheSousMenu = function(id1,id2,id3){
    const funct1 = document.querySelector('#'+id1);
    const funct2 = document.querySelector('#'+id2);
    const funct3 = document.querySelector('#'+id3);
    funct1.classList.toggle('border-menu-admin');
    funct2.classList.toggle('menu-opt-cls');
    funct3.classList.toggle('hid-sous-menu');
    funct3.classList.toggle('active-sous-menu');
    
    // if (funct3.classList.contains('active-sous-menu')) {
    //     // Masquer le sous-menu avec une transition
    //     funct3.style.height = funct3.scrollHeight + 'px'; // Définir la hauteur actuelle
    //     funct3.offsetHeight; // Forcer un reflow
    //     funct3.style.height = '0'; // Transition vers 0
    //     funct3.classList.remove('active-sous-menu');

    //     setTimeout(() => {
    //         funct3.classList.add('hid-sous-menu');
    //     }, 500); // Correspond à la durée de la transition
    // } else {
    //     // Afficher le sous-menu avec une transition
    //     funct3.classList.remove('hid-sous-menu');
    //     funct3.style.height = funct3.scrollHeight + 'px'; // Définir la hauteur du contenu
    //     funct3.classList.add('active-sous-menu');

    //     // Une fois la transition terminée, enlever la hauteur définie pour autoriser la flexibilité
    //     setTimeout(() => {
    //         funct3.style.height = 'auto';
    //     }, 500);
    // }
  }