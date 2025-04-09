<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher-Edit</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #3e425d;
            color: white;
            overflow-x: hidden;
        }
        .navbar {
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
        .sidebar {
            height: 100vh;
            background-color: #2c2f48;
            padding-top: 150px; /* Adjust this value if the navbar height changes */
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            z-index: 1020;
            overflow-y: auto;
        }
        .sidebar a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #404254;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .form-container {
            background-color: #2c2f48;
            padding: 20px;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-cancel {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-save {
            background-color: #28a745;
            border-color: #28a745;
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
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
        <a style="background-color: #575b7a;" href="#">Teachers</a>
        <a href="/admin/dashboard-time-table.php">Time Table</a>
        <a href="/admin/dashboard-school-partner.php">School Partners</a>
    </div>
    <div class="main-content">
        <div class="form-container">
            <form>
                <h2>Edit Teacher</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" value="Rizky" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="position" value="Advance Teacher" placeholder="Enter position" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" value="rizky@kodingnext.com" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" id="picture">
                </div>
                <div class="form-buttons">
                    <a href="#"><button type="button" style="color: white;" class="btn btn-save">Save</button></a>
                    <a href="dashboard-teachers.php" class="btn btn-cancel">Cancel</a> 
                </div>
            </form>
        </div>

        <div class="mt-4 p-4 bg-success text-white">
            <h4>Preview:</h4>
            <p><strong>Name:</strong>Rizky</p>
            <p><strong>Position:</strong> Advance Teacher</p>
            <p><strong>Email:</strong> rizky@kodingnext.com</p>
            <p><strong>Picture:</strong> <img src="https://via.placeholder.com/100" alt="Teacher Picture" width="100"></p>
        </div>
    </div>

    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
