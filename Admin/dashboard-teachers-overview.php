<?php
$teachers = [
    [
        'id' => 1,
        'name' => 'Natania Desyderia',
        'ability' => 75,
        'position' => 'Teacher Assistant Intern',
        'location' => 'Jakarta',
        'status' => 'Intern',
        'join_date' => '2024-04-05',
        'kpi_link' => 'https://example.com/kpi1'
    ],
    [
        'id' => 2,
        'name' => 'Prima Rusma',
        'ability' => 90,
        'position' => 'Advance Teacher',
        'location' => 'Surabaya',
        'status' => 'Full Time',
        'join_date' => '2023-03-15',
        'kpi_link' => 'https://example.com/kpi2'
    ],
    [
        'id' => 3,
        'name' => 'Kireina Kameloeh',
        'ability' => 60,
        'position' => 'Teacher',
        'location' => 'Bandung',
        'status' => 'Part Time',
        'join_date' => '2022-08-10',
        'kpi_link' => 'https://example.com/kpi3'
    ]
];

// Sorting logic
if (isset($_GET['sort'])) {
    $sort_by = $_GET['sort'];
    usort($teachers, function ($a, $b) use ($sort_by) {
        return strcmp($a[$sort_by], $b[$sort_by]);
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #8FCCEB;
            color: white;
        }
        .navbar {
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
        .table-container {
            background-color: #BFE7FF;
            padding: 20px;
            border-radius: 15px;
            width: 95%;
            max-width: 1400px;
            margin: auto;
        }
        .table {
            background-color: #BFE7FF;
            color: #333;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
            margin: auto;
            width: 100%;
        }
        .table th {
            background-color: #8FCCEB;
            color: white;
            padding: 15px;
        }
        .table td {
            padding: 15px;
            background-color: #F0F8FF;
            border-top: 1px solid #8FCCEB;
        }
        .table tr:hover td {
            background-color: #E1F3FB;
        }
        .floating-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 40px;
            color: #fff;
        }
        .controls {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-control, .form-select, .btn {
            min-width: 200px;
            max-width: 300px;
        }
        .search-container {
            display: flex;
        }
        .sort-container {
            display: flex;
            justify-content: flex-end;
        }
        .form-select, .btn {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../img/KodingNext.png" alt="KodingNext Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href=".../index.php">Logout</a></li>
                        <li><a class="dropdown-item" href=".../index.php">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Search and Sort Controls -->
    <div class="container-fluid table-container mt-5">
        <div class="controls">
            <!-- Search -->
            <div class="search-container">
                <input type="text" class="form-control" id="searchInput" placeholder="Search by teacher name" onkeyup="searchTable()">
            </div>
            <!-- Sort -->
            <div class="sort-container">
                <form method="GET" class="d-flex">
                    <select name="sort" class="form-select">
                        <option value="" disabled selected>Sort By</option>
                        <option value="location">Location</option>
                        <option value="status">Status</option>
                        <option value="join_date">Join Date</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Sort</button>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table" id="teacherTable">
                <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>% Ability</th>
                        <th>Position</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Join Date</th>
                        <th>View Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teachers as $teacher): ?>
                        <tr>
                            <td><?php echo $teacher['name']; ?></td>
                            <td><?php echo $teacher['ability']; ?>%</td>
                            <td><?php echo $teacher['position']; ?></td>
                            <td><?php echo $teacher['location']; ?></td>
                            <td><?php echo $teacher['status']; ?></td>
                            <td><?php echo date('d M Y', strtotime($teacher['join_date'])); ?></td>
                            <td><i class="bi bi-eye"></i></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <a href="#" class="floating-icon">
        <i class="bi bi-house-door-fill"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Search functionality
        function searchTable() {
            const input = document.getElementById("searchInput").value.toUpperCase();
            const table = document.getElementById("teacherTable");
            const rows = table.getElementsByTagName("tr");
            
            for (let i = 1; i < rows.length; i++) {
                const name = rows[i].getElementsByTagName("td")[0].innerText;
                rows[i].style.display = name.toUpperCase().indexOf(input) > -1 ? "" : "none";
            }
        }
    </script>
</body>
</html>
