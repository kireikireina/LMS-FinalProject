<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Attendance</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        html, body {
            height: 100%;
            background-color: #3e425d;
            overflow: auto;
        }
        .navbar-brand img {
            height: 80px;
        }
        .card {
            background-color: #3e425d;
            border: none;
            color: white;
        }
        .card .card-body {
            padding: 20px;
        }
        .table-container {
            margin-top: 20px;
        }
        .table {
            color: #fff;
        }
        .table th, .table td {
            border: 1px solid #fff;
        }
        .table .status {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="/img/KodingNext.png" alt="KodingNext">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/admin/dashboard-students.php">Dashboard</a></li>
                        <li><a class="dropdown-item text-danger" href="/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    
    <section>
        <div class="container table-container">
            <div class="card">
                <div class="card-body">
                    <h3>Student Attendance</h3>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // Dummy student data
                                $students = [
                                    ["name" => "John Doe", "age" => 14, "phone" => "123-456-7890", "email" => "johndoe@example.com", "status" => "Present"],
                                    ["name" => "Jane Smith", "age" => 15, "phone" => "234-567-8901", "email" => "janesmith@example.com", "status" => "Absent"],
                                    ["name" => "Michael Lee", "age" => 13, "phone" => "345-678-9012", "email" => "michaellee@example.com", "status" => "Present"],
                                    ["name" => "Emily Clark", "age" => 14, "phone" => "456-789-0123", "email" => "emilyclark@example.com", "status" => "Present"]
                                ];

                                // Display student data in the table
                                foreach ($students as $student) {
                                    echo "<tr>";
                                    echo "<td>" . $student['name'] . "</td>";
                                    echo "<td>" . $student['age'] . "</td>";
                                    echo "<td>" . $student['phone'] . "</td>";
                                    echo "<td>" . $student['email'] . "</td>";
                                    echo "<td class='status'>" . $student['status'] . "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
