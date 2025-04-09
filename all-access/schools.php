<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Partners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #FFFFFF; /* Pure white background */
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
        .table-container {
            background-color: #BFE7FF;
            padding: 20px;
            border-radius: 15px;
            width: 95%;
            max-width: 1400px;
            margin: auto;
        }
        .table {
            background-color: #BFE7FF;
            color: #333;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
            margin: auto;
            width: 100%;
        }
        .table th {
            background-color: #8FCCEB;
            color: white;
            padding: 15px;
        }
        .table td {
            padding: 15px;
            background-color: #F0F8FF;
            border-top: 1px solid #8FCCEB;
        }
        .table tr:hover td {
            background-color: #E1F3FB;
        }
        .floating-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 40px;
            color: #fff;
        }
        .controls {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-control, .form-select, .btn {
            min-width: 200px;
            max-width: 300px;
        }
        .search-container {
            display: flex;
            color: white;
        }
        .sort-container {
            display: flex;
            justify-content: flex-end;
        }
        .form-select, .btn {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-light">
            <div class="container-fluid d-flex align-items-center">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="/LMS/img/KodingNext.png" alt="Koding Next Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: white;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Picture">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/LMS/all-access/home.php">Home</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/branch/kmy/teachers/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/calendar.php">Calendar</a></li>
                        <!-- <li><a class="dropdown-item" href="/LMS/all-access/branch/branch.php">Branch</a></li> -->
                        <li><a class="dropdown-item active" href="#">School Partners</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/time-table.php">Time Table</a></li>
                        <li><a class="dropdown-item text-danger" href="/LMS/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container-fluid table-container mt-5">
        <div class="controls">
            <div class="search-container">
                <h1>ICA/CCA</h1>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table" id="teacherTable">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>School</th>
                        <th>Location</th>
                        <th>Area</th>
                        <th>Grade</th>
                        <th>Module</th>
                        <th>Term I (14 Pertemuan)</th>
                        <th>Term I (14 Pertemuan)</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1.</td>
                            <td>School A</td>
                            <td>Location A</td>
                            <td>Area A</td>
                            <td>Grade A</td>
                            <td>Module A</td>
                            <td>January 1 - March 31</td>
                            <td>April 1 - June 30</td>
                            <td>January 1, 2024</td>
                            <td>June 30, 2024</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
