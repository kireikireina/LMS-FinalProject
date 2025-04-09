<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graded MUC Links</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #F4F7FA;
            color: #333;
            overflow-x: hidden;
        }
        .navbar {
            background: linear-gradient(180deg, #BFE7FF, #8FCCEB);
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
        .main-content {
            margin: 20px;
            padding: 20px;
        }
        .form-holder {
            margin-bottom: 40px;
        }
        .form-content {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 2100px;
            margin: 0 auto;
        }
        .form-content h3 {
            color: #1C8ED1;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            margin: auto;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }
        .project-link {
            text-decoration: none;
            color: #1C8ED1;
        }
        .project-link:hover {
            text-decoration: underline;
        }
        .search-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/KodingNext.png" alt="Koding Next Logo">
            </a>
        </div>
    </nav>
</section>

<div class="main-content">
    <section>
        <div class="form-body">
            <div class="form-holder">
                <div class="form-content">
                    <h3>Graded MUC Links</h3>
                    <div class="search-container">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search by Teacher Name, Module, or Lesson">
                    </div>
                    <table class="table table-striped" id="gradedMUCTable">
                        <thead>
                            <tr>
                                <th onclick="sortTable(0)">Teacher Name <i class="bi bi-sort-down"></i></th>
                                <th onclick="sortTable(1)">Module <i class="bi bi-sort-down"></i></th>
                                <th onclick="sortTable(2)">Lesson <i class="bi bi-sort-down"></i></th>
                                <th>MUC Link</th>
                                <th onclick="sortTable(4)">Overall Score <i class="bi bi-sort-down"></i></th>
                                <th>Feedback</th>
                                <th onclick="sortTable(5)">Observer <i class="bi bi-sort-down"></i></th>
                            </tr>
                        </thead>
                        <tbody id="gradedMUCTableBody">
                            <!-- Dummy data rows to be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Dummy data for graded MUC links with observers and feedback
    const gradedMUCData = [
        { teacherName: 'Natania Desyderia', module: 'Python I', lesson: 'Lesson I-IV', mucLink: 'http://example.com/muc1', overallScore: 85, feedback: 'Excellent performance, keep it up!', observer: 'Hani' },
        { teacherName: 'Prima Rusma', module: 'Web Dev', lesson: 'Lesson I-IV', mucLink: 'http://example.com/muc2', overallScore: 78, feedback: 'Good progress, but focus on lesson details.', observer: 'Alvin' }
    ];

    // Function to load table data
    function loadGradedMUCTable() {
        const tableBody = document.getElementById('gradedMUCTableBody');
        gradedMUCData.forEach(data => {
            const row = `
                <tr>
                    <td>${data.teacherName}</td>
                    <td>${data.module}</td>
                    <td>${data.lesson}</td>
                    <td><a href="${data.mucLink}" class="project-link">MUC Link</a></td>
                    <td>${data.overallScore}</td>
                    <td>${data.feedback}</td>
                    <td>${data.observer}</td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });
    }

    // Function to search the table
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll('#gradedMUCTableBody tr');

        rows.forEach(row => {
            const cells = row.getElementsByTagName('td');
            const rowContainsSearchTerm = Array.from(cells).some(cell => 
                cell.textContent.toLowerCase().includes(searchTerm)
            );

            row.style.display = rowContainsSearchTerm ? '' : 'none';
        });
    });

    // Function to sort the table by a specified column index
    function sortTable(colIndex) {
        const table = document.getElementById('gradedMUCTable');
        const rows = Array.from(table.rows).slice(1); // Get all rows except the header
        const isAscending = table.getAttribute('data-sort-order') === 'asc';

        rows.sort((a, b) => {
            const aText = a.cells[colIndex].textContent;
            const bText = b.cells[colIndex].textContent;

            if (colIndex === 4) { // If sorting by Overall Score (numeric)
                return isAscending ? aText - bText : bText - aText;
            }
            return isAscending ? aText.localeCompare(bText) : bText.localeCompare(aText);
        });

        // Clear table body and append sorted rows
        const tbody = table.querySelector('tbody');
        tbody.innerHTML = '';
        rows.forEach(row => tbody.appendChild(row));

        // Toggle sort order for the next click
        table.setAttribute('data-sort-order', isAscending ? 'desc' : 'asc');
    }

    // Load data on page load
    document.addEventListener('DOMContentLoaded', loadGradedMUCTable);
</script>

</body>
</html>
