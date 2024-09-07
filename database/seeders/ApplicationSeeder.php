<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::create([
            "page" => "home",
            "section" => 1,
            "position" => "heading",
            "data" => "Welcome to EDU Key International School"
        ]);

        Application::create([
            "page" => "home",
            "section" => 1,
            "position" => "introduction",
            "data" => "We harness the power of cutting-edge technology to create a dynamic and interactive educational experience. Through our robust online learning platform, students can connect with peers and educators from around the world, engaging in collaborative projects and real-time lessons."
        ]);
    }
}
