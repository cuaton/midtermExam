<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Announcements' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .announcement-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }
        .announcement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .announcement-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 1.5rem;
        }
        .announcement-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .announcement-meta {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        .announcement-body {
            padding: 2rem;
            background: white;
        }
        .announcement-content {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }
        .announcement-footer {
            background: #f8f9fa;
            border-radius: 0 0 15px 15px;
            padding: 1rem 2rem;
            border-top: 1px solid #e9ecef;
        }
        .priority-high {
            border-left: 5px solid #dc3545;
        }
        .priority-medium {
            border-left: 5px solid #ffc107;
        }
        .priority-low {
            border-left: 5px solid #28a745;
        }
        .announcement-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
        }
        .empty-state i {
            font-size: 4rem;
            color: #6c757d;
            margin-bottom: 1rem;
        }
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 3rem;
        }
        .breadcrumb-custom {
            background: transparent;
            padding: 0;
        }
        .breadcrumb-custom .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        .breadcrumb-custom .breadcrumb-item.active {
            color: white;
        }
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: #667eea;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-graduation-cap me-2"></i>Student Portal
            </a>
            <div class="navbar-nav ms-auto">
                <span class="navbar-text me-3">
                    <i class="fas fa-user me-1"></i>Welcome, <?= ucfirst($_SESSION['role'] ?? 'User') ?>!
                </span>
                <a class="nav-link" href="/logout">
                    <i class="fas fa-sign-out-alt me-1"></i>Logout
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-5 fw-bold mb-3">
                        <i class="fas fa-bullhorn me-3"></i>Announcements
                    </h1>
                    <p class="lead mb-0">Stay updated with the latest news and important information</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="stats-card d-inline-block">
                        <div class="stats-number"><?= count($announcements ?? []) ?></div>
                        <div class="text-muted">Total Announcements</div>
                    </div>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Announcements</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="container">
        <?php if (empty($announcements)): ?>
            <!-- Empty State -->
            <div class="empty-state">
                <i class="fas fa-bullhorn"></i>
                <h3 class="text-muted">No announcements available</h3>
                <p class="text-muted">There are currently no announcements to display. Check back later for updates.</p>
                <a href="/" class="btn btn-primary">
                    <i class="fas fa-home me-2"></i>Back to Home
                </a>
            </div>
        <?php else: ?>
            <!-- Announcements Grid -->
            <div class="row">
                <?php foreach ($announcements as $index => $announcement): ?>
                    <div class="col-lg-6 col-xl-4 mb-4">
                        <div class="announcement-card priority-<?= $index % 3 === 0 ? 'high' : ($index % 3 === 1 ? 'medium' : 'low') ?>">
                            <div class="announcement-header">
                                <div class="d-flex align-items-start">
                                    <div class="announcement-icon me-3">
                                        <i class="fas fa-<?= $index % 3 === 0 ? 'exclamation-triangle' : ($index % 3 === 1 ? 'info-circle' : 'check-circle') ?>"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="announcement-title"><?= htmlspecialchars($announcement['title']) ?></h3>
                                        <div class="announcement-meta">
                                            <i class="fas fa-clock me-1"></i>
                                            <?= date('F j, Y \a\t g:i A', strtotime($announcement['created_at'])) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="announcement-body">
                                <div class="announcement-content">
                                    <?= nl2br(htmlspecialchars($announcement['content'])) ?>
                                </div>
                            </div>
                            <div class="announcement-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>
                                        Posted <?= date('M j, Y', strtotime($announcement['created_at'])) ?>
                                    </small>
                                    <span class="badge bg-<?= $index % 3 === 0 ? 'danger' : ($index % 3 === 1 ? 'warning' : 'success') ?>">
                                        <?= $index % 3 === 0 ? 'High Priority' : ($index % 3 === 1 ? 'Medium Priority' : 'Low Priority') ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Action Buttons -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="/" class="btn btn-outline-primary btn-lg me-3">
                        <i class="fas fa-home me-2"></i>Back to Home
                    </a>
                    <button class="btn btn-primary btn-lg" onclick="window.location.reload()">
                        <i class="fas fa-sync-alt me-2"></i>Refresh
                    </button>
                </div>
            </div>
        <?php endif; ?>
    </div>
    
    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-graduation-cap me-2"></i>Student Portal</h5>
                    <p class="text-muted">Your gateway to academic resources and information</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted mb-0">
                        <i class="fas fa-user me-1"></i>
                        Logged in as: <?= ucfirst($_SESSION['role'] ?? 'User') ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add smooth scrolling and animations
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.announcement-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>
