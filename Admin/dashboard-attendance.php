<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Attendance</title>
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
        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-items {
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 40px;
            width: 100%;
            max-width: 800px;
        }
        .form-items h3 {
            color: #8FCCEB;
            font-weight: 700;
        }
        .form-items h5{
            color: #8FCCEB;
            font-weight: 700;
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
    <section>
        <div class="form-holder mt-0">
            <div class="form-items">
                <h3>Term A 2024 - JK 12-16 Python First</h3>
                <h5>online</h5>
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Student Name</th>
                            <th>Status</th>
                            <th>Age</th>
                            <th>Phone Number</th>
                            <th>Student's Email</th>
                            <th>Area</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="studentTable">
                        <!-- Dummy data -->
                        <tr>
                            <td>John Doe</td>
                            <td>Active</td>
                            <td>7</td>
                            <td>+62 812 3456 7890</td>
                            <td>john.doe@gmail.com</td>
                            <td>Jakarta</td>
                            <td><a href="#"><i class="bi bi-pencil-square text-dark"></i></a></td>
                            <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>Inactive</td>
                            <td>9</td>
                            <td>+62 813 9876 5432</td>
                            <td>jane.smith@gmail.com</td>
                            <td>Bandung</td>
                            <td><a href="#"><i class="bi bi-pencil-square text-dark"></i></a></td>
                            <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Michael Johnson</td>
                            <td>Active</td>
                            <td>10</td>
                            <td>+62 815 5551 2345</td>
                            <td>michael.johnson@gmail.com</td>
                            <td>Surabaya</td>
                            <td><a href="#"><i class="bi bi-pencil-square text-dark"></i></a></td>
                            <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Sarah Williams</td>
                            <td>Inactive</td>
                            <td>12</td>
                            <td>+62 816 4443 2111</td>
                            <td>sarah.williams@gmail.com</td>
                            <td>Medan</td>
                            <td><a href="#"><i class="bi bi-pencil-square text-dark"></i></a></td>
                            <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Script for Delete Button -->
    <script>
        function deleteRow(button) {
            // Find the row containing the button and remove it
            const row = button.closest('tr');
            row.remove();
        }
    </script>

    <!-- Script JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
