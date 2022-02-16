<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Teacher::factory()->create([
            'name' => 'Teacher1',
            'phone' => '0123',
            'password' => '1234',
        ]);
    }
}
