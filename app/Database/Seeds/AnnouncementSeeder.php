<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    public function run()
    {
        $data = [
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

        // Insert data into the announcements table
        $this->db->table('announcements')->insertBatch($data);
    }
}
