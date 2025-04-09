<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #F4F7FA;
            color: #333;
            overflow-x: hidden;
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
        .sidebar {
            height: 100vh;
            background: linear-gradient(180deg, #8FCCEB, #BFE7FF); 
            padding-top: 150px;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            z-index: 1020;
            overflow-y: auto;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #FBB1CF;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 40px;
        }
        .form-content {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
        }
        .form-content h3 {
            color: #1C8ED1; /* Consistent with the blue in the logo */
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .form-content p {
            color: #666;
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .form-content input[type=text], .form-content textarea {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #F9F9F9;
            font-size: 15px;
            transition: border-color 0.3s;
        }
        .form-content input[type=text]:focus, .form-content textarea:focus {
            border-color: #1C8ED1;
            outline: none;
        }
        label {
            color: #333;
            font-weight: 600;
        }
        .btn-primary {
            background-color: #1C8ED1; /* Blue color consistent with the logo */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0F6BA8;
        }
        .form-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../img/KodingNext.png" alt="Koding Next Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href="/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="sidebar">
        <a style="background-color: #f980b1;" href="#">Home-Edit</a>
        <a href="dashboard-students.php">Students</a>
        <a href="dashboard-teachers.php">Teachers</a>
        <a href="dashboard-time-table.html">Time Table</a>
        <a href="dahsboard-school-partner.php">School Partners</a>
        <a href="dashboard-modules.php">Modules</a>
        <a href="dashboard-hr.php">HR</a>
    </div>

    <div class="main-content">
        <section>
            <div class="form-body">
                <div class="row">
                    <!-- Form for Header -->
                    <div class="form-holder">
                        <div class="form-content">
                            <h3>Edit Header</h3>
                            <form class="requires-validation" novalidate>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="header-title" id="header-title" placeholder="Header Title" required>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="header-description" id="header-description" placeholder="Header Description" required></textarea>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="header-link" id="header-link" placeholder="Link (additional)" required>
                                </div>
                                <br>
                                <div class="form-actions">
                                    <button id="save-header" class="btn btn-primary">Save Header</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                    <!-- Edit Card 1 -->
                    <div class="form-holder">
                        <div class="form-content">
                            <h3>Edit Card 1</h3>
                            <form class="requires-validation" novalidate>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="card1-title" id="card1-title" placeholder="Card 1 Title" required>
                                </div> <br>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="card1-description" id="card1-description" placeholder="Card 1 Description" required></textarea>
                                </div>
                                <div class="form-actions">
                                    <button id="save-card1" class="btn btn-primary">Save Card 1</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Edit Card 2 -->
                    <div class="form-holder">
                        <div class="form-content">
                            <h3>Edit Card 2</h3>
                            <form class="requires-validation" novalidate>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="card2-title" id="card2-title" placeholder="Card 2 Title" required>
                                </div> <br>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="card2-description" id="card2-description" placeholder="Card 2 Description" required></textarea>
                                </div>
                                <div class="form-actions">
                                    <button id="save-card2" class="btn btn-primary">Save Card 2</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Edit Card 3 -->
                    <div class="form-holder">
                        <div class="form-content">
                            <h3>Edit Card 3</h3>
                            <form class="requires-validation" novalidate>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="card3-title" id="card3-title" placeholder="Card 3 Title" required>
                                </div> <br>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="card3-description" id="card3-description" placeholder="Card 3 Description" required></textarea>
                                </div>
                                <div class="form-actions">
                                    <button id="save-card3" class="btn btn-primary">Save Card 3</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb2ZLy+G2R4g4Eq9QW4O8f8KzToE63O2M3XmCpmN/cA6B3vXz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-CkT6i/vEjRZTqlw3/VH7Ht8C+q3uQHPL4QsOdE8D/R9G3R4wb5V9HZTQ8sIDxKnZl" crossorigin="anonymous"></script>
</body>
</html>
