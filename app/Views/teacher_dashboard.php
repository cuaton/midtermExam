<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Teacher Dashboard' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
            font-family: "Poppins", sans-serif;
            color: #333;
        }

        .navbar {
            background: linear-gradient(90deg, #28a745, #218838);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .navbar-text {
            color: #fff;
        }

        .nav-link {
            color: #fff !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #ffe082 !important;
        }

        .dashboard-container {
            padding: 3rem 1rem;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .display-5 {
            font-weight: 700;
            color: #2e7d32;
        }

        .btn-custom {
            border-radius: 30px;
            font-weight: 600;
            padding: 0.6rem 1.4rem;
        }

        .footer {
            background-color: #ffffff;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            padding: 1rem 0;
            margin-top: 3rem;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-graduation-cap me-2"></i>Student Portal
            </a>
            <div class="navbar-nav ms-auto d-flex align-items-center">
                <span class="navbar-text me-3">
                    <i class="fas fa-user-circle me-1"></i> Welcome, Teacher!
                </span>
                <a class="nav-link btn btn-sm btn-light text-success fw-semibold px-3" href="/logout">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container dashboard-container">
        <div class="text-center mb-5">
            <h1 class="display-5 mb-3">Teacher Dashboard</h1>
            <p class="lead text-muted">Manage your classes, students, and announcements all in one place.</p>
        </div>

        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <div class="card text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-bullhorn fa-3x text-success"></i>
                    </div>
                    <h5 class="card-title">Announcements</h5>
                    <p class="text-muted">Post and view important updates for your students.</p>
                    <a href="/announcements" class="btn btn-success btn-custom">View Announcements</a>
                </div>
            </div>

            
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        &copy; <?= date('Y') ?> Student Portal. All rights reserved.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
