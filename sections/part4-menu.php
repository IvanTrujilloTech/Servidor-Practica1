<?php
$menuFile = 'assets/json/menu.json';
$menus = [];
if (file_exists($menuFile)) {
    $json = file_get_contents($menuFile);
    $menus = json_decode($json, true);
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Menú Restaurante</title>
    <link rel="stylesheet" href="assets/css/book.css">
</head>
<body>
<div class="book-container">
    <button class="nav-btn prev" onclick="prevPage()" title="Página anterior">&#8592;</button>
    <div class="book" id="book">
    </div>
    <button class="nav-btn next" onclick="nextPage()" title="Página siguiente">&#8594;</button>
</div>
<script>
    const menus = <?php echo json_encode($menus); ?>;
    let currentPage = 0; 
    const totalMenus = menus.length;

    function createPage(menu, side) {
        let htmlDePagina = `<div class="page ${side}">
            <div class="menu-title">${menu.title || 'Menú de la Casa'}</div>`;
        
        if (menu.dishes && Array.isArray(menu.dishes)) {
            
            menu.dishes.forEach(function(dish) {
                
                htmlDePagina += `<div class="dish">
                    <span class="dish-name">${dish.name}</span>
                    <span class="dish-price">${dish.price ? '€' + dish.price : ''}</span><br>
                    <span class="dish-desc">${dish.description || 'Sin descripción'}</span>
                </div>`;
            });
        }
        
        htmlDePagina += `</div>`;
        return htmlDePagina;
    }

    function renderBook() {
        const bookDiv = document.getElementById('book');
        const prevBtn = document.querySelector('.nav-btn.prev');
        const nextBtn = document.querySelector('.nav-btn.next');
        bookDiv.innerHTML = '';
        
        for (let i = 0; i < 2; i++) {
            let indiceDelMenu = (currentPage * 2) + i;
            
            if (indiceDelMenu < totalMenus) {
                let menuActual = menus[indiceDelMenu];
                let lado = (i === 0) ? 'left' : 'right';
                
                bookDiv.innerHTML += createPage(menuActual, lado);
            }
        }
        
        if (currentPage === 0) {
            prevBtn.style.visibility = 'hidden';
        } else {
            prevBtn.style.visibility = 'visible';
        }

        if ((currentPage * 2) + 2 >= totalMenus) {
            nextBtn.style.visibility = 'hidden';
        } else {
            nextBtn.style.visibility = 'visible';
        }
    }

    function prevPage() {
        if (currentPage > 0) {
            currentPage = currentPage - 1;
            renderBook();
        }
    }
    
    function nextPage() {
        if ((currentPage * 2) + 2 < totalMenus) {
            currentPage = currentPage + 1;
            renderBook();
        }
    }

    renderBook();
</script>
</body>
</html>