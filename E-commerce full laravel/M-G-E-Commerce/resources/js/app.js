import './bootstrap';

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