<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Time Table</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
html, body {
    height: 100%;
    background-color: #3e425d;
    overflow: auto;
}

.navbar-brand img {
    height: 80px;
}

.form-holder {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    width: 100%;
    min-width: 540px;
    border-radius: 10px;
    text-align: left;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 30px;
}

.form-content input[type=text], .form-content input[type=date], .form-content input[type=number], .form-content select, .form-content textarea {
    width: 100%;
    padding: 9px 20px;
    border: none;
    border-radius: 6px;
    background-color: #fff;
    margin-top: 16px;
}

.btn-primary{
    background-color: #6C757D;
    border: none;
    box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
}

textarea {
    height: 120px;
}

</style>
<body>
    <section>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
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

    <section>
        <div class="form-body" style="margin-top: 10px;">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content" style="width: 900px;">
                        <div class="form-items">
                            <h3>Edit Time Table</h3>
                            <?php
                            // Handle form submission
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $day = $_POST['day'];
                                $date = $_POST['date'];
                                $week = $_POST['week'];
                                $notes = $_POST['notes'];

                                // Validate fields
                                if (!empty($day) && !empty($date) && !empty($week) && !empty($notes)) {
                                    // Here, you would typically save the data to the database
                                    // Example of connecting and inserting data into a MySQL database
                                    // $conn = new mysqli('localhost', 'username', 'password', 'database');
                                    // $sql = "UPDATE timetable SET day='$day', date='$date', week='$week', notes='$notes' WHERE id='$id'";
                                    // $conn->query($sql);
                                    // $conn->close();
                                    echo '<div class="alert alert-success">Time table updated successfully!</div>';
                                } else {
                                    echo '<div class="alert alert-danger">Please fill out all fields!</div>';
                                }
                            }
                            ?>
                            <form class="requires-validation" method="POST" action="" novalidate>    
                                <div class="col-md-12">
                                    <select class="form-select mt-3" name="day" required>
                                        <option selected disabled value="">Day</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <input type="date" name="date" class="form-control mt-3" required>
                                </div>

                                <div class="col-md-12">
                                    <input placeholder="Week" name="week" type="number" class="form-control mt-3" required>
                                </div>
                                
                                <div class="col-md-12 mt-3">
                                    <textarea placeholder="Notes" name="notes" class="form-control" required></textarea>
                                </div>

                                <div class="form-button mt-3">
                                    <a href="/admin/dashboard-time-table.html" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
