<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #3e425d;
            overflow-x: hidden;
        }
        .navbar-brand img {
            height: 80px;
        }
        @media (max-width: 450px) {
            .navbar-expand-lg .navbar-nav {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 0;
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: static;
            }
        }
        .table thead th {
            background-color: #6c757d;
            color: #fff;
            text-align: center;
        }
        .table tbody td {
            text-align: center;
            vertical-align: middle;
        }
        .table-responsive {
            padding-top: 10px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .table th, .table td {
            padding: 12px 8px;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        /* Hide the scrollbar for WebKit browsers */
        .table-responsive::-webkit-scrollbar {
            display: none;
        }
        /* Hide the scrollbar for other browsers */
        .table-responsive {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="/img/KodingNext.png" alt="Bootstrap">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/all-access/home.html">Home</a></li>
                        <li><a class="dropdown-item" href="/all-access/calendar.html">Calendar</a></li>
                        <li><a class="dropdown-item active" href="/all-access/branch/branch.html">Branch</a></li>
                        <li><a class="dropdown-item" href="/all-access/schools/schools.html">School Partners</a></li>
                        <li><a class="dropdown-item" href="/all-access/time-table.html">Time Table</a></li>
                        <li><a class="dropdown-item text-danger" href="/index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    
    <section>
        <ul class="nav nav-tabs" style="padding-top: 10px;">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color: white;" href="/all-access/branch/kmy/students/students.html">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Leads</a>
            </li>
        </ul>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
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
                        <th>Room Link G-meet/Zoom</th>
                        <th>SA</th>
                        <th>Source Lead</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Example of leads data (replace this with database query results in a real scenario)
                    $leads = [
                        [
                            'day' => 'Thursday',
                            'schedule' => '16:45 - 18:45',
                            'student_name' => 'Ethan Kyle',
                            'phone' => '080000000',
                            'age' => 5,
                            'age_group' => 'JK 4-6',
                            'module' => 'Games',
                            'teacher' => 'Yuan',
                            'assigned_by' => 'Friska',
                            'room_link' => 'lesson1',
                            'sa' => 'Deby',
                            'source' => 'Walk-in'
                        ],
                        // Add more leads data here...
                    ];

                    // Loop through leads data and generate table rows
                    foreach ($leads as $lead) {
                        echo "<tr>
                                <td>{$lead['day']}</td>
                                <td>{$lead['schedule']}</td>
                                <td>{$lead['student_name']}</td>
                                <td>{$lead['phone']}</td>
                                <td>{$lead['age']}</td>
                                <td>{$lead['age_group']}</td>
                                <td>{$lead['module']}</td>
                                <td>{$lead['teacher']}</td>
                                <td>{$lead['assigned_by']}</td>
                                <td><a href='#'>{$lead['room_link']}</a></td>
                                <td>{$lead['sa']}</td>
                                <td>{$lead['source']}</td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    
    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
