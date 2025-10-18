<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Announcements' ?></title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    /* Global Styling */
    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top left, #ff9a00, #ff3d00, #111);
      color: #fff;
      overflow-x: hidden;
      min-height: 100vh;
    }

    /* Glowing Animation */
    @keyframes glowPulse {
      0% { box-shadow: 0 0 15px rgba(255,255,255,0.3); }
      50% { box-shadow: 0 0 25px rgba(255,255,255,0.6); }
      100% { box-shadow: 0 0 15px rgba(255,255,255,0.3); }
    }

    /* Navbar */
    .navbar {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255,255,255,0.2);
      animation: fadeInDown 0.8s ease;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.4rem;
      color: #fff !important;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-shadow: 0 0 10px rgba(255,255,255,0.5);
    }

    .nav-link {
      color: #fff !important;
      font-weight: 500;
      transition: 0.3s;
      border-radius: 8px;
      padding: 0.5rem 1rem;
    }

    .nav-link:hover {
      background: linear-gradient(135deg, #ffb400, #ff6b00);
      color: #111 !important;
      transform: scale(1.05);
    }

    /* Header Section */
    .page-header {
      text-align: center;
      padding: 6rem 1rem 3rem;
      color: #fff;
      animation: fadeInUp 1s ease;
    }

    .page-header h1 {
      font-weight: 700;
      font-size: 3.5rem;
      text-shadow: 0 0 20px rgba(255,255,255,0.4);
    }

    .page-header p {
      font-size: 1.2rem;
      opacity: 0.9;
    }

    /* Announcement Cards */
    .announcement-card {
      border-radius: 20px;
      background: rgba(255,255,255,0.12);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255,255,255,0.15);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      transition: all 0.4s ease;
      overflow: hidden;
      position: relative;
      animation: fadeInUp 0.8s ease;
    }

    .announcement-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 20px 45px rgba(255, 145, 0, 0.3);
    }

    .announcement-header {
      background: linear-gradient(135deg, #ffb400, #ff6b00);
      color: #fff;
      padding: 1.5rem;
      display: flex;
      align-items: center;
      gap: 15px;
      position: relative;
    }

    .announcement-header::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(255,255,255,0.15);
      mix-blend-mode: overlay;
      pointer-events: none;
    }

    .announcement-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: rgba(255,255,255,0.25);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      animation: glowPulse 3s infinite ease-in-out;
    }

    .announcement-title {
      font-size: 1.4rem;
      font-weight: 700;
      margin: 0;
    }

    .announcement-body {
      padding: 1.5rem;
      color: #eee;
      line-height: 1.6;
      font-size: 0.95rem;
    }

    .announcement-footer {
      background: rgba(255,255,255,0.05);
      padding: 0.8rem 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px solid rgba(255,255,255,0.1);
    }

    /* Priority Glow Lines */
    .priority-high { border-left: 5px solid #ff1744; }
    .priority-medium { border-left: 5px solid #ffb400; }
    .priority-low { border-left: 5px solid #00e676; }

    /* Empty State */
    .empty-state {
      text-align: center;
      padding: 6rem 2rem;
      color: #fff;
      animation: fadeIn 1s ease;
    }

    .empty-state i {
      font-size: 4rem;
      opacity: 0.9;
    }

    .empty-state h3 {
      margin-top: 1rem;
      font-weight: 600;
    }

    /* Footer */
    footer {
      background: rgba(255,255,255,0.1);
      color: #fff;
      text-align: center;
      padding: 2rem;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
      backdrop-filter: blur(10px);
    }

    /* Scroll Animation */
    [data-animate] {
      opacity: 0;
      transform: translateY(25px);
      transition: all 0.7s ease;
    }

    [data-animate].active {
      opacity: 1;
      transform: translateY(0);
    }

    /* Keyframes */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="fas fa-fire me-2 text-warning"></i>Student Portal</a>
      <div class="navbar-nav ms-auto">
        <span class="nav-link"><i class="fas fa-user me-1"></i><?= ucfirst($_SESSION['role'] ?? 'User') ?></span>
        <a class="nav-link" href="/logout"><i class="fas fa-right-from-bracket me-1"></i>Logout</a>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <div class="page-header mt-5">
    <h1><i class="fas fa-bullhorn me-2 text-warning"></i>Announcements</h1>
    <p>Get the latest updates and important notices instantly.</p>
  </div>

  <!-- MAIN CONTENT -->
  <div class="container pb-5">
    <?php if (empty($announcements)): ?>
      <div class="empty-state">
        <i class="fas fa-bell-slash mb-3"></i>
        <h3>No Announcements Yet</h3>
        <p class="opacity-75">Stay tuned for upcoming updates!</p>
        <a href="/" class="btn btn-warning mt-3"><i class="fas fa-home me-2"></i>Back to Home</a>
      </div>
    <?php else: ?>
      <div class="row g-4">
        <?php foreach ($announcements as $index => $announcement): ?>
          <div class="col-lg-6 col-xl-4" data-animate>
            <div class="announcement-card priority-<?= $index % 3 === 0 ? 'high' : ($index % 3 === 1 ? 'medium' : 'low') ?>">
              <div class="announcement-header">
                <div class="announcement-icon">
                  <i class="fas fa-<?= $index % 3 === 0 ? 'exclamation-triangle' : ($index % 3 === 1 ? 'info-circle' : 'check-circle') ?>"></i>
                </div>
                <div>
                  <h5 class="announcement-title"><?= htmlspecialchars($announcement['title']) ?></h5>
                  <small><i class="fas fa-clock me-1"></i><?= date('F j, Y - g:i A', strtotime($announcement['created_at'])) ?></small>
                </div>
              </div>
              <div class="announcement-body">
                <?= nl2br(htmlspecialchars($announcement['content'])) ?>
              </div>
              <div class="announcement-footer">
                <small><i class="fas fa-calendar me-1"></i><?= date('M j, Y', strtotime($announcement['created_at'])) ?></small>
                <span class="badge bg-<?= $index % 3 === 0 ? 'danger' : ($index % 3 === 1 ? 'warning' : 'success') ?>">
                  <?= $index % 3 === 0 ? 'High' : ($index % 3 === 1 ? 'Medium' : 'Low') ?> Priority
                </span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- FOOTER -->
  <footer>
    &copy; <?= date('Y') ?> Student Portal — All Rights Reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Animate on Scroll
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('active');
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));
  </script>
</body>
</html>
