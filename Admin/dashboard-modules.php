<?php
session_start();

// Check if the admin is logged in (Dummy login check for now)
if (!isset($_SESSION['admin_logged_in'])) {
    $_SESSION['admin_logged_in'] = true; // Simulate login for this dummy version
}

// Dummy data for modules
$modules = [
    ['id' => 1, 'title' => 'Python I', 'lessons_count' => 3],
    ['id' => 2, 'title' => 'JavaScript Basics', 'lessons_count' => 5],
    ['id' => 3, 'title' => 'HTML & CSS', 'lessons_count' => 4]
];

// Dummy data for group modules
$group_modules = [];

// Handling form submission for adding new modules
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_module'])) {
    $module_title = $_POST['module_title'];
    $lessons_count = $_POST['lessons_count'];

    if (!empty($module_title) && !empty($lessons_count)) {
        // Add new module to the dummy array
        $new_module = ['id' => count($modules) + 1, 'title' => $module_title, 'lessons_count' => $lessons_count];
        array_push($modules, $new_module);

        $_SESSION['success_message'] = "Module added successfully!";
    } else {
        $_SESSION['error_message'] = "Please fill in all fields!";
    }

    // Redirect to the same page to avoid form resubmission issues
    header('Location: dashboard-modules.php');
    exit();
}

// Handling form submission for creating group modules
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_group'])) {
    $group_title = $_POST['group_title'];
    $selected_modules = $_POST['modules'] ?? [];

    if (!empty($group_title) && !empty($selected_modules)) {
        // Add new group module (In real scenario, you'd insert it into a database)
        $new_group = ['group_title' => $group_title, 'modules' => $selected_modules];
        array_push($group_modules, $new_group);

        $_SESSION['success_message'] = "Group module created successfully!";
    } else {
        $_SESSION['error_message'] = "Please fill in all fields!";
    }

    // Redirect to the same page to avoid form resubmission issues
    header('Location: dashboard-modules.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Modules</title>
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
        .main-content {
    margin-left: 250px;
    padding: 30px;
    background-color: #F4F7FA;
}

.table-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.table-container h4 {
    margin-bottom: 15px;
    color: #333;
}

.form-control, .form-select {
    max-width: 500px;
    margin-bottom: 15px;
}

.btn-success {
    background-color: #1C8ED1;
    border: none;
}

.btn-success:hover {
    background-color: #0F6BA8;
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
        <a href="dahsboard-school-partner.php">School Partners</a>
        <a style="background-color: #FBB1CF;" href="#">Modules</a>
        <a href="dashboard-hr.php">HR</a>
    </div>

    <div class="main-content">
    <h3 class="mb-4">Manage Modules and Lessons</h3>

    <!-- Display Messages -->
    <?php if (isset($_SESSION['success_message'])): ?>
        <div class="alert alert-success">
            <?= $_SESSION['success_message']; unset($_SESSION['success_message']); ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['error_message'])): ?>
        <div class="alert alert-danger">
            <?= $_SESSION['error_message']; unset($_SESSION['error_message']); ?>
        </div>
    <?php endif; ?>

    <!-- Section for Module List -->
    <div class="table-container mb-5">
        <h4 class="mb-3">Module List</h4>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Module Title</th>
                    <th>Lessons</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modules as $module): ?>
                    <tr>
                        <td><?= $module['title']; ?></td>
                        <td><?= $module['lessons_count']; ?> Lessons</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm text-white">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm text-white">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Section for Adding New Module -->
    <div class="table-container mb-5">
        <h4 class="mb-3">Add New Module</h4>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="module-title" class="form-label">Module Title</label>
                <input type="text" class="form-control" id="module-title" name="module_title" required>
            </div>
            <div class="mb-3">
                <label for="module-lessons" class="form-label">Total Lessons</label>
                <input type="number" class="form-control" id="module-lessons" name="lessons_count" required>
            </div>
            <button type="submit" name="add_module" class="btn btn-success">Add Module</button>
        </form>
    </div>

    <!-- Section for Creating Group Modules -->
    <div class="table-container">
        <h4 class="mb-3">Create Group Module</h4>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="group-title" class="form-label">Group Title</label>
                <input type="text" class="form-control" id="group-title" name="group_title" required>
            </div>
            <div class="mb-3">
                <label for="modules" class="form-label">Select Modules</label>
                <select class="form-select" id="modules" name="modules[]" multiple required>
                    <?php foreach ($modules as $module): ?>
                        <option value="<?= $module['id']; ?>"><?= $module['title']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" name="create_group" class="btn btn-success">Create Group</button>
        </form>
    </div>
</div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
