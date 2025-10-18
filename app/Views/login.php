<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Login - Student Portal' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #2563eb;
      --accent: #9333ea;
      --bg-dark: #0f172a;
      --bg-light: rgba(255, 255, 255, 0.08);
      --text: #f1f5f9;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top left, #1e293b, #0f172a);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      color: var(--text);
    }

    /* Animated gradient overlay */
    body::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: conic-gradient(from 180deg at 50% 50%, #2563eb, #9333ea, #0ea5e9, #2563eb);
      animation: rotate 8s linear infinite;
      opacity: 0.15;
      z-index: 0;
    }

    @keyframes rotate {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .login-wrapper {
      position: relative;
      z-index: 1;
      background: var(--bg-light);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 20px;
      padding: 2.5rem;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 0 40px rgba(0,0,0,0.4);
      animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .login-header .icon {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      color: white;
      font-size: 2rem;
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.5);
      animation: pulse 3s infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .login-header h2 {
      font-weight: 700;
      font-size: 1.75rem;
      margin-bottom: 0.25rem;
    }

    .login-header p {
      font-size: 0.9rem;
      color: #94a3b8;
    }

    .form-control {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.1);
      color: var(--text);
      border-radius: 10px;
      padding: 0.9rem 1rem;
      transition: all 0.3s;
    }

    .form-control:focus {
      background: rgba(255,255,255,0.1);
      border-color: var(--primary);
      box-shadow: 0 0 10px rgba(37, 99, 235, 0.5);
    }

    .btn-login {
      width: 100%;
      padding: 0.9rem;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      border: none;
      border-radius: 10px;
      color: white;
      font-weight: 600;
      transition: all 0.3s;
      margin-top: 0.5rem;
      position: relative;
      overflow: hidden;
    }

    .btn-login::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: rgba(255,255,255,0.2);
      transition: 0.4s;
    }

    .btn-login:hover::before {
      left: 100%;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(37,99,235,0.4);
    }

    .alert {
      border-radius: 10px;
      background: rgba(239,68,68,0.1);
      border: 1px solid rgba(239,68,68,0.3);
      color: #f87171;
      font-weight: 500;
      margin-bottom: 1rem;
    }

    .test-accounts {
      margin-top: 2rem;
      background: rgba(255,255,255,0.05);
      border-radius: 12px;
      padding: 1rem;
    }

    .test-accounts h6 {
      color: #cbd5e1;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .account-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(255,255,255,0.05);
      border-radius: 10px;
      padding: 0.75rem 1rem;
      margin-bottom: 0.75rem;
      border: 1px solid rgba(255,255,255,0.08);
      transition: all 0.3s;
      cursor: pointer;
    }

    .account-item:hover {
      background: rgba(255,255,255,0.12);
      transform: translateX(6px);
    }

    .account-role {
      font-weight: 600;
    }

    .account-role.admin { color: #f87171; }
    .account-role.teacher { color: #10b981; }
    .account-role.student { color: #3b82f6; }

    .back-link {
      text-align: center;
      margin-top: 1.5rem;
    }

    .btn-back {
      color: #94a3b8;
      text-decoration: none;
      transition: all 0.3s;
    }

    .btn-back:hover {
      color: var(--primary);
      transform: translateX(-5px);
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    <div class="login-header">
      <div class="icon"><i class="fas fa-user-graduate"></i></div>
      <h2>Welcome Back</h2>
      <p>Sign in to your Student Portal account</p>
    </div>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert">
        <i class="fas fa-exclamation-triangle me-2"></i>
        <?= $_SESSION['error'] ?>
      </div>
      <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form method="post" action="/login">
      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <button type="submit" class="btn btn-login">
        <i class="fas fa-sign-in-alt me-2"></i> Sign In
      </button>
    </form>

    <div class="test-accounts">
      <h6><i class="fas fa-key me-2"></i>Test Accounts</h6>
      <div class="account-item" onclick="fillCredentials('admin@portal.com', 'admin123')">
        <span class="account-role admin">Admin</span>
        <span>admin@portal.com / admin123</span>
      </div>
      <div class="account-item" onclick="fillCredentials('teacher@portal.com', 'teacher123')">
        <span class="account-role teacher">Teacher</span>
        <span>teacher@portal.com / teacher123</span>
      </div>
      <div class="account-item" onclick="fillCredentials('student@portal.com', 'student123')">
        <span class="account-role student">Student</span>
        <span>student@portal.com / student123</span>
      </div>
    </div>

    <div class="back-link">
      <a href="/" class="btn-back"><i class="fas fa-arrow-left me-2"></i>Back to Home</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function fillCredentials(email, password) {
      document.getElementById('email').value = email;
      document.getElementById('password').value = password;
    }
  </script>
</body>
</html>
