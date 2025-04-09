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
                <a class="nav-link active" aria-current="page" href="#">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard-leads.php">Trial</a>
            </li>
            <div class="search-bar-container ms-auto">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info" type="submit">Search</button>
                </form>
            </div>
        </ul>
        <div class="table-container mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Term</th>
                            <th>Module</th>
                            <th>Day</th>
                            <th>Time</th>
                            <th>Teacher</th>
                            <th>Google Class Code</th>
                            <th>Zoom/Room</th>
                            <th>SA</th>
                            <th>Branch</th>
                            <th>Attendance</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add student data here -->
                        <tr>
                            <td>Term A 2024</td>
                            <td style="background-color: pink;">LK 4-6 Active Coding</td>
                            <td>Sunday</td>
                            <td>16.15-17.15</td>
                            <td>Risky</td>
                            <td>nkwmlzm</td>
                            <td><a href="#">http://gmeet.com</a></td>
                            <td>Syafi'i</td>
                            <td>Kemayoran</td>
                            <td><a href="dashboard-attendance.php" style="padding-left:30px"><i class="bi bi-eye"></i></a></td>
                            <td><a href="dashboard-students-edit.php"><i class="bi bi-pencil-square"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Floating Icon -->
    <div class="floating-icon">
        <a href="dashboard-students-add.php"><i class="bi bi-plus-circle-fill"></i></a>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
