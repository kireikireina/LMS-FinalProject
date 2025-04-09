document.addEventListener('DOMContentLoaded', function() {
    const tableRows = document.querySelectorAll('.table tbody tr');
    tableRows.forEach(row => {
        row.querySelectorAll('td').forEach((cell, index) => {
            const header = document.querySelector(`.table th:nth-child(${index + 1})`).innerText;
            cell.setAttribute('data-label', header);
        });
    });
});
