<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    body {
        background-color: #FFFFFF; /* Pure white background */
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0;
    }
    .navbar {
            background: linear-gradient(180deg, #BFE7FF, #8FCCEB);
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
    .dropdown img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* Intro Section */
    .intro-excerpt {
        padding: 5vh 10vw;
        text-align: center;
        margin: 0 auto;
    }
    .intro-excerpt h1 {
        font-size: 3vw;
        color: #065A82;
        margin-bottom: 20px;
    }
    .intro-excerpt p {
        font-size: 1.5vw;
        color: #333;
        line-height: 1.6;
    }
    .intro-excerpt .btn {
        background-color: #065A82;
        color: #fff;
        border: none;
        padding: 0.8vw 1.5vw;
        font-size: 1.2vw;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .intro-excerpt .btn:hover {
        background-color: #05445E;
    }

    /* Cards Section */
    .card-custom {
        background: #FFFFFF;
        color: #333;
        border: 1px solid #8FCCEB;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        margin: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .card-custom:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }
    .card-custom h1 {
        font-size: 2.5vw;
        color: #6EA8D6;
        margin-bottom: 15px;
    }
    .card-custom p {
        font-size: 1.2vw;
        color: #555;
        line-height: 1.5;
    }

    /* Footer */
    footer {
        background: linear-gradient(180deg, #BFE7FF, #8FCCEB);
        padding: 10px;
        text-align: center;
        color: #fff;
        font-size: 1vw;
        margin-top: 30px;
    }

    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .intro-excerpt h1 {
            font-size: 2.5rem;
        }
        .intro-excerpt p {
            font-size: 1.2rem;
        }
        .card-custom h1 {
            font-size: 2rem;
        }
        .card-custom p {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .navbar {
            height: 60px;
        }
        .navbar-brand img {
            height: 40px;
        }
        .dropdown img {
            width: 35px;
            height: 35px;
        }
        .intro-excerpt {
            padding: 30px 15px;
        }
        .intro-excerpt h1 {
            font-size: 2rem;
        }
        .intro-excerpt p {
            font-size: 1rem;
        }
        .card-custom h1 {
            font-size: 1.75rem;
        }
        .card-custom p {
            font-size: 0.875rem;
        }
    }
</style>
<body>
    <section>
        <nav class="navbar navbar-light">
            <div class="container-fluid d-flex align-items-center">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../img/KodingNext.png" alt="Koding Next Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: white;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Picture">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item active" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/branch/kmy/teachers/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/calendar.php">Calendar</a></li>
                        <!-- <li><a class="dropdown-item" href="/LMS/all-access/branch/branch.php">Branch</a></li> -->
                        <li><a class="dropdown-item" href="/LMS/all-access/schools/schools.php">School Partners</a></li>
                        <li><a class="dropdown-item" href="/LMS/all-access/time-table.php">Time Table</a></li>
                        <li><a class="dropdown-item text-danger" href="/LMS/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="intro-excerpt">
            <h1>Welcome to Koding Next</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse nisi laborum nesciunt facilis ipsum quidem veritatis iure possimus quod tempore.</p>
            <p>
                <a href="#" class="btn btn-lg">Join</a>
            </p>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="card card-custom">
                        <h1>01</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus in libero risus</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-custom">
                        <h1>02</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus in libero risus</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-custom">
                        <h1>03</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus in libero risus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        © 2024 Koding Next. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
