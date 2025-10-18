<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= isset($title) ? $title : 'Admin Dashboard' ?></title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #6366f1;
      --accent: #8b5cf6;
      --bg-dark: #0f172a;
      --text-light: #f8fafc;
      --glass-bg: rgba(255, 255, 255, 0.05);
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top left, #1e293b, #0f172a);
      color: var(--text-light);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Navbar */
    .navbar {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(15px);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--text-light) !important;
    }

    .nav-link, .navbar-text {
      color: #cbd5e1 !important;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: var(--primary) !important;
    }

    /* Header Section */
    .dashboard-header {
      text-align: center;
      padding: 5rem 1rem 2rem;
    }

    .dashboard-header h1 {
      font-weight: 700;
      font-size: 2.5rem;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .dashboard-header p {
      color: #94a3b8;
      font-size: 1.1rem;
    }

    /* Cards */
    .card {
      background: var(--glass-bg);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      transition: all 0.4s ease;
      padding: 2rem 1.5rem;
      text-align: center;
      color: var(--text-light);
      backdrop-filter: blur(10px);
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 35px rgba(99, 102, 241, 0.4);
    }

    .card-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 1.2rem;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: white;
      box-shadow: 0 0 20px rgba(139, 92, 246, 0.4);
    }

    .card-title {
      font-weight: 600;
      margin-bottom: 0.5rem;
      font-size: 1.2rem;
    }

    .card-text {
      color: #a5b4fc;
      font-size: 0.95rem;
    }

    .btn-glass {
      background: linear-gradient(135deg, var(--primary), var(--accent));
      border: none;
      border-radius: 12px;
      color: white;
      font-weight: 600;
      padding: 0.7rem 1.4rem;
      margin-top: 1rem;
      transition: all 0.3s;
    }

    .btn-glass:hover {
      background: linear-gradient(135deg, var(--accent), var(--primary));
      box-shadow: 0 0 25px rgba(139, 92, 246, 0.4);
      transform: translateY(-2px);
    }

    /* Footer */
    .footer {
      background: rgba(255,255,255,0.05);
      backdrop-filter: blur(10px);
      text-align: center;
      padding: 1.2rem 0;
      margin-top: 4rem;
      font-size: 0.9rem;
      color: #9ca3af;
      border-top: 1px solid rgba(255,255,255,0.1);
    }

    /* Floating Glow Effect */
    .glow {
      position: fixed;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(99,102,241,0.25), transparent 70%);
      filter: blur(80px);
      z-index: -1;
      animation: floatGlow 12s infinite ease-in-out;
    }

    @keyframes floatGlow {
      0%, 100% { transform: translate(0, 0); }
      50% { transform: translate(40px, -60px); }
    }

    .glow.accent {
      top: 20%;
      left: 60%;
      background: radial-gradient(circle, rgba(139,92,246,0.25), transparent 70%);
      animation-delay: 4s;
    }

    @media (max-width: 768px) {
      .dashboard-header {
        padding-top: 3rem;
      }
      .card {
        padding: 1.5rem 1rem;
      }
    }
  </style>
</head>

<body>
  <!-- Glowing Background -->
  <div class="glow"></div>
  <div class="glow accent"></div>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="fas fa-shield-alt me-2"></i> Admin Dashboard</a>
      <div class="ms-auto d-flex align-items-center">
        <span class="navbar-text me-3"><i class="fas fa-user-circle me-1"></i> Welcome, Admin!</span>
        <a class="btn btn-glass px-3" href="/logout"><i class="fas fa-sign-out-alt me-1"></i> Logout</a>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <div class="dashboard-header">
    <h1>Control Center</h1>
    <p>Effortlessly manage your system, users, and content in one place.</p>
  </div>

  <!-- MAIN CONTENT -->
  <div class="container pb-5">
    <div class="row g-4 justify-content-center">

      <div class="col-md-4">
        <div class="card">
          <div class="card-icon"><i class="fas fa-bullhorn"></i></div>
          <h5 class="card-title">Announcements</h5>
          <p class="card-text">Create and manage announcements for users and students.</p>
          <a href="/announcements" class="btn btn-glass">Manage</a>
        </div>
      </div>


    </div>
  </div>

  <!-- FOOTER -->
  <footer class="footer">
    &copy; <?= date('Y') ?> Student Portal — Admin Dashboard. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
