<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Time Table</title>
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
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content input[type=number], .form-content input[type=date], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}

.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
    box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
    box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
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
                            <h3>Add New Time Table Row</h3>
                            <!-- PHP Form Handler -->
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $day = $_POST['day'];
                                    $date = $_POST['date'];
                                    $week = $_POST['week'];
                                    $notes = $_POST['notes'];

                                    // Save the data to the database (assuming a connection is already established)
                                    // Sample query
                                    // $query = "INSERT INTO timetable (day, date, week, notes) VALUES ('$day', '$date', '$week', '$notes')";
                                    // mysqli_query($conn, $query);

                                    echo "<div class='alert alert-success'>Timetable row added successfully!</div>";
                                }
                            ?>
                            <form class="requires-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" novalidate>    
                                
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
                                <input placeholder="Week" name="week" id="weekInput" type="number" class="form-control mt-3" required>
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <input placeholder="Notes" name="notes" id="notesInput" type="text" class="form-control" style="height: 200px;" required>
                            </div>
                                    <div class="form-button mt-3">
                                    <a href="/admin/dashboard-time-table.php" class="btn btn-danger">Cancel</a>
                                    <button id="save" type="submit" class="btn btn-success">Save</button>
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
