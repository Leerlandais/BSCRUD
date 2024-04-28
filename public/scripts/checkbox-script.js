

    setTimeout(() => {
        
        const checkboxes = document.querySelectorAll('tr input[type="checkbox"]');
        checkboxes.forEach((checkbox) => {
            checkbox.checked = false; 
            checkbox.closest('tr').classList.remove("selected"); 
        });
        
    }, 100);