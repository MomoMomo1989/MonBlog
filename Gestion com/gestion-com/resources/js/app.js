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