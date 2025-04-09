<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        html, body {
            height: 100%;
            background: linear-gradient(to bottom right, #dbeafe, #ffffff);
            overflow: auto;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }
        .form-items {
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 40px;
            width: 100%;
            max-width: 600px;
        }
        .form-items h3 {
            color: #8FCCEB;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .form-items input, 
        .form-items select, 
        .form-items textarea {
            border: 1px solid #60a5fa;
            border-radius: 6px;
            padding: 10px 15px;
            font-size: 14px;
            margin-top: 15px;
            width: 100%;
        }
        .form-items input:focus, 
        .form-items select:focus, 
        .form-items textarea:focus {
            border: 2px solid #1d4ed8;
            outline: none;
            background: #e0f2fe;
        }
        .btn-primary {
            background: linear-gradient(to right, #60a5fa, #3b82f6);
            border: none;
            color: white;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 14px;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #3b82f6, #2563eb);
        }
        .btn-danger {
            background: #f87171;
            border: none;
            color: white;
        }
        .btn-danger:hover {
            background: #ef4444;
        }
    </style>
</head>
<body>
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
    <div class="form-holder mt-0">
        <div class="form-items">
            <h3>Add New Data</h3>
            <form class="requires-validation" novalidate method="POST" action="process_form.php">
                <input type="text" name="name" placeholder="Term - Year" required>
                <select name="module" required>
                    <option selected disabled value="">Module</option>
                    <option value="LK 4-6 Active Coding">LK 4-6 Active Coding</option>
                    <option value="LK 6-8 Games & Apps">LK 6-8 Games & Apps</option>
                    <option value="JK 8-12 2D Games with Roblox">JK 8-12 2D Games with Roblox</option>
                    <option value="JK 12-16 Python First">JK 12-16 Python First</option>
                </select>
                <select name="day" required>
                    <option selected disabled value="">Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <!-- More days -->
                </select>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="appt-start" class="form-label">Start</label>
                        <input type="time" id="appt-start" name="appt-start" required>
                    </div>
                    <div class="col-md-6">
                        <label for="appt-end" class="form-label">End</label>
                        <input type="time" id="appt-end" name="appt-end" required>
                    </div>
                </div>
                <select name="teacher" required>
                    <option selected disabled value="">Teacher</option>
                    <option value="Rafika">Rafika</option>
                    <option value="Sisca">Sisca</option>
                </select>
                <input type="text" name="room" placeholder="Room" required>
                <input type="text" name="gcr" placeholder="Google Classroom Code" required>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="dashboard-students.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
