<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #F4F7FA;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 20px;
        }
        .navbar {
            background: linear-gradient(180deg, #BFE7FF, #8FCCEB);
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h4 {
            color: #1C8ED1;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            background-color: #F4F7FA;
            border: 1px solid #ccc;
        }
        .form-control:focus {
            border: 1px solid #1C8ED1;
            box-shadow: none;
        }
        button {
            width: 100%;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../img/KodingNext.png" alt="KodingNext Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href=".../index.php">Logout</a></li>
                        <li><a class="dropdown-item" href=".../index.php">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Main Container -->
    <div class="container mt-5">
        <!-- Add New Task Form -->
        <h4>Add New Task</h4>
        <form action="your_action_page.php" method="post">
            <div class="form-group">
                <label for="teacher">Select Teacher:</label>
                <select class="form-control" id="teacher" name="teacher">
                    <option>Natania Desyderia</option>
                    <option>Prima Rusma</option>
                    <option>Kireina Natalia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="task">Select Task:</label>
                <select class="form-control" id="task" name="task">
                    <option>Website Development</option>
                    <option>Python Arcade</option>
                    <option>Javascript</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="lesson">Select Lesson:</label>
                <select class="form-control" id="lesson" name="lesson">
                    <option>Lesson 1</option>
                    <option>Lesson 2</option>
                    <option>CCA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="taskType">Task Type:</label>
                <select class="form-control" id="taskType" name="taskType" onchange="toggleMonthDropdown()">
                    <option value="Overall Task">Overall Task</option>
                    <option value="Monthly Task">Monthly Task</option>
                </select>
            </div>
            <!-- Month and Year Selection -->
            <div class="form-group hidden" id="monthDropdown">
                <label for="month">Select Month:</label>
                <select class="form-control" id="month" name="month">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="form-group" id="yearDropdown">
                <label for="year">Select Year:</label>
                <select class="form-control" id="year" name="year">
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        function toggleMonthDropdown() {
            const taskType = document.getElementById("taskType").value;
            const monthDropdown = document.getElementById("monthDropdown");
            monthDropdown.classList.toggle("hidden", taskType !== "Monthly Task");
        }
    </script>
</body>
</html>
