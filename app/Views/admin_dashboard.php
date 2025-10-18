<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Admin Dashboard' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container">
            <a class="navbar-brand" href="/">Student Portal</a>
            <div class="navbar-nav ms-auto">
                <span class="navbar-text me-3">Welcome, Admin!</span>
                <a class="nav-link" href="/logout">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 text-center">Welcome, Admin!</h1>
                <p class="lead text-center">This is your admin dashboard where you can manage the entire portal system.</p>
                
                <div class="text-center mt-5">
                    <a href="/announcements" class="btn btn-primary me-2">View Announcements</a>
                    <a href="/logout" class="btn btn-secondary">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
