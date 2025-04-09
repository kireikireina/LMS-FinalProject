<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit School Partner</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            color: white;
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/KodingNext.png" alt="Bootstrap">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href="/index.php">Logout</a></li>
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
        <a style="background-color: #575b7a;" href="dashboard-school-partner.php">School Partners</a>
        <a href="dashboard-modules.php">Modules</a>
    </div>
    <div class="main-content">
        <h1>Edit School Partner</h1>

        <?php
        // Simulating data for a specific school partner
        $dummy_school = [
            'name' => 'School A',
            'location' => 'Location A',
            'area' => 'Area A',
            'grade' => 'Grade A',
            'module' => 'Module A',
            'term1' => 'January 1 - March 31',
            'term2' => 'April 1 - June 30',
            'start_date' => '2024-01-01',
            'end_date' => '2024-06-30'
        ];

        // Simulating that we've retrieved a school partner based on the ID (in a real scenario this would be done with a database query)
        // Assume the ID is passed in the URL like ?id=1
        ?>

        <form method="POST" action="#">
            <div class="form-group">
                <label for="school-name">School Name</label>
                <input type="text" class="form-control" id="school-name" name="school_name" value="<?= $dummy_school['name'] ?>">
            </div>

            <div class="form-group">
                <label for="school-location">Location</label>
                <input type="text" class="form-control" id="school-location" name="school_location" value="<?= $dummy_school['location'] ?>">
            </div>

            <div class="form-group">
                <label for="school-area">Area</label>
                <input type="text" class="form-control" id="school-area" name="school_area" value="<?= $dummy_school['area'] ?>">
            </div>

            <div class="form-group">
                <label for="school-grade">Grade</label>
                <input type="text" class="form-control" id="school-grade" name="school_grade" value="<?= $dummy_school['grade'] ?>">
            </div>

            <div class="form-group">
                <label for="school-module">Module</label>
                <input type="text" class="form-control" id="school-module" name="school_module" value="<?= $dummy_school['module'] ?>">
            </div>

            <div class="form-group">
                <label for="term1">Term I</label>
                <input type="text" class="form-control" id="term1" name="term1" value="<?= $dummy_school['term1'] ?>">
            </div>

            <div class="form-group">
                <label for="term2">Term II</label>
                <input type="text" class="form-control" id="term2" name="term2" value="<?= $dummy_school['term2'] ?>">
            </div>

            <div class="form-group">
                <label for="start-date">Start Date</label>
                <input type="date" class="form-control" id="start-date" name="start_date" value="<?= $dummy_school['start_date'] ?>">
            </div>

            <div class="form-group">
                <label for="end-date">End Date</label>
                <input type="date" class="form-control" id="end-date" name="end_date" value="<?= $dummy_school['end_date'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
