<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Progress</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f7f8fc;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .task-section {
            margin-bottom: 2rem;
        }

        .task-list {
            list-style: none;
            padding-left: 0;
        }

        .task-list li {
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .task-list li .task-completed {
            font-weight: bold;
            color: #28a745;
        }

        .task-list li .task-pending {
            font-weight: bold;
            color: #dc3545;
        }

        .progress-bar {
            height: 20px;
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

        .divider {
            height: 1px;
            background-color: #ccc;
            margin: 20px 0;
        }

        table {
            color: #333;
            background-color: #fff;
        }

        thead {
            background-color: #e9ecef;
        }

        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .evidence {
            color: #0d6efd;
        }

        /* Add padding and container styling */
        .container {
            max-width: 900px;
            margin-top: 2rem;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h4,
        h5 {
            color: #495057;
        }

        .task-category .dropdown-menu {
            max-height: 300px;
            overflow-y: auto;
        }

        .task-category .dropdown-toggle {
            width: 100%;
            text-align: left;
        }

        .task-list {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://kodingnextteam.getlearnworlds.com/">
                    <img src="../img/KodingNext.png" alt="KodingNext Logo">
                </a>
                <div class="dropdown ms-auto">
                    <a href="#" style="color: black;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list h2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href=".../index.php">Logout</a></li>
                        <li><a class="dropdown-item" href=".../index.php">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Teacher Bio -->
        <div class="teacher-bio d-flex align-items-center">
            <img src="https://via.placeholder.com/150" alt="Teacher Natania Desyderia" class="rounded-circle">
            <div class="bio-data ms-3">
                <h4>Natania Desyderia</h4>
                <p><strong>Position:</strong> Teacher Assistant Intern</p>
                <p><strong>Join Date:</strong> January 15, 2023</p>
                <p><strong>Full Biodata:</strong> <a href="#" class="evidence">View Biodata</a></p>
                <p><strong>Certificate:</strong> <a href="#" class="evidence">View Certificate</a></p>
            </div>
        </div>

        <!-- Onboarding Tasks -->
        <div class="task-category">
            <h5 class="mt-4">Onboarding Tasks</h5>
            <ul class="task-list">
                <li>
                    <div>
                        <span>Task 1</span>
                        <span class="task-completed">Completed</span>
                    </div>
                    <button class="btn btn-sm btn-primary">Edit</button>
                </li>
                <li>
                    <div>
                        <span>Task 2</span>
                        <span class="task-pending">Pending</span>
                    </div>
                    <button class="btn btn-sm btn-primary">Edit</button>
                </li>
                <li>
                    <div>
                        <span>Task 3</span>
                        <span class="task-completed">Completed</span>
                    </div>
                    <button class="btn btn-sm btn-primary">Edit</button>
                </li>
            </ul>
            <div class="progress mt-2">
                <div class="progress-bar bg-success" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">66%</div>
            </div>
        </div>

        <!-- Monthly Tasks with Dropdown -->
        <div class="task-category mt-4">
            <h5>Monthly Tasks</h5>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="monthlyTaskDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Select a Month
                </button>
                <ul class="dropdown-menu" aria-labelledby="monthlyTaskDropdown">
                    <li><a class="dropdown-item" href="#" data-month="january">January</a></li>
                    <li><a class="dropdown-item" href="#" data-month="february">February</a></li>
                    <li><a class="dropdown-item" href="#" data-month="march">March</a></li>
                    <li><a class="dropdown-item" href="#" data-month="april">April</a></li>
                    <li><a class="dropdown-item" href="#" data-month="may">May</a></li>
                    <li><a class="dropdown-item" href="#" data-month="june">June</a></li>
                    <li><a class="dropdown-item" href="#" data-month="july">July</a></li>
                    <li><a class="dropdown-item" href="#" data-month="august">August</a></li>
                    <li><a class="dropdown-item" href="#" data-month="september">September</a></li>
                    <li><a class="dropdown-item" href="#" data-month="october">October</a></li>
                    <li><a class="dropdown-item" href="#" data-month="november">November</a></li>
                    <li><a class="dropdown-item" href="#" data-month="december">December</a></li>
                </ul>
            </div>

            <!-- Monthly Task List (Initially Hidden) -->
            <ul class="task-list" id="monthlyTaskList">
                <!-- Tasks will be populated based on the selected month -->
            </ul>

            <!-- Progress bar for monthly tasks -->
            <div class="progress mt-2">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>

        <!-- Teaching Ability -->
        <div class="task-category mt-4">
            <h5>Teaching Ability</h5>
            <ul class="task-list">
                <li>
                    <div>
                        <span>Task 1: </span>
                        <span class="task-completed">Completed</span>
                    </div>
                    <button class="btn btn-sm btn-primary">Edit</button>
                </li>
                <li>
                    <div>
                        <span>Task 2: </span>
                        <span class="task-pending">Pending</span>
                    </div>
                    <button class="btn btn-sm btn-primary">Edit</button>
                </li>
                <li>
                    <div>
                        <span>Task 3: </span>
                        <span class="task-pending">Pending</span>
                    </div>
                    <button class="btn btn-sm btn-primary">Edit</button>
                </li>
            </ul>
            <div class="progress mt-2">
                <div class="progress-bar bg-success" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">66%</div>
            </div>
        </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const monthlyTasks = {
            january: [
                { name: 'Task A', status: 'Completed' },
                { name: 'Task B', status: 'Pending' },
            ],
            february: [
                { name: 'Task C', status: 'Completed' },
                { name: 'Task D', status: 'Completed' },
            ],
            march: [
                { name: 'Task E', status: 'Pending' },
                { name: 'Task F', status: 'Completed' },
            ],
            april: [
                { name: 'Task G', status: 'Pending' },
                { name: 'Task H', status: 'Completed' },
            ],
            may: [
                { name: 'Task I', status: 'Pending' },
                { name: 'Task J', status: 'Completed' },
            ],
            june: [
                { name: 'Task K', status: 'Pending' },
                { name: 'Task L', status: 'Completed' },
            ],
            july: [
                { name: 'Task M', status: 'Completed' },
                { name: 'Task N', status: 'Pending' },
            ],
            august: [
                { name: 'Task O', status: 'Completed' },
                { name: 'Task P', status: 'Pending' },
            ],
            september: [
                { name: 'Task Q', status: 'Pending' },
                { name: 'Task R', status: 'Completed' },
            ],
            october: [
                { name: 'Task S', status: 'Pending' },
                { name: 'Task T', status: 'Completed' },
            ],
            november: [
                { name: 'Task U', status: 'Pending' },
                { name: 'Task V', status: 'Completed' },
            ],
            december: [
                { name: 'Task W', status: 'Pending' },
                { name: 'Task X', status: 'Completed' },
            ],
        };

        // Function to populate monthly tasks based on selected month
        function populateMonthlyTasks(month) {
            const taskList = document.getElementById('monthlyTaskList');
            taskList.innerHTML = ''; // Clear previous tasks

            monthlyTasks[month].forEach((task, index) => {
                const taskItem = document.createElement('li');
                taskItem.className = 'd-flex justify-content-between align-items-center';
                taskItem.innerHTML = `
                    <span>${task.name}</span>
                    <span class="${task.status === 'Completed' ? 'task-completed' : 'task-pending'}">${task.status}</span>
                    <button class="btn btn-sm btn-primary" onclick="editMonthlyTask('${month}', ${index})">Edit</button>
                `;
                taskList.appendChild(taskItem);
            });
        }

        // Function to edit a monthly task
        function editMonthlyTask(month, index) {
            const task = monthlyTasks[month][index];
            const newTaskName = prompt('Edit task name:', task.name);
            const newStatus = prompt('Edit task status (Completed/Pending):', task.status);

            // Validate and update the task
            if (newTaskName && (newStatus === 'Completed' || newStatus === 'Pending')) {
                task.name = newTaskName;
                task.status = newStatus;
                populateMonthlyTasks(month); // Refresh the task list
            } else {
                alert('Invalid input. Please try again.');
            }
        }

        // Event listener for dropdown selection
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function () {
                const month = this.getAttribute('data-month');
                populateMonthlyTasks(month);
                document.getElementById('monthlyTaskDropdown').textContent = this.textContent; // Update dropdown button text
            });
        });
    </script>
</body>

</html>
