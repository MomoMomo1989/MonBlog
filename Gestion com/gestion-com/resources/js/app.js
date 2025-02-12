import './bootstrap';
function confirmDelete() {
    return confirm("Voulez-vous vraiment supprimer cet élément ?");
}
document.getElementById("barcode").addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault(); // Empêche le formulaire de se soumettre immédiatement
        console.log("Code-barres scanné : ", this.value);
    }
});

document.addEventListener('effacer-erreur', function () {
    setTimeout(() => {
        let messageErreur = document.getElementById('messageErreur');
        if (messageErreur) {
            messageErreur.style.transition = "opacity 0.5s";
            messageErreur.style.opacity = "0";
            setTimeout(() => messageErreur.remove(), 500);
        }
    }, 3000);
});