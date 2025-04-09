<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers' Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    body {
        background-color: #3e425d;
        color: white;
    }
    a {
        text-decoration: none;
        color: inherit;
    }
    .navbar-brand img {
        height: 80px;
    }
    .teacher-card {
        margin: 10px 0;
    }
    .teacher-card img {
        border-radius: 50%;
        height: 100px;
        width: 100px;
        object-fit: cover;
    }
    .card-body {
        text-align: center;
    }
    .search-bar-container {
        display: flex;
        justify-content: flex-end;
        margin-top: -10px; /* Adjusted for closer spacing */
        margin-bottom: 10px; /* Added for spacing from content */
    }
    .teacher-card .card {
        width: 100%;
    }
</style>
<body>
    <section>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../../../../img/KodingNext.png" alt="KodingNext Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/LMS/all-access/home.php">Home</a></li>
                    <li><a class="dropdown-item" href="/LMS/all-access/branch/kmy/teachers/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/calendar.php">Calendar</a></li>
                        <li><a class="dropdown-item active">Branch</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/branch/branch.php">School Partners</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/time-table.php">Time Table</a></li>
                        <li><a class="dropdown-item text-danger" href="/LMS/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container my-3">
        <div class="search-bar-container">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </div>

        <div class="row justify-content-center">
            <?php
                // Dummy teacher data array
                $teachers = [
                    ["name" => "Natania Desyderia", "role" => "Teacher Assistant Intern", "email" => "natania@kodingnext.com", "photo" => "https://via.placeholder.com/150"],
                    ["name" => "Kireina Kameloeh", "role" => "Teacher Assistant Intern", "email" => "kireina@kodingnext.com", "photo" => "https://via.placeholder.com/150"],
                    ["name" => "Rusma Prima Rokhmaningtyas", "role" => "Advanced Teacher", "email" => "rusma@kodingnext.com", "photo" => "https://via.placeholder.com/150"],
                    // Add more teachers as needed
                ];

                // Loop through each teacher and generate the cards
                foreach ($teachers as $teacher) {
                    echo '
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 teacher-card d-flex justify-content-center">
                        <div class="card bg-dark text-light">
                            <div class="card-body">
                                <img src="' . $teacher['photo'] . '" alt="Teacher Photo" class="mb-3">
                                <h5 class="card-title">' . $teacher['name'] . '</h5>
                                <p class="card-text">' . $teacher['role'] . '</p>
                                <a href="mailto:' . $teacher['email'] . '"><i class="bi bi-envelope-at"></i></a>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>

    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
