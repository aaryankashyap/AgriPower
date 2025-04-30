<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\PowerExpert;
use App\Models\PowerType;
use App\Models\PowerProject;
use App\Models\PowerArticle;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create test user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@powerdistribution.com',
            'password' => bcrypt('password123'),
        ]);

        // Create power distribution types
        $powerTypes = [
            'Solar Power Systems',
            'Wind Energy Solutions',
            'Hydroelectric Power',
            'Biomass Energy',
            'Grid Integration',
            'Energy Storage Solutions',
            'Smart Grid Technology',
            'Rural Electrification'
        ];

        foreach ($powerTypes as $type) {
            PowerType::create([
                'Type_Name' => $type
            ]);
        }

        // Create power experts
        $experts = [
            [
                'Expert_Name' => 'Dr. Sarah Johnson',
                'Expert_Pro' => 'Solar Power Systems',
                'Expert_Loc' => 'California',
                'Fees' => 200.00,
                'Role' => 0
            ],
            [
                'Expert_Name' => 'Michael Chen',
                'Expert_Pro' => 'Wind Energy Solutions',
                'Expert_Loc' => 'Texas',
                'Fees' => 250.00,
                'Role' => 0
            ],
            [
                'Expert_Name' => 'Dr. Emily Rodriguez',
                'Expert_Pro' => 'Smart Grid Technology',
                'Expert_Loc' => 'New York',
                'Fees' => 300.00,
                'Role' => 0
            ]
        ];

        foreach ($experts as $expert) {
            PowerExpert::create($expert);
        }

        // Create power projects
        $projects = [
            [
                'title' => 'Solar-Powered Irrigation System',
                'category' => 'Solar Power',
                'type' => 'first',
                'image' => 'portfolio-1.jpg',
                'date' => '2025-01-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Wind Energy Integration',
                'category' => 'Wind Power',
                'type' => 'second',
                'image' => 'portfolio-2.jpg',
                'date' => '2025-02-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Smart Grid Implementation',
                'category' => 'Smart Grid',
                'type' => 'third',
                'image' => 'portfolio-3.jpg',
                'date' => '2025-03-01',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($projects as $project) {
            PowerProject::create($project);
        }

        // Create power articles
        $articles = [
            [
                'title' => 'Benefits of Solar Power in Agriculture',
                'category' => 'Solar Power',
                'content' => 'Exploring how solar power can revolutionize agricultural operations through efficient energy distribution, cost savings, and sustainable farming practices.',
                'image' => 'blog-1.jpg',
                'published_at' => '2025-01-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Smart Grid Technology for Modern Farms',
                'category' => 'Smart Grid',
                'content' => 'Understanding the role of smart grid technology in agricultural power distribution, including automation, monitoring, and optimization of energy usage.',
                'image' => 'blog-2.jpg',
                'published_at' => '2025-02-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Wind Energy Solutions for Rural Areas',
                'category' => 'Wind Power',
                'content' => 'How wind energy can provide sustainable power solutions for rural agricultural communities, reducing dependency on traditional power sources.',
                'image' => 'blog-3.jpg',
                'published_at' => '2025-03-01',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($articles as $article) {
            PowerArticle::create($article);
        }
    }
}
