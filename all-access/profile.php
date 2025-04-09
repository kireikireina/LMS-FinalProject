<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    body {
        background-color: #FFFFFF; 
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

        .profile-header {
            background-color: #BFE7FF;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        .profile-header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profile-info {
            padding: 20px;
        }

        .profile-info h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .card-custom {
            background-color: #8FCCEB;
            color: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-custom form {
        width: 100%; /* Ensures the form inside takes up full width */
    }

    .form-control, .form-select, .btn {
        width: 100%; /* Ensures all form elements match the width */
    }

        .progress {
            height: 30px;
        }

        .progress-bar {
            font-size: 1rem;
            line-height: 30px;
        }

        a{
            color: white;
            text-decoration: none;
        }

        .completed {
            background-color: green !important; 
            color: white !;
        }

        .list-group-item {
            background-color: #565c75;
            color: #fff;
            border: none;
        }

        .list-group-item:not(:last-child) {
            border-bottom: 1px solid #6c757d;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                <img src="../../../../img/KodingNext.png" alt="KodingNext Logo">
            </a>
            <div class="dropdown ms-auto">
                <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Picture">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/LMS/index.php">Home</a></li>
                    <li><a class="dropdown-item active" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="/LMS/all-access/calendar.php">Calendar</a></li>
                    <!-- <li><a class="dropdown-item" href="/all-access/branch/branch.html">Branch</a></li> -->
                    <li><a class="dropdown-item" href="/LMS/all-access/schools/schools.php">School Partners</a></li>
                    <li><a class="dropdown-item" href="LMS/all-access/time-table.php">Time Table</a></li>
                    <li><a class="dropdown-item text-danger" href="/index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="profile-header">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Picture">
        <h1>Kireina Kameloeh</h1>
        <p>Teaching Assistant Intern</p>
    </div>


    <div class="container profile-info">
        
        <div class="card-custom">
    <h3>Teaching Schedule</h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Term</th>
                    <th scope="col">Module</th>
                    <th scope="col">Day</th>
                    <th scope="col">Time</th>
                    <th scope="col">Google Class Code</th>
                    <th scope="col">Zoom Link</th>
                    <th scope="col">Student Advisor</th>
                    <th>PIC</th>
                    <th scope="col">Attendance</th>
                </tr>
            </thead>
            <tbody id="teachingScheduleTable">
                <!-- Sample Rows -->
                <tr>
                    <td>Term 1</td>
                    <td>JK 8-12 Roblox</td>
                    <td>Monday</td>
                    <td>10:00 AM - 12:00 PM</td>
                    <td>ABC123</td>
                    <td><a href="https://zoom.us/j/123456789" target="_blank">Zoom Link</a></td>
                    <td>Debby</td>
                    <td>Julia</td>
                    <td><a href="attendance.php">View Attendance</a></td>
                </tr>
                <tr>
                    <td>Term 2</td>
                    <td>JK 12-16 Website</td>
                    <td>Wednesday</td>
                    <td>2:00 PM - 4:00 PM</td>
                    <td>XYZ789</td>
                    <td><a href="https://zoom.us/j/987654321" target="_blank">Zoom Link</a></td>
                    <td>Debby</td>
                    <td>Friska</td>
                    <td><a href="attendance.php" target="_blank">View Attendance</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<h2>Your Progress</h2>
<div class="card-custom">
    <h3>Teaching Ability</h3>
    <div class="progress">
        <div id="overallProgressBar" class="progress-bar bg-secondary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            20%
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Module</th>
                    <th scope="col">L01</th>
                    <th scope="col">L02</th>
                    <th scope="col">L03</th>
                    <th scope="col">L04</th>
                    <th scope="col">L05</th>
                    <th scope="col">L06</th>
                    <th scope="col">L07</th>
                    <th scope="col">L08</th>
                    <th scope="col">Total %</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Row -->
                <tr>
                    <td>LK0068_Games & Apps 6-8 Online</td>
                    <td class="completed"><a href="#">completed</a></td>
                    <td class="completed"><a href="#">completed</a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>LK0068_Robots 6-8</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>0%</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card-custom">
            <h3>Onboarding Progress</h3>
            <div class="progress">
                <div id="onboardingProgressBar" class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div> <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Module</th>
                            <th scope="col">Lesson</th>
                            <th scope="col">Status</th>
                            <th scope="col">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>95</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-custom">
            <h3>Monthly Task & Progress</h3>
            <div class="progress">
                <div id="onboardingProgressBar" class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">0%</div>
            </div> <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Module</th>
                            <th scope="col">Lesson</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Project Status</th>
                            <th scope="col">Final Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JK 8-12 Roblox</td>
                            <td>Lesson 1-4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>JK 8-12 Roblox</td>
                            <td>Lesson 5-8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        

        <script>
            const onboardingPercentage = 50;

            const onboardingProgressBar = document.getElementById('onboardingProgressBar');
            onboardingProgressBar.style.width = onboardingPercentage + '%';
            onboardingProgressBar.setAttribute('aria-valuenow', onboardingPercentage);
            onboardingProgressBar.textContent = onboardingPercentage + '%';
        </script>

    </div>

    <div class="card-custom">
            <h3>Add Project Link</h3>
            <form id="projectForm">
                <div class="mb-3">
                    <label for="moduleSelect" class="form-label">Module</label>
                    <select class="form-select" id="moduleSelect">
                        <option value="JK 8-12 Roblox">JK 8-12 Roblox</option>
                        <option value="JK 12-16 Website">JK 12-16 Website</option>
                        <option value="JK 12-16 Python I">JK 12-16 Python I</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="lessonSelect" class="form-label">Lesson</label>
                    <select class="form-select" id="lessonSelect">
                        <option value="Lesson 1">Lesson I-IV</option>
                        <option value="Lesson 2">Lesson V-VIII</option>
                        <option value="Lesson 3">Lesson IX-XII</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="projectLink" class="form-label">Project Link</label>
                    <input type="url" class="form-control" id="projectLink" placeholder="Enter project link">
                </div>
                <div class="mb-3">
                    <label for="projectLink" class="form-label">Self Recording</label>
                    <input type="url" class="form-control" id="projectLink" placeholder="Enter self recording link">
                </div>
                <button type="button" class="btn btn-primary" onclick="addProject()">Add Project</button>
            </form>
        </div>
    </div>

        


    <script>
        // Initialize progress bar with dummy values
        const monthlyPercentage = 40;
        const overallPercentage = 70;

        const monthlyProgressBar = document.getElementById('monthlyProgressBar');
        monthlyProgressBar.style.width = monthlyPercentage + '%';
        monthlyProgressBar.setAttribute('aria-valuenow', monthlyPercentage);
        monthlyProgressBar.textContent = monthlyPercentage + '%';

        const overallProgressBar = document.getElementById('overallProgressBar');
        overallProgressBar.style.width = overallPercentage + '%';
        overallProgressBar.setAttribute('aria-valuenow', overallPercentage);
        overallProgressBar.textContent = overallPercentage + '%';

        function addProject() {
            const moduleSelect = document.getElementById('moduleSelect');
            const lessonSelect = document.getElementById('lessonSelect');
            const projectLink = document.getElementById('projectLink');
            const mucrecord = document.getElementById('mucrecord');
            const projectScore = document.getElementById('projectScore');
            const mucScore = document.getElementById('mucScore');
            const table = document.getElementById('submittedProjectsTable');
            
            if (projectLink.value && mucrecord.value && projectScore.value && mucScore.value) {
                const overallScore = (parseFloat(projectScore.value) + parseFloat(mucScore.value)) / 2;
                const projectStatus = overallScore >= 75 ? 'Ready' : 'Not Ready';

                const row = table.insertRow();
                row.innerHTML = `
                    <td>${moduleSelect.value}</td>
                    <td>${lessonSelect.value}</td>
                    <td><a href="${projectLink.value}" target="_blank">Project Link</a></td>
                    <td>${projectScore.value}</td>
                    <td><a href="${mucrecord.value}" target="_blank">MUC Record</a></td>
                    <td>${mucScore.value}</td>
                    <td>${overallScore}</td>
                    <td>${projectStatus}</td>
                `;

                projectLink.value = '';
                mucrecord.value = '';
                projectScore.value = '';
                mucScore.value = '';
            } else {
                alert('Please enter all required fields.');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzV7Xn1p6/6VR7F6A4q5uVpu0P7lbLU4o0gKT7ePOw9k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-HoA1kpMECGkYd3feR+4gsO7CbFdAvl76p6i1YPV41fDxELm0xfTDm60ov2aA4nDf" crossorigin="anonymous"></script>
</body>

</html>
