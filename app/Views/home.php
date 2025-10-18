<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Student Portal</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/announcements">Announcements</a>
                <a class="nav-link" href="/login">Login</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4 mb-4">Welcome to Student Portal</h1>
                <p class="lead mb-4">Your gateway to academic resources and information</p>
                
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Students</h5>
                                <p class="card-text">Access your grades, announcements, and academic resources.</p>
                                <a href="/announcements" class="btn btn-primary">View Announcements</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Teachers</h5>
                                <p class="card-text">Manage your classes, post grades, and communicate with students.</p>
                                <a href="/login" class="btn btn-success">Teacher Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Administrators</h5>
                                <p class="card-text">Manage the portal, post announcements, and oversee operations.</p>
                                <a href="/login" class="btn btn-warning">Admin Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
