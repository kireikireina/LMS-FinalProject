<?php
// Sample data for teachers and projects
$teachers = [
    [
        'id' => 2,
        'name' => 'Prima Rusma',
        'position' => 'Advance Teacher',
        'email' => 'rusma@kodingnext.com',
        'photo' => 'https://via.placeholder.com/150',
    ],
    [
        'id' => 2,
        'name' => 'Prima Rusma',
        'position' => 'Advance Teacher',
        'email' => 'rusma@kodingnext.com',
        'photo' => 'https://via.placeholder.com/150',
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Teacher</title>
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
        <a style="background-color: #FBB1CF;" href="#">Teachers</a>
        <a href="dashboard-time-table.php">Time Table</a>
        <a href="dahsboard-school-partner.php">School Partners</a>
        <a href="dashboard-modules.php">Modules</a>
        <a href="dashboard-hr.php">HR</a>
    </div>

    <div class="main-content">
        <a href="dashboard-teacher-training.php"><button type="button" style="color:white;" class="btn btn-info">Training</button></a>
        <a href="dashboard-teachers-overview.php"><button type="button" style="color:white;" class="btn btn-info">Overview</button></a>
        <a href="dashboard-teachers-assign.php"><button type="button" style="color:white;" class="btn btn-info">Task</button></a>
        
        <div class="table-container mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($teachers as $teacher): ?>
                            <tr>
                                <td><img src="<?php echo $teacher['photo']; ?>" alt="Teacher Photo" style="height: 100px; width: 100px;"></td>
                                <td><?php echo $teacher['name']; ?></td>
                                <td><?php echo $teacher['position']; ?></td>
                                <td><?php echo $teacher['email']; ?></td>
                                <td><a href="dashboard-teachers-edit.php"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="dashboard-teachers-task.php"><i class="bi bi-eye"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="floating-icon">
        <a href="dashboard-teachers-add.php"><i class="bi bi-plus-circle-fill"></i></a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
