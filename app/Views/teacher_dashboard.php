<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Teacher Dashboard' ?></title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    /* Base */
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #f8f9fa;
      overflow-x: hidden;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #00c853, #64dd17);
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
      backdrop-filter: blur(10px);
      animation: slideDown 0.8s ease;
    }

    .navbar-brand {
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #fff !important;
      text-shadow: 0 0 10px rgba(255,255,255,0.6);
    }

    .navbar-text, .nav-link {
      color: #fff !important;
      transition: 0.3s ease;
      font-weight: 500;
    }

    .nav-link:hover {
      color: #212121 !important;
      background: rgba(255,255,255,0.8);
      border-radius: 30px;
      padding: 5px 15px;
    }

    /* Header */
    .dashboard-header {
      text-align: center;
      padding: 6rem 1rem 3rem;
      animation: fadeInUp 1s ease;
    }

    .dashboard-header h1 {
      font-weight: 700;
      font-size: 3rem;
      text-shadow: 0 0 20px rgba(100,255,100,0.4);
    }

    .dashboard-header p {
      color: #ccc;
      font-size: 1.1rem;
    }

    /* Cards */
    .dashboard-card {
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 20px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .dashboard-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 20px 45px rgba(0,255,100,0.3);
    }

    .dashboard-card i {
      font-size: 3rem;
      color: #76ff03;
      margin-bottom: 1rem;
      animation: glowPulse 3s infinite ease-in-out;
    }

    .dashboard-card h5 {
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .dashboard-card p {
      color: #bbb;
      font-size: 0.95rem;
      margin-bottom: 1.2rem;
    }

    /* Button */
    .btn-custom {
      background: linear-gradient(90deg, #76ff03, #00e676);
      border: none;
      color: #111;
      font-weight: 600;
      border-radius: 30px;
      padding: 0.7rem 1.5rem;
      transition: 0.4s ease;
      box-shadow: 0 0 15px rgba(0,255,100,0.3);
    }

    .btn-custom:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(100,255,100,0.7);
    }

    /* Footer */
    footer {
      text-align: center;
      color: #aaa;
      padding: 2rem 1rem;
      font-size: 0.9rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      margin-top: 4rem;
      backdrop-filter: blur(5px);
    }

    /* Animations */
    @keyframes glowPulse {
      0% { text-shadow: 0 0 10px #76ff03; }
      50% { text-shadow: 0 0 25px #00e676; }
      100% { text-shadow: 0 0 10px #76ff03; }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideDown {
      from { transform: translateY(-60px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    /* Scroll Animation */
    [data-animate] {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease;
    }

    [data-animate].active {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="fas fa-graduation-cap me-2"></i>Student Portal</a>
      <div class="navbar-nav ms-auto d-flex align-items-center">
        <span class="navbar-text me-3"><i class="fas fa-user-circle me-1"></i> Welcome, Teacher!</span>
        <a class="nav-link btn btn-sm btn-light text-success fw-semibold px-3" href="/logout">
          <i class="fas fa-sign-out-alt me-1"></i> Logout
        </a>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <div class="dashboard-header">
    <h1><i class="fas fa-chalkboard-teacher me-2 text-success"></i>Teacher Dashboard</h1>
    <p>Manage classes, students, and announcements with power and ease.</p>
  </div>

  <!-- DASHBOARD CARDS -->
  <div class="container pb-5">
    <div class="row g-4 justify-content-center">

      <div class="col-md-4" data-animate>
        <div class="dashboard-card">
          <i class="fas fa-bullhorn"></i>
          <h5>Announcements</h5>
          <p>Post and view important updates for your students.</p>
          <a href="/announcements" class="btn btn-custom">Go to Announcements</a>
        </div>
      </div>

      
    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    &copy; <?= date('Y') ?> Student Portal — Teacher Dashboard. All Rights Reserved.
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
