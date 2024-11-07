import './bootstrap';

document.addEventListener("DOMContentLoaded",()=>{
    console.log("ok")
    const masqueFlash = document.querySelector('#flash-message')
    if (masqueFlash)
        setTimeout(() => {
            masqueFlash.style.display ='none';
        }, 2000);
})