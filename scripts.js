jQuery(document).ready(function(){
    let ascending = true;
    jQuery('#color-sort').on('click', function(){
        const rows = document.querySelectorAll('tbody tr');
        const sortedRows = Array.from(rows).sort((a, b) => {
            const colorA = a.cells[2].textContent;
            const colorB = b.cells[2].textContent;
            return ascending ? colorA.localeCompare(colorB) : colorB.localeCompare(colorA);
        });

    const tbody = document.querySelector('tbody');
    tbody.innerHTML = '';

    sortedRows.forEach(row => {
        tbody.appendChild(row);
    });
    ascending = !ascending;
    });
    
});