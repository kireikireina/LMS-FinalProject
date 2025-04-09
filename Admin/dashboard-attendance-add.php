<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Students</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .form-content .form-items {
            border: 3px solid #fff;
            padding: 40px;
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            text-align: left;
            transition: all 0.4s ease;
            background-color: #2c2f48;
        }
        .form-content h3 {
            color: #fff;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .form-content p {
            color: #fff;
            font-size: 17px;
            font-weight: 300;
            line-height: 20px;
            margin-bottom: 30px;
        }
        .form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
            width: 100%;
            padding: 9px 20px;
            border: 0;
            outline: 0;
            border-radius: 6px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            transition: all 0.3s ease;
            margin-top: 16px;
        }
        .btn-primary {
            background-color: #6C757D;
            outline: none;
            border: 0px;
            box-shadow: none;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
            background-color: #495056;
            outline: none !important;
            border: none !important;
            box-shadow: none;
        }
        .form-content textarea {
            width: 100%;
            padding: 8px 20px;
            border-radius: 6px;
            background-color: #fff;
            border: 0;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            outline: none;
            resize: none;
            height: 120px;
            margin-bottom: 14px;
        }
        .form-content textarea:hover, .form-content textarea:focus {
            background-color: #ebeff8;
            color: #8D8D8D;
        }
        .card {
            background-color: #3e425d;
            border: none;
            color: white;
        }
        .card .card-body {
            padding: 20px;
        }
        .form-button {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
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
                        <li><a class="dropdown-item" href="/admin/dashboard-home.html">Dashboard</a></li>
                        <li><a class="dropdown-item text-danger" href="/index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <form class="requires-validation" novalidate>
                        <h3>Add New Student</h3>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="mb-3">
                                    <input type="text" placeholder="Student's name" class="form-control" id="student1-name" name="student1-name" required>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select mt-3" name="student1-status" required>
                                        <option selected disabled value="">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" placeholder="Age" class="form-control" id="student1-age" name="student1-age" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" placeholder="Phone Number" class="form-control" id="student1-phone" name="student1-phone" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" placeholder="Student's Email" class="form-control" id="student1-email" name="student1-email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" placeholder="Area" class="form-control" id="student1-area" name="student1-area" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-button mt-3">
                            <a href="dashboard-attendance.php" class="btn btn-danger">Cancel</a>
                            <button id="save" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
