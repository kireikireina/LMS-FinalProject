<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    body {
        background-color: #FFFFFF; 
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
    }
    .navbar {
            flex-shrink: 0;
            background: linear-gradient(180deg, #BFE7FF, #8FCCEB);
            z-index: 1030;
        }
        .navbar-brand img {
            height: 80px;
        }
    .gcalendar {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    iframe {
        border: solid 1px #777;
        width: 100%;
        height: 100%;
    }
    
    .dropdown img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
</style>
<body>
  <section>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../img/KodingNext.png" alt="KodingNext Logo">
                </a>
            <div class="dropdown ms-auto">
                <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Picture">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/LMS/all-access/home.php">Home</a></li>
                    <li><a class="dropdown-item" href="/LMS//all-access/branch/kmy/teachers/profile.php">Profile</a></li>
                    <li><a class="dropdown-item active" href="#">Calendar</a></li>
                    <!-- <li><a class="dropdown-item" href="/all-access/branch/branch.html">Branch</a></li> -->
                    <li><a class="dropdown-item" href="/LMS/all-access/schools/schools.php">School Partners</a></li>
                    <li><a class="dropdown-item" href="/all-access/time-table.html">Time Table</a></li>
                    <li><a class="dropdown-item text-danger" href="/index.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
  </section>
  <section class="gcalendar">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FJakarta&bgcolor=%23ffffff&src=a2lyZWluYUBrb2RpbmduZXh0LmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=c2VydmVyQGtvZGluZ25leHQuY29t&color=%23039BE5&color=%2333B679&color=%239E69AF"></iframe>
  </section>

  <!-- script JS bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
