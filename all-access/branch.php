<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #3e425d;
            color: white;
        }
        .navbar-brand img {
            height: 80px;
        }
        /* Uniform card size */
        .card {
            min-height: 350px;
            max-width: 350px; /* Ideal card width */
            margin: 0 auto 30px; /* Center the card and add space between rows */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Ensure buttons are at the bottom */
        }
        .card-body {
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <section>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../../img/KodingNext.png" alt="KodingNext Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/LMS/index.php">Home</a></li>
                        <li><a class="dropdown-item" href="/all-access/branch/kmy/teachers/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="/all-access/calendar.html">Calendar</a></li>
                        <li><a class="dropdown-item active" href="/all-access/branch/branch.html">Branch</a></li>
                        <li><a class="dropdown-item" href="/all-access/schools/schools.html">School Partners</a></li>
                        <li><a class="dropdown-item" href="/all-access/time-table.html">Time Table</a></li>
                        <li><a class="dropdown-item text-danger" href="/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Branch Cards Section -->
    <section class="container my-5">
        <div class="row">
            <!-- Dummy Data for Branch 1 -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kemayoran (Head Office)</h5>
                        <p class="card-text">The Mansion Bougenville, Tower Fontana, Jl. Trembesi, Pademangan Tim., Kec. Pademangan, Jkt Utara, Daerah Khusus Ibukota Jakarta</p>
                        <div>
                            <a href="/LMS/all-access/branch/kmy/students/students.php" class="btn btn-primary">Students</a>
                            <a href="/LMS/all-access/branch/kmy/teachers/teachers.php" class="btn btn-primary">Teachers</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dummy Data for Branch 2 -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gading Serpong</h5>
                        <p class="card-text">Jl. Gading Golf Boulevard No.66 SPRS, RW.66, Cihuni, Kec. Pagedangan, Kabupaten Tangerang, Banten 15332</p>
                        <div>
                            <a href="#" class="btn btn-primary">Students</a>
                            <a href="#" class="btn btn-primary">Teachers</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dummy Data for Branch 3 -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menteng</h5>
                        <p class="card-text">Menteng Central Mall Jl. H.O.S. Cokroaminoto Street #78 & 80, Menteng, Jakarta Pusat.</p>
                        <div>
                            <a href="#" class="btn btn-primary">Students</a>
                            <a href="#" class="btn btn-primary">Teachers</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dummy Data for Branch 4 -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bintaro</h5>
                        <p class="card-text">Jl. Bintaro Jaya, Sektor 9, Tangerang Selatan, Banten.</p>
                        <div>
                            <a href="#" class="btn btn-primary">Students</a>
                            <a href="#" class="btn btn-primary">Teachers</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more dummy branches as needed -->
        </div>
    </section>

    <!-- script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
