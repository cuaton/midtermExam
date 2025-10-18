# Online Student Portal - CodeIgniter 4

A comprehensive student portal system built with CodeIgniter 4 framework featuring role-based authentication and announcements management.

## Features

### Task 1: Announcements Module
- ✅ Announcement controller with index() method
- ✅ Announcements view displaying title, content, and date
- ✅ Route configuration for /announcements

### Task 2: Database Schema and Data Population
- ✅ Migration for announcements table (id, title, content, created_at)
- ✅ AnnouncementModel with proper configuration
- ✅ Seeder with sample announcements data
- ✅ Controller integration with model for data fetching

### Task 3: Enhanced Authentication and Role-Based Redirection
- ✅ Modified Auth controller with role-based redirection
- ✅ Student → /announcements
- ✅ Teacher → /teacher/dashboard
- ✅ Admin → /admin/dashboard
- ✅ Teacher and Admin controllers with dashboard methods
- ✅ Route configuration for role-specific dashboards

### Task 4: Role-Based Authorization Filter
- ✅ RoleAuth filter implementation
- ✅ Admin access to /admin/* routes
- ✅ Teacher access to /teacher/* routes
- ✅ Student access to /student/* and /announcements routes
- ✅ Access denied redirect with error message
- ✅ Filter registration and route group protection

## Setup Instructions

### Prerequisites
- PHP 8.1 or higher
- MySQL/MariaDB
- Composer
- Web server (Apache/Nginx)

### Installation

1. **Clone/Download the project**
   ```bash
   cd midtermexam
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Database Setup**
   - Create a MySQL database named `student_portal`
   - Update database credentials in `app/Config/Database.php`
   - Run the database setup script:
   ```bash
   php setup_database.php
   ```

4. **Configure Web Server**
   - Point document root to the `public` directory
   - Ensure mod_rewrite is enabled (for Apache)

### Test Accounts

The system includes pre-configured test accounts:

- **Admin**: admin@portal.com / admin123
- **Teacher**: teacher@portal.com / teacher123  
- **Student**: student@portal.com / student123

### Access Points

- **Home**: http://localhost/ (or your domain)
- **Login**: http://localhost/login
- **Announcements**: http://localhost/announcements
- **Teacher Dashboard**: http://localhost/teacher/dashboard
- **Admin Dashboard**: http://localhost/admin/dashboard

## Security Features

- Role-based access control
- Session management
- CSRF protection (configurable)
- Input validation and sanitization
- Secure password handling

## Project Structure

```
midtermexam/
├── app/
│   ├── Controllers/          # Application controllers
│   ├── Models/               # Data models
│   ├── Views/                # View templates
│   ├── Config/               # Configuration files
│   ├── Database/             # Migrations and seeds
│   └── Filters/              # Custom filters
├── public/                   # Web-accessible files
├── writable/                 # Writable directories
└── vendor/                   # Composer dependencies
```

## Development Notes

- All controllers extend BaseController
- Models use CodeIgniter 4's built-in ORM
- Views use Bootstrap 5 for styling
- Authentication uses session-based approach
- Role-based access is enforced via filters

## Git Commits

This project includes meaningful git commits demonstrating:
1. Initial project setup and configuration
2. Feature implementation and testing
3. Final integration and documentation

## License

This project is created for educational purposes as part of a midterm examination.