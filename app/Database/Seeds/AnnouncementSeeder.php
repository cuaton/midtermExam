<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'System Maintenance Notice',
                'content' => 'Please be informed that the school portal will undergo scheduled maintenance on October 25, 2025, from 8:00 PM to 11:00 PM. Access to the system will be temporarily unavailable during this period. We appreciate your understanding.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Enrollment for Second Semester 2025 Now Open',
                'content' => 'Enrollment for the Second Semester of Academic Year 2025 is now open! Please log in to your student account to finalize your subjects and confirm your registration. Deadline for enrollment is November 5, 2025.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days'))
            ],
            [
                'title' => 'Campus Clean-Up Drive',
                'content' => 'Join us for our upcoming Clean-Up Drive on October 22, 2025, at 7:30 AM. All students and faculty members are encouraged to participate. Let’s work together to maintain a clean and green campus!',
                'created_at' => date('Y-m-d H:i:s', strtotime('-5 days'))
            ]
        ];

        // Insert data into the announcements table
        $this->db->table('announcements')->insertBatch($data);
    }
}
