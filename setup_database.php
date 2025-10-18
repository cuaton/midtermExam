<?php

// Simple database setup script
// This script creates the database and runs migrations

require_once 'vendor/autoload.php';

use CodeIgniter\Database\Config;
use CodeIgniter\Database\Database;

// Database configuration
$config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'student_portal',
    'DBDriver' => 'MySQLi',
    'DBPrefix' => '',
    'pConnect' => false,
    'DBDebug' => true,
    'charset' => 'utf8',
    'DBCollat' => 'utf8_general_ci',
    'swapPre' => '',
    'encrypt' => false,
    'compress' => false,
    'strictOn' => false,
    'failover' => [],
    'port' => 3306,
];

try {
    // Create database connection
    $db = Database::connect($config);
    
    // Create database if it doesn't exist
    $db->query("CREATE DATABASE IF NOT EXISTS student_portal");
    $db->query("USE student_portal");
    
    // Create announcements table
    $db->query("
        CREATE TABLE IF NOT EXISTS announcements (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            content TEXT NOT NULL,
            created_at DATETIME NULL
        )
    ");
    
    // Insert sample data
    $sampleData = [
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
    
    // Check if data already exists
    $result = $db->query("SELECT COUNT(*) as count FROM announcements");
    $count = $result->getRow()->count;
    
    if ($count == 0) {
        foreach ($sampleData as $data) {
            $db->table('announcements')->insert($data);
        }
        echo "Sample announcements inserted successfully!\n";
    } else {
        echo "Announcements table already has data.\n";
    }
    
    echo "Database setup completed successfully!\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
