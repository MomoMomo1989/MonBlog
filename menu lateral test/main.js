let currentMenu = null;

function toggleMenu(menuId) {
    const submenu = document.getElementById(menuId);
    
    // Si le menu actuel est ouvert, le fermer
    if (currentMenu && currentMenu !== submenu) {
        currentMenu.style.display = 'none';
    }
    
    // Basculer l'état du sous-menu
    if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
    } else {
        submenu.style.display = 'block';
    }

    // Mettre à jour le menu actuellement ouvert
    currentMenu = submenu.style.display === 'block' ? submenu : null;
}