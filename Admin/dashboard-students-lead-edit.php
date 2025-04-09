<?php
$lead_id = isset($_GET['id']) ? $_GET['id'] : 1;
$lead = [
    'day' => 'Thursday',
    'schedule' => '16:45 - 18:45',
    'student_name' => 'Ethan Kyle',
    'phone_number' => '080000000',
    'age' => 5,
    'age_group' => 'JK 4-6',
    'module' => 'Games',
    'teacher' => 'Yuan',
    'assigned_by' => 'Friska',
    'room_link' => 'lesson1',
    'sa' => 'Deby',
    'branch' => 'Kemayoran',
    'source_lead' => 'Walk-in'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updated_lead = $_POST;
    echo '<div class="alert alert-success">Lead data has been updated successfully!</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Leads</title>
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
            padding: 10px 20px;
            color: white;
        }
        .btn-danger:hover {
            background: #ef4444;
        }
        .action-buttons {
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
            margin-top: 20px;
        }
        .btn-secondary {
            margin-right: 10px;
            padding: 10px 20px;
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
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Edit Lead Information</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="day" class="form-label">Day</label>
                            <input type="text" class="form-control" id="day" name="day" value="<?php echo $lead['day']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="schedule" class="form-label">Schedule</label>
                            <input type="text" class="form-control" id="schedule" name="schedule" value="<?php echo $lead['schedule']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="student_name" class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="student_name" name="student_name" value="<?php echo $lead['student_name']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $lead['phone_number']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Student Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="<?php echo $lead['age']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age_group" class="form-label">Age Group</label>
                            <input type="text" class="form-control" id="age_group" name="age_group" value="<?php echo $lead['age_group']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="module" class="form-label">Module</label>
                            <input type="text" class="form-control" id="module" name="module" value="<?php echo $lead['module']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="teacher" class="form-label">Teacher</label>
                            <input type="text" class="form-control" id="teacher" name="teacher" value="<?php echo $lead['teacher']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="assigned_by" class="form-label">Assigned By</label>
                            <input type="text" class="form-control" id="assigned_by" name="assigned_by" value="<?php echo $lead['assigned_by']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="room_link" class="form-label">Room Link G-meet</label>
                            <input type="text" class="form-control" id="room_link" name="room_link" value="<?php echo $lead['room_link']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sa" class="form-label">SA</label>
                            <input type="text" class="form-control" id="sa" name="sa" value="<?php echo $lead['sa']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="branch" class="form-label">Branch</label>
                            <input type="text" class="form-control" id="branch" name="branch" value="<?php echo $lead['branch']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="source_lead" class="form-label">Source Lead</label>
                            <input type="text" class="form-control" id="source_lead" name="source_lead" value="<?php echo $lead['source_lead']; ?>" required>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <a href="/admin/dashboard-students.html" class="btn btn-secondary">Cancel</a>
                        <button type="button" class="btn btn-success" onclick="moveToStudents()">Move to Students</button>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete this lead? This action cannot be undone.")) {
                alert("Lead has been deleted.");
            }
        }

        function moveToStudents() {
            alert("Lead has been moved to students.");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
