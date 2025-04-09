<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form submitted, process the data
    $term_year = $_POST['name'];
    $module = $_POST['module'];

    // Students' information
    $students = [];
    for ($i = 1; $i <= 6; $i++) {
        $students[] = [
            'name' => $_POST["student{$i}-name"],
            'status' => $_POST["student{$i}-status"],
            'age' => $_POST["student{$i}-age"],
            'phone' => $_POST["student{$i}-phone"],
            'email' => $_POST["student{$i}-email"],
            'area' => $_POST["student{$i}-area"],
        ];
    }

    // You can now save this data to a database or process it as needed

    // For demonstration, let's just print the collected data
    echo "<pre>";
    echo "Term - Year: $term_year\n";
    echo "Module: $module\n";
    echo "Students:\n";
    print_r($students);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Terms</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Add your existing CSS here */
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
                        <li><a class="dropdown-item" href="/admin/dashboard-students.html">Dashboard</a></li>
                        <li><a class="dropdown-item text-danger" href="/index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    
    <section>
        <div class="main-content">
            <div class="container">
                <h2 class="mb-0">Add Terms</h2>
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="requires-validation" novalidate>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="name" placeholder="Term - Year" required>
                                </div>
                                <div class="col-md-12">
                                    <select class="form-select mt-3" name="module" required>
                                        <option selected disabled value="">Module</option>
                                        <option value="LK 4-6 Active Coding">LK 4-6 Active Coding</option>
                                        <option value="LK 6-8 Games & Apps">LK 6-8 Games & Apps</option>
                                        <option value="JK 8-12 2D Games with Roblox">JK 8-12 2D Games with Roblox</option>
                                        <option value="JK 12-16 Python First">JK 12-16 Python First</option>
                                    </select>
                                </div>

                                <!-- Students -->
                                <div class="row mt-4">
                                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                                        <div class="col-md-4">
                                            <div class="card d-flex p-2">
                                                <div class="card-body">
                                                    <h5 class="card-title">Student <?php echo $i; ?></h5>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Student's name" class="form-control" name="student<?php echo $i; ?>-name" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <select class="form-select mt-3" name="student<?php echo $i; ?>-status" required>
                                                            <option selected disabled value="">Status</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Age" class="form-control" name="student<?php echo $i; ?>-age" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="tel" placeholder="Phone Number" class="form-control" name="student<?php echo $i; ?>-phone" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="email" placeholder="Student's Email" class="form-control" name="student<?php echo $i; ?>-email" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Area" class="form-control" name="student<?php echo $i; ?>-area" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>

                                <div class="form-button mt-3">
                                    <button id="submit" class="btn btn-primary" type="submit">Submit</button>
                                    <button id="reset" class="btn btn-danger" type="reset">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
