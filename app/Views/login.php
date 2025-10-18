<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Login - Student Portal' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #7c3aed;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --dark-color: #1f2937;
            --light-color: #f8fafc;
            --text-primary: #111827;
            --text-secondary: #6b7280;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="1000,100 1000,0 0,100"/></svg>');
            background-size: cover;
        }
        
        .login-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .login-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2.5rem 2rem 2rem;
            text-align: center;
            position: relative;
            z-index: 2;
            overflow: hidden;
        }
        
        .login-header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
            z-index: 1;
        }
        
        .login-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="1000,100 1000,0 0,100"/></svg>');
            background-size: cover;
            z-index: 0;
        }
        
        .login-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1.5rem;
            position: relative;
            z-index: 3;
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .login-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 3;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .login-subtitle {
            font-size: 0.95rem;
            opacity: 0.9;
            position: relative;
            z-index: 3;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        
        .login-body {
            padding: 2.5rem 2rem;
        }
        
        /* Header animations */
        .login-icon {
            animation: iconFloat 3s ease-in-out infinite;
        }
        
        .login-title {
            animation: titleSlide 0.8s ease-out 0.2s both;
        }
        
        .login-subtitle {
            animation: subtitleSlide 0.8s ease-out 0.4s both;
        }
        
        @keyframes iconFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }
        
        @keyframes titleSlide {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes subtitleSlide {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 0.9;
                transform: translateY(0);
            }
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 1rem 1.25rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f9fafb;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            background: white;
        }
        
        .input-group {
            position: relative;
        }
        
        .input-group .form-control {
            padding-left: 3rem;
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            z-index: 3;
        }
        
        .btn-login {
            width: 100%;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-login:hover::before {
            left: 100%;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .alert {
            border-radius: 12px;
            border: none;
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .alert-danger {
            background: #fef2f2;
            color: #dc2626;
            border-left: 4px solid #dc2626;
        }
        
        .test-accounts {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border: 2px solid #cbd5e1;
            border-radius: 16px;
            padding: 2rem;
            margin-top: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .test-accounts::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }
        
        .test-accounts h6 {
            color: var(--text-primary);
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .test-accounts h6 i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }
        
        .account-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            padding: 1.25rem;
            background: white;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
            position: relative;
            cursor: pointer;
        }
        
        .account-item:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            border-color: var(--primary-color);
        }
        
        .account-item:last-child {
            margin-bottom: 0;
        }
        
        .account-role {
            font-weight: 700;
            color: var(--text-primary);
            min-width: 90px;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .account-role.admin {
            color: var(--danger-color);
        }
        
        .account-role.teacher {
            color: var(--success-color);
        }
        
        .account-role.student {
            color: var(--primary-color);
        }
        
        .account-credentials {
            color: var(--text-secondary);
            font-size: 0.95rem;
            font-family: 'Courier New', monospace;
            background: #f1f5f9;
            padding: 0.5rem 0.75rem;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            flex: 1;
        }
        
        .account-item:hover .account-credentials {
            background: #e2e8f0;
            border-color: var(--primary-color);
        }
        
        .copy-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.5rem 0.75rem;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateX(10px);
        }
        
        .account-item:hover .copy-btn {
            opacity: 1;
            transform: translateX(0);
        }
        
        .copy-btn:hover {
            background: var(--secondary-color);
            transform: scale(1.05);
        }
        
        .back-link {
            text-align: center;
            margin-top: 2rem;
        }
        
        .btn-back {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-back:hover {
            color: var(--primary-color);
            transform: translateX(-5px);
        }
        
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .login-container {
                padding: 1rem;
            }
            
            .login-body {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape">
            <i class="fas fa-graduation-cap" style="font-size: 3rem;"></i>
        </div>
        <div class="shape">
            <i class="fas fa-book" style="font-size: 2.5rem;"></i>
        </div>
        <div class="shape">
            <i class="fas fa-users" style="font-size: 2rem;"></i>
        </div>
    </div>
    
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h2 class="login-title">Welcome Back</h2>
                <p class="login-subtitle">Sign in to your Student Portal account</p>
            </div>
            
            <div class="login-body">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <?= $_SESSION['error'] ?>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
                
                <form method="post" action="/login">
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </form>
                
                <div class="test-accounts">
                    <h6>
                        <i class="fas fa-key"></i>
                        Test Accounts
                    </h6>
                    
                    <div class="account-item" onclick="fillCredentials('admin@portal.com', 'admin123')">
                        <span class="account-role admin">Admin</span>
                        <span class="account-credentials">admin@portal.com / admin123</span>
                        <button class="copy-btn" onclick="event.stopPropagation(); copyToClipboard('admin@portal.com')">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                    
                    <div class="account-item" onclick="fillCredentials('teacher@portal.com', 'teacher123')">
                        <span class="account-role teacher">Teacher</span>
                        <span class="account-credentials">teacher@portal.com / teacher123</span>
                        <button class="copy-btn" onclick="event.stopPropagation(); copyToClipboard('teacher@portal.com')">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                    
                    <div class="account-item" onclick="fillCredentials('student@portal.com', 'student123')">
                        <span class="account-role student">Student</span>
                        <span class="account-credentials">student@portal.com / student123</span>
                        <button class="copy-btn" onclick="event.stopPropagation(); copyToClipboard('student@portal.com')">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
                
                <div class="back-link">
                    <a href="/" class="btn-back">
                        <i class="fas fa-arrow-left me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add form validation and animations
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = document.querySelectorAll('.form-control');
            
            // Add focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });
            
            // Form submission animation
            form.addEventListener('submit', function(e) {
                const submitBtn = document.querySelector('.btn-login');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Signing In...';
                submitBtn.disabled = true;
            });
        });
        
        // Function to fill credentials when clicking on test accounts
        function fillCredentials(email, password) {
            document.getElementById('email').value = email;
            document.getElementById('password').value = password;
            
            // Add visual feedback
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            
            emailInput.style.borderColor = 'var(--success-color)';
            passwordInput.style.borderColor = 'var(--success-color)';
            
            setTimeout(() => {
                emailInput.style.borderColor = '';
                passwordInput.style.borderColor = '';
            }, 2000);
            
            // Show success message
            showNotification('Credentials filled successfully!', 'success');
        }
        
        // Function to copy email to clipboard
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                showNotification('Email copied to clipboard!', 'success');
            }).catch(function(err) {
                console.error('Could not copy text: ', err);
                showNotification('Failed to copy to clipboard', 'error');
            });
        }
        
        // Function to show notifications
        function showNotification(message, type) {
            // Remove existing notifications
            const existingNotification = document.querySelector('.notification');
            if (existingNotification) {
                existingNotification.remove();
            }
            
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification notification-${type}`;
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: ${type === 'success' ? 'var(--success-color)' : 'var(--danger-color)'};
                color: white;
                padding: 1rem 1.5rem;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                z-index: 1000;
                font-weight: 500;
                animation: slideInRight 0.3s ease-out;
            `;
            notification.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                ${message}
            `;
            
            // Add animation styles
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideInRight {
                    from {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
            `;
            document.head.appendChild(style);
            
            document.body.appendChild(notification);
            
            // Auto remove after 3 seconds
            setTimeout(() => {
                notification.style.animation = 'slideInRight 0.3s ease-out reverse';
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }
    </script>
</body>
</html>