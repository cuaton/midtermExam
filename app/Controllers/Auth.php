<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            
            // Simple authentication logic (in real app, validate against database)
            $users = [
                'admin@portal.com' => ['password' => 'admin123', 'role' => 'admin'],
                'teacher@portal.com' => ['password' => 'teacher123', 'role' => 'teacher'],
                'student@portal.com' => ['password' => 'student123', 'role' => 'student']
            ];
            
            if (isset($users[$email]) && $users[$email]['password'] === $password) {
                // Set session data
                $session = session();
                $session->set([
                    'user_id' => 1,
                    'email' => $email,
                    'role' => $users[$email]['role'],
                    'isLoggedIn' => true
                ]);
                
                // Redirect based on role
                switch ($users[$email]['role']) {
                    case 'student':
                        return redirect()->to('/announcements');
                    case 'teacher':
                        return redirect()->to('/teacher/dashboard');
                    case 'admin':
                        return redirect()->to('/admin/dashboard');
                    default:
                        return redirect()->to('/');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid email or password');
            }
        }
        
        $data = [
            'title' => 'Login - Student Portal'
        ];
        
        return view('login', $data);
    }
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
