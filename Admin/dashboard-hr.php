<?php
// Sample data for teachers with added monthly abilities for specific months
$teachers = [
    [
        'id' => 1,
        'name' => 'Natania Desyderia',
        'position' => 'Teacher Assistant Intern',
        'location' => 'KMY',
        'status' => 'Teacher Assistant Intern',
        'monthly_abilities' => [
            'January' => 75,
            'February' => 78,
            'March' => 82,
        ],
        'photo' => 'https://via.placeholder.com/150',
    ],
    [
        'id' => 2,
        'name' => 'Prima Rusma',
        'position' => 'Advance Teacher',
        'location' => 'Bintaro',
        'status' => 'Advance Teacher',
        'monthly_abilities' => [
            'January' => 88,
            'February' => 90,
            'March' => 92,
        ],
        'photo' => 'https://via.placeholder.com/150',
    ]
];

// Get the selected month from the query parameter (default to January)
$selected_month = isset($_GET['month']) ? $_GET['month'] : 'January';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Dashboard - Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #F4F7FA;
            color: #333;
        }
        .navbar {
            background: linear-gradient(180deg, #BFE7FF, #8FCCEB);
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
        .dropdown a {
            color: #333; 
        }
        .sidebar {
            height: 100vh;
            background: linear-gradient(180deg, #8FCCEB, #BFE7FF); 
            padding-top: 150px;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            z-index: 1020;
            overflow-y: auto;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #FBB1CF;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .btn-info {
            background-color: #1C8ED1;
            border: none;
        }
        .btn-info:hover {
            background-color: #0F6BA8;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .table {
            background-color: #F9F9F9;
            color: #333;
            border-radius: 10px;
        }
        .table th {
            background-color: #BFE7FF;
        }
        .table img {
            border-radius: 10px;
        }
        .table a {
            color: #1C8ED1;
        }
        .floating-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 40px;
            color: #1C8ED1;
        }
        .form-control {
            max-width: 200px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../img/KodingNext.png" alt="KodingNext Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href=".../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="sidebar">
        <a href="dashboard-home.php">Home</a>
        <a href="dashboard-students.php">Students</a>
        <a href="dashboard-teachers.php">Teachers</a>
        <a href="dashboard-time-table.php">Time Table</a>
        <a href="/admin/dashboard-school-partner.html">School Partners</a>
        <a href="dashboard-modules.php">Modules</a>
        <a style="background-color: #FBB1CF;" href="#">HR</a>
    </div>

    <div class="main-content">
        <h2>HR - Teachers Overview</h2>
        
        <!-- Month Selection -->
        <div class="mb-3">
            <label for="monthSelect" class="form-label">Select Month:</label>
            <select id="monthSelect" class="form-select" onchange="location = this.value;">
                <option value="?month=January" <?php echo $selected_month == 'January' ? 'selected' : ''; ?>>January</option>
                <option value="?month=February" <?php echo $selected_month == 'February' ? 'selected' : ''; ?>>February</option>
                <option value="?month=March" <?php echo $selected_month == 'March' ? 'selected' : ''; ?>>March</option>
                <!-- Add more months as needed -->
            </select>
        </div>

        <!-- Search Form -->
        <div class="d-flex mb-3">
            <input class="form-control me-2" type="search" id="searchInput" placeholder="Search by name">
            <button class="btn btn-info" onclick="filterTeachers()">Search</button>
        </div>

        <div class="table-container mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Monthly Ability (<?php echo $selected_month; ?>)</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody id="teacherTableBody">
                        <!-- Rows will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Dummy data (to simulate server-side data)
        const teachers = <?php echo json_encode($teachers); ?>;
        const selectedMonth = '<?php echo $selected_month; ?>';

        // Function to populate the teacher table
        function populateTeacherTable(teacherList) {
            const tableBody = document.getElementById('teacherTableBody');
            tableBody.innerHTML = ''; // Clear the table

            teacherList.forEach(teacher => {
                const row = `
                    <tr>
                        <td>${teacher.name}</td>
                        <td>${teacher.position}</td>
                        <td>${teacher.location}</td>
                        <td>${teacher.status}</td>
                        <td>${teacher.monthly_abilities[selectedMonth]}%</td>
                        <td>
                            <a href="dashboard-teachers-profile.php?id=${teacher.id}" class="btn btn-link" title="View Profile">
                                <i class="bi bi-eye" style="font-size: 1.5rem; color: #1C8ED1;"></i>
                            </a>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        // Initial population of the table with all teachers
        populateTeacherTable(teachers);

        // Function to filter the teachers based on the search query
        function filterTeachers() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const filteredTeachers = teachers.filter(teacher => teacher.name.toLowerCase().includes(query));
            populateTeacherTable(filteredTeachers);
        }
    </script>
</body>
</html>
