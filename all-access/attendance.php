<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
        }
        .navbar {
            background: linear-gradient(180deg, #BFE7FF, #8FCCEB);
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
        .dropdown img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        .card-custom {
            background-color: #8FCCEB;
            color: #fff;
            border-radius: 15px;
            padding: 20px;
            margin: 15px 0;
        }
        .table {
            color: white;
            width: 100%;
            margin-bottom: 20px;
        }
        th {
            background-color: #BFE7FF;
        }
        td {
            background-color: #BFE7FF;
        }
        .btn-primary {
            background-color: #ffffff;
            color: #3e425d;
            border-radius: 50px;
            padding: 10px 30px;
        }
        .btn-primary:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <section>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="/LMS/img/KodingNext.png" alt="Bootstrap">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Picture">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item active" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/branch/kmy/teachers/profile.php">Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="/LMS/all-access/calendar.php">Calendar</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/branch/branch.php">Branch</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/schools/schools.php">School Partners</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/time-table.php">Time Table</a></li>
                        <li><a class="dropdown-item text-danger" href="/LMS/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="content-wrapper">
        <div class="container">
            <div class="card card-custom">
                <h1>Record Daily Attendance - JK 8-12 Roblox</h1>
                <div class="card-header">
                    <h4 class="mb-0">Attendance Record</h4>
                </div>
                <div class="card-body">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                        $attendance = $_POST['attendance'] ?? [];
                        echo '<div class="alert alert-success">Attendance has been submitted successfully!</div>';
                        
                    }
                    ?>

                    <form action="" method="post" class="attendance-form">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Status</th>
                                        <?php for ($day = 1; $day <= 15; $day++) { ?>
                                            <th><?php echo $day; ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example data -->
                                    <?php
                                    $students = [
                                        ['name' => 'Celine', 'status' => 'Active'],
                                        ['name' => 'Michael', 'status' => 'Active']
                                    ];
                                    foreach ($students as $index => $student) {
                                    ?>
                                        <tr>
                                            <td><?php echo $student['name']; ?></td>
                                            <td><?php echo $student['status']; ?></td>
                                            <?php for ($day = 1; $day <= 15; $day++) { ?>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="attendance[<?php echo $index; ?>][day<?php echo $day; ?>]" value="Present">
                                                        <label class="form-check-label">Present</label>
                                                        <br>
                                                        <input class="form-check-input" type="radio" name="attendance[<?php echo $index; ?>][day<?php echo $day; ?>]" value="Absent">
                                                        <label class="form-check-label">Absent</label>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
