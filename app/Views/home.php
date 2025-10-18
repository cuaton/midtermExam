<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Student Portal - Home' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    /* === Global Styles === */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f6fa;
      color: #333;
      overflow-x: hidden;
    }

    /* === Navbar === */
    .navbar {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .navbar-brand {
      font-weight: 700;
      color: #4f46e5 !important;
    }
    .nav-link {
      color: #555 !important;
      font-weight: 500;
      transition: color 0.3s;
    }
    .nav-link:hover {
      color: #4f46e5 !important;
    }

    /* === Hero Section === */
    .hero-section {
      background: linear-gradient(135deg, #4f46e5, #7c3aed);
      color: white;
      padding: 8rem 0 6rem;
      position: relative;
      overflow: hidden;
      border-bottom-left-radius: 60px;
      border-bottom-right-radius: 60px;
    }
    .hero-section::before {
      content: '';
      position: absolute;
      top: -100px;
      left: -150px;
      width: 400px;
      height: 400px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 50%;
      animation: float 6s infinite ease-in-out;
    }
    .hero-title {
      font-size: 3rem;
      font-weight: 700;
    }
    .hero-subtitle {
      font-size: 1.2rem;
      opacity: 0.95;
    }
    .btn-hero {
      border-radius: 50px;
      padding: 0.75rem 1.75rem;
      font-weight: 600;
      transition: all 0.3s;
    }
    .btn-hero:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    /* === Feature Cards === */
    .feature-card {
      border: none;
      border-radius: 25px;
      overflow: hidden;
      background: white;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    .feature-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    .feature-icon {
      width: 90px;
      height: 90px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2rem;
      margin: 2rem auto 1rem;
    }
    .feature-icon.student {
      background: linear-gradient(135deg, #6366f1, #a78bfa);
    }
    .feature-icon.teacher {
      background: linear-gradient(135deg, #f97316, #fb923c);
    }
    .feature-icon.admin {
      background: linear-gradient(135deg, #10b981, #34d399);
    }
    .feature-title {
      font-weight: 600;
      margin-top: 0.5rem;
      color: #222;
    }
    .feature-description {
      color: #666;
      font-size: 0.95rem;
      margin-bottom: 1.5rem;
    }
    .feature-button {
      border-radius: 30px;
      font-weight: 600;
    }

    /* === Stats Section === */
    .stats-section {
      padding: 5rem 0;
      background: #f9fafb;
    }
    .stat-card {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
    }
    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: #4f46e5;
    }
    .stat-label {
      color: #666;
      font-size: 1rem;
    }

    /* === CTA Section === */
    .cta-section {
      background: linear-gradient(135deg, #4f46e5, #7c3aed);
      color: white;
      padding: 5rem 0;
      text-align: center;
      border-top-left-radius: 60px;
      border-top-right-radius: 60px;
    }

    /* === Footer === */
    footer {
      background: #1e1e2f;
      color: #bbb;
      padding: 3rem 0;
    }
    footer a {
      color: #bbb;
      text-decoration: none;
      transition: color 0.3s;
    }
    footer a:hover {
      color: white;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <i class="fas fa-graduation-cap me-2"></i>Student Portal
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="/announcements"><i class="fas fa-bullhorn me-1"></i>Announcements</a>
          <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt me-1"></i>Login</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero-section text-center text-lg-start">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h1 class="hero-title mb-3">Welcome to <span class="fw-bold">Student Portal</span></h1>
          <p class="hero-subtitle mb-4">
            Your all-in-one academic hub — announcements, grades, resources, and more. 
            Stay connected and take control of your educational journey.
          </p>
          <a href="/announcements" class="btn btn-light btn-hero me-2"><i class="fas fa-bullhorn me-2"></i>View Announcements</a>
          <a href="/login" class="btn btn-outline-light btn-hero"><i class="fas fa-sign-in-alt me-2"></i>Get Started</a>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="img-fluid" alt="Student illustration" width="350">
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Choose Your Role</h2>
      <p class="text-muted mb-5">Select your access type to get started.</p>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="feature-card p-4">
            <div class="feature-icon student"><i class="fas fa-user-graduate"></i></div>
            <h4 class="feature-title">Students</h4>
            <p class="feature-description">Access your dashboard, grades, and announcements with ease.</p>
            <a href="/announcements" class="btn btn-primary feature-button w-100">Student Access</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="feature-card p-4">
            <div class="feature-icon teacher"><i class="fas fa-chalkboard-teacher"></i></div>
            <h4 class="feature-title">Teachers</h4>
            <p class="feature-description">Manage classes, post grades, and communicate with students.</p>
            <a href="/login" class="btn btn-warning feature-button w-100">Teacher Login</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-card p-4">
            <div class="feature-icon admin"><i class="fas fa-user-shield"></i></div>
            <h4 class="feature-title">Administrators</h4>
            <p class="feature-description">Oversee operations, post updates, and manage portal tools.</p>
            <a href="/login" class="btn btn-success feature-button w-100">Admin Login</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- CTA -->
  <section class="cta-section">
    <div class="container">
      <h2 class="fw-bold mb-3">Ready to Get Started?</h2>
      <p class="lead mb-4">Join thousands of students and educators on our platform.</p>
      <a href="/login" class="btn btn-light btn-hero me-2"><i class="fas fa-rocket me-2"></i>Start Your Journey</a>
      <a href="/announcements" class="btn btn-outline-light btn-hero"><i class="fas fa-info-circle me-2"></i>Learn More</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-0">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4">
          <h5 class="fw-bold text-white mb-3"><i class="fas fa-graduation-cap me-2"></i>Student Portal</h5>
          <p>Your digital hub for everything academic — grades, announcements, and more.</p>
        </div>
        <div class="col-lg-4">
          <h6 class="text-white fw-bold mb-3">Quick Links</h6>
          <ul class="list-unstyled">
            <li><a href="/">Home</a></li>
            <li><a href="/announcements">Announcements</a></li>
            <li><a href="/login">Login</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h6 class="text-white fw-bold mb-3">Contact</h6>
          <p><i class="fas fa-envelope me-2"></i>dan@studentportal.edu</p>
          <p><i class="fas fa-phone me-2"></i>+63 123-45678</p>
          <p><i class="fas fa-map-marker-alt me-2"></i>RMMC GENSAN</p>
        </div>
      </div>
      <hr class="border-secondary my-4">
      <div class="text-center text-muted small">
        &copy; 2025 Student Portal — Built with ❤️ for education
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
