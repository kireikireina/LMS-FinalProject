<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Training Admin</title>
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
        .observer-name {
            font-size: 16px;
            margin-right: 20px;
        }
        .navbar .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        .input-group {
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
        th.sortable {
            cursor: pointer;
        }
        input[type="number"] {
            width: 80px;
            text-align: center;
            margin: 0 auto;
        }
        .btn-primary {
            background-color: #1C8ED1; 
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0F6BA8;
        }
        .btn-outline-primary {
            padding: 5px 10px;
        }
        .btn-outline-secondary {
            margin-left: 5px;
        }
        .muc-button {
            display: inline-block;
            margin-bottom: 20px;
        }
        .search-sort-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .navbar-brand img {
                height: 50px;
            }
            .observer-name {
                font-size: 14px;
                margin-right: 10px;
            }
            .main-content, .form-content {
                margin: 10px;
                padding: 15px;
            }
            .form-content h3 {
                font-size: 24px;
            }
            .table th, .table td {
                font-size: 14px;
                padding: 8px;
            }
            input[type="number"] {
                width: 60px;
            }
            .search-sort-row {
                flex-direction: column;
            }
            .search-sort-row .input-group {
                width: 100%;
                margin-bottom: 10px;
            }
        }
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .navbar .container-fluid {
                flex-direction: column;
            }
            .search-sort-row {
                flex-direction: column;
                align-items: flex-start;
            }
            .input-group {
                width: 100%;
            }
        }
        @media (max-width: 576px) {
            .btn-primary, .btn-outline-primary, .btn-outline-secondary {
                padding: 5px 5px;
                font-size: 12px;
            }
            .table th, .table td {
                font-size: 12px;
                padding: 5px;
            }
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
            <span class="observer-name" id="observerName"></span>
        </div>
    </nav>
</section>

<div class="main-content">
    <section>
        <div class="form-body">
            <div class="form-holder">
                <div class="form-content">
                    <h3>Teacher Training</h3>
                    <div class="search-sort-row">
                        <div class="input-group">
                            <input type="text" id="searchInput" class="form-control" placeholder="Search by name...">
                            <button class="btn btn-outline-primary" type="button" onclick="searchByName()"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    
                    <a href="dashboard-teacher-training-muc.php"><button class="btn btn-outline-primary muc-button" type="button">See All MUC Links</button></a>
                    
                    <form method="POST" action="submit_scores.php">
                        <div class="table-responsive">
                            <table class="table table-striped" id="teacherTable">
                                <thead>
                                    <tr>
                                        <th class="sortable" onclick="sortTable('name')">Name</th>
                                        <th class="sortable" onclick="sortTable('module')">Module</th>
                                        <th class="sortable" onclick="sortTable('lesson')">Lesson</th>
                                        <th>Link</th>
                                        <th>MUC Recording</th>
                                        <th>MUC Lesson</th>
                                        <th class="sortable" onclick="sortTable('date')">Submit Date</th>
                                        <th class="sortable" onclick="sortTable('communication')">Communication Skills</th>
                                        <th class="sortable" onclick="sortTable('management')">Classroom Management</th>
                                        <th class="sortable" onclick="sortTable('engagement')">Engagement/Designing Learning Experiences</th>
                                        <th class="sortable" onclick="sortTable('knowledge')">Knowledge and Understanding of Subject Matter</th>
                                        <th>Feedback</th>
                                        <th class="sortable" onclick="sortTable('average')">Average</th>
                                        <th>Submit</th>
                                    </tr>
                                </thead>
                                <tbody id="teacherTableBody">
                                    <!-- Dummy data rows populated by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Dummy observer name; replace with dynamic value from login session in a real app
    document.getElementById('observerName').textContent = "Observer: Hani";

    const teacherData = [
        { name: 'Natania Desyderia', module: 'Python 1', lesson: 'Lesson 1-4', link: 'http://example.com/project1', mucLink: '', date: '2024-10-01', scores: { communication: 85, management: 80, engagement: 90, knowledge: 88 } },
        { name: 'Prima Rusma', module: 'Web Dev', lesson: 'Lesson 1-4', link: 'http://example.com/project2', mucLink: '', date: '2024-10-01', scores: { communication: 75, management: 70, engagement: 85, knowledge: 82 } },
        { name: 'Prima Rusma', module: 'Web Dev', lesson: 'Lesson 5-8', link: 'http://example.com/project2', mucLink: '', date: '2024-10-01', scores: { communication: 75, management: 70, engagement: 85, knowledge: 82 } }
    ];
    let sortedAsc = {};

    function loadTableData(data) {
    const tableBody = document.getElementById('teacherTableBody');
    tableBody.innerHTML = ''; // Clear existing rows
    data.forEach((teacher, index) => {
        const row = `
            <tr id="row-${index}">
                <td>${teacher.name}</td>
                <td>${teacher.module}</td>
                <td>${teacher.lesson}</td>
                <td><a href="${teacher.link}">Link</a></td>
                <td><input type="text" class="form-control" value="${teacher.mucLink}" placeholder="MUC Recording Link"></td>
                <td><input type="text" class="form-control" value="${teacher.mucLink}" placeholder="MUC Lesson"></td>
                <td>${teacher.date}</td>
                <td><input type="number" class="form-control" value="${teacher.scores.communication}" min="0" max="100"></td>
                <td><input type="number" class="form-control" value="${teacher.scores.management}" min="0" max="100"></td>
                <td><input type="number" class="form-control" value="${teacher.scores.engagement}" min="0" max="100"></td>
                <td><input type="number" class="form-control" value="${teacher.scores.knowledge}" min="0" max="100"></td>
                <td><textarea name="paragraph_text" cols="50" rows="10" placeholder="Feedback"></textarea></td>
                <td>${((teacher.scores.communication + teacher.scores.management + teacher.scores.engagement + teacher.scores.knowledge) / 4).toFixed(2)}</td>
                <td><button class="btn btn-primary" type="button">Submit</button></td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', row);
    });
}

    
    function sortTable(field) {
        const sortedData = teacherData.sort((a, b) => {
            const valA = typeof a[field] === 'object' ? a.scores[field] : a[field];
            const valB = typeof b[field] === 'object' ? b.scores[field] : b[field];
            return sortedAsc[field] ? valB.localeCompare(valA) : valA.localeCompare(valB);
        });
        sortedAsc[field] = !sortedAsc[field];
        loadTableData(sortedData);
    }

    function searchByName() {
        const searchText = document.getElementById('searchInput').value.toLowerCase();
        const filteredData = teacherData.filter((teacher) => teacher.name.toLowerCase().includes(searchText));
        loadTableData(filteredData);
    }

    document.addEventListener("DOMContentLoaded", function() {
        loadTableData(teacherData);
    });
</script>
</body>
</html>
