<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #F4F7FA;
            color: #333;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            color: #333;
        }
        .btn-primary {
            background-color: #1C8ED1;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0F6BA8;
        }
        .forgot-password {
            color: #1C8ED1;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Login Section -->
    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <img src="img/KodingNext.png" class="img-fluid mb-4" alt="Sample image">
                </div>
                <div class="col-lg-5">
                    <div class="form-container">
                        <form action="login.php" method="post">
                            <div class="mb-4">
                                <label class="form-label" for="form3Example3">Email</label>
                                <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                    placeholder="...@kodingnext.com" pattern="[a-z0-9._%+-]+@kodingnext\.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                                    placeholder="Enter password">
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <a href="#!" class="forgot-password">Forgot password?</a>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="login" value="user" class="btn btn-primary btn-lg me-2">
                                    Login
                                </button>
                                <button type="submit" name="login" value="admin" class="btn btn-primary btn-lg">
                                    Login as Admin
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
