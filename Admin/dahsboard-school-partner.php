<?php
$partners = [
    [
        'id' => 2,
        'school' => '01/01/2024',
        'location' => '...',
        'area' => '...',
        'grade' => '4th grade',
        'module' => '...',
        'term1' => 'July',
        'term2' => 'August',
        'start_date' => '20/07/2024',
        'end_date' => '30/08/2024',
    ],
    [
        'id' => 3,
        'school' => '01/02/2024',
        'location' => '...',
        'area' => '...',
        'grade' => '5th grade',
        'module' => '...',
        'term1' => 'June',
        'term2' => 'July',
        'start_date' => '15/06/2024',
        'end_date' => '25/07/2024',
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Time Table</title>
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
        <a href="dashboard-home.php">Home-Edit</a>
        <a href="dashboard-students.php">Students</a>
        <a href="dashboard-teachers.php">Teachers</a>
        <a href="dashboard-time-table.php">Time Table</a>
        <a style="background-color: #FBB1CF;" href="#">School Partners</a>
        <a href="dashboard-modules.php">Modules</a>
        <a href="dashboard-hr.php">HR</a>
    </div>

    <div class="main-content">
        <h1>ICA/CCA</h1>
        
        <div class="table-container mt-3">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>School</th>
                            <th>Location</th>
                            <th>Area</th>
                            <th>Grade</th>
                            <th>Module</th>
                            <th>Term I</th>
                            <th>Term II</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $counter = 1; // Initialize counter
                        foreach ($partners as $partner): ?>
                            <tr>
                                <td><?php echo $counter++; ?></td> <!-- Auto-increment row number -->
                                <td><?php echo $partner['school']; ?></td>
                                <td><?php echo $partner['location']; ?></td>
                                <td><?php echo $partner['area']; ?></td>
                                <td><?php echo $partner['grade']; ?></td>
                                <td><?php echo $partner['module']; ?></td>
                                <td><?php echo $partner['term1']; ?></td>
                                <td><?php echo $partner['term2']; ?></td>
                                <td><?php echo $partner['start_date']; ?></td>
                                <td><?php echo $partner['end_date']; ?></td>
                                <td style="padding-left: 15px"><a href="dashboard-time-table-edit.php"><i class="bi bi-pencil-square"></i></a></td>
                                <td style="padding-left: 20px"><a href="#"><i class="bi bi-trash text-danger"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="floating-icon">
        <a href="dashboard-school-partner-edit.php"><i class="bi bi-plus-circle-fill"></i></a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
