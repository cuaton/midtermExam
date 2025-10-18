<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Student Portal - Home' ?></title>

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #3b82f6;
      --secondary: #64748b;
      --dark: #0f172a;
      --light: #f8fafc;
      --accent: #f43f5e;
      --gradient-1: linear-gradient(135deg, #3b82f6, #9333ea);
      --gradient-2: linear-gradient(135deg, #0ea5e9, #22d3ee);
      --glass-bg: rgba(255, 255, 255, 0.15);
      --blur: blur(16px);
      --shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--dark);
      color: var(--light);
      overflow-x: hidden;
    }

    /* === Navbar === */
    .navbar {
      background: rgba(15, 23, 42, 0.6);
      backdrop-filter: var(--blur);
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
    }

    .navbar-brand {
      font-weight: 700;
      color: #fff !important;
      font-size: 1.5rem;
    }

    .nav-link {
      color: #cbd5e1 !important;
      font-weight: 500;
      transition: color 0.3s ease;
      border-radius: 10px;
      padding: 0.5rem 1rem !important;
    }

    .nav-link:hover {
      color: #fff !important;
      background: rgba(255, 255, 255, 0.1);
    }

    /* === Hero Section === */
    .hero {
      background: radial-gradient(circle at top left, #1e3a8a, #111827);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: url('https://www.transparenttextures.com/patterns/stardust.png');
      opacity: 0.15;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      animation: fadeInUp 1s ease-out;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 800;
      background: var(--gradient-1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
      color: #cbd5e1;
      max-width: 600px;
      margin: 1rem auto 2rem;
      font-size: 1.1rem;
    }

    .btn-modern {
      padding: 0.8rem 1.8rem;
      border-radius: 12px;
      font-weight: 600;
      border: none;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: var(--shadow);
    }

    .btn-primary-modern {
      background: var(--gradient-2);
      color: white;
    }

    .btn-primary-modern:hover {
      transform: translateY(-3px);
      filter: brightness(1.1);
    }

    .btn-outline-modern {
      background: transparent;
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: white;
    }

    .btn-outline-modern:hover {
      background: rgba(255, 255, 255, 0.1);
      transform: translateY(-3px);
    }

    /* === Feature Section === */
    .features {
      padding: 6rem 0;
      background: #1e293b;
    }

    .section-title {
      font-weight: 700;
      font-size: 2.5rem;
      background: var(--gradient-1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 1rem;
      text-align: center;
    }

    .section-subtitle {
      color: #cbd5e1;
      text-align: center;
      margin-bottom: 3rem;
    }

    .feature-card {
      background: var(--glass-bg);
      backdrop-filter: var(--blur);
      border-radius: 20px;
      padding: 2rem;
      color: white;
      text-align: center;
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
      height: 100%;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 40px rgba(59, 130, 246, 0.4);
    }

    .feature-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      background: var(--gradient-2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .feature-title {
      font-size: 1.4rem;
      font-weight: 600;
    }

    .feature-text {
      color: #cbd5e1;
      margin: 1rem 0 2rem;
    }

    /* === Stats Section === */
    .stats {
      padding: 5rem 0;
      background: radial-gradient(circle at bottom right, #0f172a, #1e293b);
    }

    .stat-box {
      text-align: center;
      background: var(--glass-bg);
      backdrop-filter: var(--blur);
      border-radius: 16px;
      padding: 2rem;
      box-shadow: var(--shadow);
      transition: 0.3s;
    }

    .stat-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 30px rgba(147, 51, 234, 0.3);
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 800;
      background: var(--gradient-2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .stat-label {
      color: #cbd5e1;
      font-weight: 500;
    }

    /* === Footer === */
    footer {
      background: #0f172a;
      padding: 3rem 0 2rem;
      color: #94a3b8;
    }

    .footer-brand {
      font-size: 1.5rem;
      font-weight: 700;
      color: white;
      margin-bottom: 1rem;
    }

    .footer-links a {
      color: #94a3b8;
      text-decoration: none;
      transition: 0.3s;
    }

    .footer-links a:hover {
      color: white;
    }

    .footer-bottom {
      border-top: 1px solid #1e293b;
      margin-top: 2rem;
      padding-top: 1rem;
      text-align: center;
      color: #64748b;
    }

    /* === Animation === */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap me-2"></i>Student Portal</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="#features">Features</a>
          <a class="nav-link" href="/announcements">Announcements</a>
          <a class="nav-link" href="/login">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container hero-content">
      <h1 class="hero-title">Empowering Education Through Technology</h1>
      <p class="hero-subtitle">
        Explore your academic journey with ease — announcements, grades, attendance, and more in one futuristic platform.
      </p>
      <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="/login" class="btn-modern btn-primary-modern"><i class="fas fa-rocket me-2"></i> Get Started</a>
        <a href="/announcements" class="btn-modern btn-outline-modern"><i class="fas fa-info-circle me-2"></i> Learn More</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="features">
    <div class="container">
      <h2 class="section-title">Access by Role</h2>
      <p class="section-subtitle">Select your account type to continue</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card">
            <i class="feature-icon fas fa-user-graduate"></i>
            <h5 class="feature-title">Students</h5>
            <p class="feature-text">View grades, track attendance, and stay updated with campus news.</p>
            <a href="/login" class="btn-modern btn-primary-modern w-100">Student Access</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card">
            <i class="feature-icon fas fa-chalkboard-teacher"></i>
            <h5 class="feature-title">Teachers</h5>
            <p class="feature-text">Manage classes, post grades, and communicate with your students.</p>
            <a href="/login" class="btn-modern btn-outline-modern w-100">Teacher Login</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card">
            <i class="feature-icon fas fa-user-shield"></i>
            <h5 class="feature-title">Admin</h5>
            <p class="feature-text">Oversee the portal, manage users, and monitor academic operations.</p>
            <a href="/login" class="btn-modern btn-primary-modern w-100">Admin Login</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-4">
          <h5 class="footer-brand"><i class="fas fa-graduation-cap me-2"></i>Student Portal</h5>
          <p>All-in-one academic management platform for students, teachers, and admins.</p>
        </div>
        <div class="col-md-4">
          <h6 class="text-white fw-bold mb-3">Quick Links</h6>
          <ul class="footer-links list-unstyled">
            <li><a href="/">Home</a></li>
            <li><a href="/announcements">Announcements</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6 class="text-white fw-bold mb-3">Contact</h6>
          <p><i class="fas fa-envelope me-2"></i>support@studentportal.edu</p>
          <p><i class="fas fa-phone me-2"></i>+63 912-345-6789</p>
        </div>
      </div>
      <div class="footer-bottom">

      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
