<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students' Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    body{
        background-color: #3e425d;
        text-align: center;
    }
    .navbar-brand img {
        height: 80px;
    }
    .search-bar-container {
        display: flex;
        align-items: center;
        margin-left: auto;
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
        .search-bar-container {
            width: 100%;
            justify-content: center;
            padding: 10px 0;
        }
    }
</style>
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
                <a class="nav-link active" aria-current="page" href="#">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="student-leads.html" style="color: white;">Leads</a>
            </li>
            <div class="search-bar-container">
                <form class="d-flex" role="search" method="GET" action="">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-info" type="submit">Search</button>
                </form>
            </div>
        </ul>

        <div class="table-responsive" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Term</th>
                        <th>Module</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Teacher</th>
                        <th>Google Class Code</th>
                        <th>G-meet Link</th>
                        <th>SA</th>
                        <th>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Assuming connection to the database is already established
                    $conn = new mysqli("localhost", "root", "", "your_database_name");

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Basic SQL query to fetch student data
                    $sql = "SELECT term, module, day, time, teacher, google_class_code, gmeet_link, sa, attendance FROM students";
                    
                    // If there's a search query, filter the results
                    if (isset($_GET['query'])) {
                        $search = $conn->real_escape_string($_GET['query']);
                        $sql .= " WHERE module LIKE '%$search%' OR teacher LIKE '%$search%'";
                    }

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["term"] . "</td>";
                            echo "<td style='background-color: pink;'>" . $row["module"] . "</td>";
                            echo "<td>" . $row["day"] . "</td>";
                            echo "<td>" . $row["time"] . "</td>";
                            echo "<td>" . $row["teacher"] . "</td>";
                            echo "<td>" . $row["google_class_code"] . "</td>";
                            echo "<td><a href='" . $row["gmeet_link"] . "'>" . $row["gmeet_link"] . "</a></td>";
                            echo "<td>" . $row["sa"] . "</td>";
                            echo "<td><a href='" . $row["attendance"] . "'>here</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9'>No students found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
