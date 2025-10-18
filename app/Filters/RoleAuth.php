<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class RoleAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        
        // Check if user is logged in
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        
        $userRole = $session->get('role');
        $uri = $request->getUri();
        $path = $uri->getPath();
        
        // Check role-based access
        switch ($userRole) {
            case 'admin':
                // Admins can access any route starting with /admin
                if (strpos($path, '/admin') === 0) {
                    return null; // Allow access
                }
                break;
                
            case 'teacher':
                // Teachers can only access routes starting with /teacher
                if (strpos($path, '/teacher') === 0) {
                    return null; // Allow access
                }
                break;
                
            case 'student':
                // Students can access /student routes and /announcements
                if (strpos($path, '/student') === 0 || $path === '/announcements') {
                    return null; // Allow access
                }
                break;
        }
        
        // If user tries to access unauthorized route, redirect with error
        return redirect()->to('/announcements')->with('error', 'Access Denied: Insufficient Permissions');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed after request
    }
}
