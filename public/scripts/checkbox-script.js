

    setTimeout(() => {          // Bootstrap prend un moment pour se charger, d'où le setTimeout. Il pourrait être nécessaire d'augmenter la durée pour les connexions plus lentes
        
        const checkboxes = document.querySelectorAll('tr input[type="checkbox"]');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = false; 
                checkbox.closest('tr').classList.remove("selected"); 
        });
        
    }, 100);