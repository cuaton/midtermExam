<?php

// Simple routing for the Student Portal
session_start();

// Get the requested URI
$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = parse_url($requestUri, PHP_URL_PATH);

// Remove query string and decode
$requestUri = urldecode($requestUri);

// Simple routing
switch ($requestUri) {
    case '/':
        include '../app/Views/home.php';
        break;
        
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle login
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            
            $users = [
                'admin@portal.com' => ['password' => 'admin123', 'role' => 'admin'],
                'teacher@portal.com' => ['password' => 'teacher123', 'role' => 'teacher'],
                'student@portal.com' => ['password' => 'student123', 'role' => 'student']
            ];
            
            if (isset($users[$email]) && $users[$email]['password'] === $password) {
                $_SESSION['user_id'] = 1;
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $users[$email]['role'];
                $_SESSION['isLoggedIn'] = true;
                
                // Redirect based on role
                switch ($users[$email]['role']) {
                    case 'student':
                        header('Location: /announcements');
                        exit;
                    case 'teacher':
                        header('Location: /teacher/dashboard');
                        exit;
                    case 'admin':
                        header('Location: /admin/dashboard');
                        exit;
                }
            } else {
                $_SESSION['error'] = 'Invalid email or password';
                header('Location: /login');
                exit;
            }
        } else {
            include '../app/Views/login.php';
        }
        break;
        
    case '/logout':
        session_destroy();
        header('Location: /');
        exit;
        break;
        
    case '/announcements':
        // Check if user is logged in
        if (!isset($_SESSION['isLoggedIn'])) {
            header('Location: /login');
            exit;
        }
        
        // Sample announcements data
        $announcements = [
            [
                'title' => 'Welcome to the New Academic Year',
                'content' => 'We are excited to welcome all students to the new academic year. Please make sure to check your schedules and attend all classes regularly. If you have any questions, feel free to contact the administration office.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Important: Midterm Examination Schedule',
                'content' => 'The midterm examinations will be held from October 15-20, 2024. Please prepare accordingly and ensure you have all necessary materials. Good luck to all students!',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days'))
            ],
            [
                'title' => 'Library Hours Update',
                'content' => 'The library will now be open from 7:00 AM to 10:00 PM on weekdays and 8:00 AM to 6:00 PM on weekends. Students are encouraged to utilize the library resources for their studies.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-5 days'))
            ]
        ];
        
        include '../app/Views/announcements.php';
        break;
        
    case '/teacher/dashboard':
        // Check if user is logged in and is teacher
        if (!isset($_SESSION['isLoggedIn']) || $_SESSION['role'] !== 'teacher') {
            header('Location: /announcements');
            exit;
        }
        include '../app/Views/teacher_dashboard.php';
        break;
        
    case '/admin/dashboard':
        // Check if user is logged in and is admin
        if (!isset($_SESSION['isLoggedIn']) || $_SESSION['role'] !== 'admin') {
            header('Location: /announcements');
            exit;
        }
        include '../app/Views/admin_dashboard.php';
        break;
        
    default:
        http_response_code(404);
        echo '<h1>404 - Page Not Found</h1>';
        break;
}
