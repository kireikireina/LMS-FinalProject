<?php
$dummy_data_submitted = false;
$submitted_data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $position = $_POST['task'];
    $email = $_POST['email'];
    $picture = '';

        if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        $dummy_data_submitted = true;
        $picture = 'uploads/dummy-profile.jpg'; // Using a placeholder for dummy picture
    }

    $submitted_data = [
        'name' => $name,
        'position' => $position,
        'email' => $email,
        'picture' => $picture
    ];

    $dummy_data_submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher-Add</title>
    <link rel="stylesheet" href="style.css">
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
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-cancel {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-save {
            background-color: #1C8ED1;
            border-color: #1C8ED1;
        }
        .btn-cancel:hover, .btn-save:hover {
            opacity: 0.8;
        }
        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }
        .dummy-data {
            margin-top: 20px;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
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
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class="sidebar">
        <a href="dashboard-home.php">Home-Edit</a>
        <a href="dashboard-students.php">Students</a>
        <a style="background-color: #FBB1CF;" href="dashboard-teachers.php">Teachers</a>
        <a href="/admin/dashboard-time-table.php">Time Table</a>
        <a href="/admin/dashboard-school-partner.php">School Partners</a>
        <a href="dashboard-modules.php">Modules</a>
    </div>
    <div class="main-content">
        <div class="form-container">
            <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <h2>Add New Teacher(s)</h2>
                <div class="form-group">
                <label for="task">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="task">Position</label>
                    <select class="form-control" name="task" required>
                        <option value="Teacher">Teacher</option>
                        <option value="Advance Teacher">Advance Teacher</option>
                        <option value="Intern">Intern</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="task">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                <label for="task">Picture</label>
                    <input type="file" class="form-control" name="picture" required>
                </div>
                <div class="form-group">
                <label for="task">Biodata</label>
                    <input type="file" class="form-control" name="picture" required>
                </div>
                <div class="form-group">
                <label for="task">Certificate</label>
                    <input type="file" class="form-control" name="picture" required>
                </div>
                <div class="form-buttons">
                    <button type="submit" style="color: white;" class="btn btn-save">Save</button>
                    <a href="dashboard-teachers.php" class="btn btn-cancel">Cancel</a>
                </div>
            </form>
        </div>

        <!-- Display Dummy Data if Form is Submitted -->
        <?php if ($dummy_data_submitted): ?>
            <div class="dummy-data">
                <h3>Dummy Data Submitted</h3>
                <p><strong>Name:</strong> <?php echo $submitted_data['name']; ?></p>
                <p><strong>Position:</strong> <?php echo $submitted_data['position']; ?></p>
                <p><strong>Email:</strong> <?php echo $submitted_data['email']; ?></p>
                <p><strong>Picture:</strong> <img src="<?php echo $submitted_data['picture']; ?>" alt="Profile Picture" width="100"></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
