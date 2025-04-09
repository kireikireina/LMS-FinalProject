<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Students</title>
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
        .sidebar a:hover, .sidebar a.active {
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
    <!-- Navbar -->
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
                    <li><a class="dropdown-item text-danger" href="/index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="dashboard-home.php">Home-Edit</a>
        <a href="dashboard-students.php" class="active">Students</a>
        <a href="dashboard-teachers.php">Teachers</a>
        <a href="dashboard-time-table.php">Time Table</a>
        <a href="dashboard-school-partner.php">School Partners</a>
        <a href="dashboard-modules.php">Modules</a>
        <a href="dashboard-hr.php">HR</a>
        <a href="dashboard-training.php">Training</a>
    </div>
    <!-- Main Content -->
    <div class="main-content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="dashboard-students.php">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Trial</a>
            </li>
            <div class="search-bar-container ms-auto">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info" type="submit">Search</button>
                </form>
            </div>
        </ul>
        <!-- Leads Table -->
        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Schedule</th>
                        <th>Student Name</th>
                        <th>Phone Number</th>
                        <th>Student Age</th>
                        <th>Age Group</th>
                        <th>Module</th>
                        <th>Teacher</th>
                        <th>Assigned by</th>
                        <th>Room Link</th>
                        <th>SA</th>
                        <th>Branch</th>
                        <th>Source Lead</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Thursday</td>
                        <td>16:45 - 18:45</td>
                        <td>Ethan Kyle</td>
                        <td>080000000</td>
                        <td>5</td>
                        <td>JK 4-6</td>
                        <td>Games</td>
                        <td>Yuan</td>
                        <td>Friska</td>
                        <td><a href="#">lesson1</a></td>
                        <td>Deby</td>
                        <td>Kemayoran</td>
                        <td>Walk-in</td>
                        <td><a href="dashboard-students-lead-edit.php"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>14:00 - 16:00</td>
                        <td>Alice Johnson</td>
                        <td>081234567</td>
                        <td>6</td>
                        <td>JK 5-7</td>
                        <td>English</td>
                        <td>Samantha</td>
                        <td>John</td>
                        <td><a href="#">lesson2</a></td>
                        <td>Michael</td>
                        <td>Sudirman</td>
                        <td>Online</td>
                        <td><a href="dashboard-students-lead-edit.php"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!-- Floating Icon -->
        <!-- Floating Icon -->
        <div class="floating-icon">
        <a href="dashboard-student-lead-add.php"><i class="bi bi-plus-circle-fill"></i></a>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
