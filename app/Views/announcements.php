<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Announcements' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Student Portal</a>
            <div class="navbar-nav ms-auto">
                <span class="navbar-text me-3">Welcome, <?= ucfirst($_SESSION['role'] ?? 'User') ?>!</span>
                <a class="nav-link" href="/logout">Logout</a>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4"><?= isset($title) ? $title : 'Announcements' ?></h1>
                
                <?php if (empty($announcements)): ?>
                    <div class="alert alert-info">
                        <h4>No announcements available</h4>
                        <p>There are currently no announcements to display.</p>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <?php foreach ($announcements as $announcement): ?>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0"><?= htmlspecialchars($announcement['title']) ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><?= htmlspecialchars($announcement['content']) ?></p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <small>Posted on: <?= date('F j, Y g:i A', strtotime($announcement['created_at'])) ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
                <div class="mt-4">
                    <a href="/" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
