<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add School Partners</title>
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
    min-height: 100vh;
}

.form-content {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-items {
    border: 3px solid #fff;
    padding: 40px;
    width: 100%;
    max-width: 900px;
    border-radius: 10px;
    text-align: left;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content .form-title {
    margin-bottom: 30px;
}

.form-content input, .form-content select, .form-content textarea {
    width: 100%;
    padding: 9px 20px;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    margin-top: 16px;
}

label {
    color: #fff;
    font-weight: 600;
}

.btn-primary {
    background-color: #6C757D;
    border: 0;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
    background-color: #495056;
    border: none;
}

.form-content textarea {
    height: 120px;
    margin-bottom: 14px;
}

fieldset {
    border: 1px solid #fff;
    padding: 20px;
    margin-top: 15px;
    border-radius: 8px;
}

legend {
    color: #fff;
    padding: 0 10px;
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
                        <li><a class="dropdown-item" href="/admin/dashboard-students.html">Dashboard</a></li>
                        <li><a class="dropdown-item text-danger" href="/index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="form-body" style="margin-top: 10px;">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3 class="form-title">Add School Partners</h3>
                            <form class="requires-validation" novalidate>    
                                <div class="col-md-12">
                                    <label for="school-name">School Name</label>
                                    <input class="form-control" type="text" name="school-name" id="school-name" placeholder="School Name" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="location">Location</label>
                                    <input class="form-control" type="text" name="location" id="location" placeholder="Location" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="area">Area</label>
                                    <input class="form-control" type="text" name="area" id="area" placeholder="Area" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="module">Module</label>
                                    <select class="form-select mt-3" name="module" id="module" required>
                                        <option selected disabled value="">Select Module</option>
                                        <option value="lk-4-6">LK 4-6 Active Coding</option>
                                        <option value="lk-6-8">LK 6-8 Games & Apps</option>
                                        <option value="jk-8-12">JK 8-12 2D Games with Roblox</option>
                                        <option value="jk-12-16">JK 12-16 Python First</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="day">Day</label>
                                    <select class="form-select mt-3" name="day" id="day" required>
                                        <option selected disabled value="">Select Day</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                    </select>
                                </div>

                                <!-- Term I Form -->
                                <div class="col-md-12 mt-3">
                                    <fieldset>
                                        <legend>Term I (14 Meetings)</legend>
                                        <div class="form-group">
                                            <label for="start-date-term1" class="form-label">Start Date</label>
                                            <input type="date" class="form-control" name="start-date-term1" id="start-date-term1" required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="end-date-term1" class="form-label">End Date</label>
                                            <input type="date" class="form-control" name="end-date-term1" id="end-date-term1" required>
                                        </div>
                                    </fieldset>
                                </div>

                                <!-- Term II Form -->
                                <div class="col-md-12 mt-3">
                                    <fieldset>
                                        <legend>Term II (16 Meetings)</legend>
                                        <div class="form-group">
                                            <label for="start-date-term2" class="form-label">Start Date</label>
                                            <input type="date" class="form-control" name="start-date-term2" id="start-date-term2" required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="end-date-term2" class="form-label">End Date</label>
                                            <input type="date" class="form-control" name="end-date-term2" id="end-date-term2" required>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="form-button mt-3">
                                    <a href="/admin/dashboard-school-partner.html" class="btn btn-danger">Cancel</a>
                                    <button id="save" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
