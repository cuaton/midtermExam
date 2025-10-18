<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= isset($title) ? $title : 'Admin Dashboard' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f5f6fa;
      color: #333;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #ffb300, #f57c00);
      box-shadow: 0 3px 10px rgba(0,0,0,0.15);
    }

    .navbar-brand {
      font-weight: 700;
      letter-spacing: 0.5px;
      color: #fff !important;
    }

    .navbar-text {
      color: #fff;
      font-weight: 500;
    }

    .nav-link {
      color: #fff !important;
      transition: 0.3s;
      font-weight: 500;
    }

    .nav-link:hover {
      color: #212121 !important;
      background-color: rgba(255,255,255,0.2);
      border-radius: 6px;
    }

    /* Hero Section */
    .dashboard-header {
      text-align: center;
      padding: 4rem 1rem 2rem;
    }

    .dashboard-header h1 {
      font-weight: 700;
      color: #f57c00;
    }

    .dashboard-header p {
      color: #666;
      font-size: 1.1rem;
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
      text-align: center;
      background: #fff;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .card-icon {
      width: 70px;
      height: 70px;
      margin: 0 auto 1rem;
      background: linear-gradient(135deg, #ffb300, #f57c00);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: 600;
      color: #333;
    }

    .card-text {
      color: #777;
      font-size: 0.95rem;
    }

    .btn-custom {
      border-radius: 30px;
      font-weight: 600;
      padding: 0.6rem 1.3rem;
    }

    /* Footer */
    .footer {
      background-color: #fff;
      border-top: 1px solid #e0e0e0;
      text-align: center;
      padding: 1rem 0;
      margin-top: 4rem;
      font-size: 0.9rem;
      color: #666;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .dashboard-header {
        padding-top: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="fas fa-user-shield me-2"></i>Admin Panel</a>
      <div class="navbar-nav ms-auto d-flex align-items-center">
        <span class="navbar-text me-3"><i class="fas fa-user-circle me-1"></i> Welcome, Admin!</span>
        <a class="nav-link px-3 fw-semibold" href="/logout"><i class="fas fa-sign-out-alt me-1"></i> Logout</a>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <div class="dashboard-header">
    <h1>Admin Dashboard</h1>
    <p>Manage your portal, users, and system settings efficiently.</p>
  </div>

  <!-- MAIN CONTENT -->
  <div class="container pb-5">
    <div class="row g-4 justify-content-center">
      
      <div class="col-md-4">
        <div class="card p-4">
          <div class="card-icon"><i class="fas fa-bullhorn"></i></div>
          <h5 class="card-title">Announcements</h5>
          <p class="card-text">Post updates and announcements for students and teachers.</p>
          <a href="/announcements" class="btn btn-warning text-dark btn-custom">View Announcements</a>
        </div>
      </div>

      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    &copy; <?= date('Y') ?> Student Portal — Admin Dashboard. All rights reserved.
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
