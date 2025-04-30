<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lawyer;
use App\Models\LawType;

class ExpertController extends Controller
{
    public function index()
    {
        $experts = [
            [
                'name' => 'Adam Phillips',
                'position' => 'Agricultural Power Systems Engineer',
                'image' => config('image-config.team.expert1'),
                'description' => 'Specializes in smart grid solutions and power distribution systems for agricultural operations.',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                    'instagram' => '#'
                ]
            ],
            [
                'name' => 'Dylan Adams',
                'position' => 'Renewable Energy Specialist',
                'image' => config('image-config.team.expert2'),
                'description' => 'Expert in solar and wind power integration for agricultural facilities.',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                    'instagram' => '#'
                ]
            ],
            [
                'name' => 'Gloria Edwards',
                'position' => 'Irrigation Power Systems Expert',
                'image' => config('image-config.team.expert3'),
                'description' => 'Specializes in power solutions for agricultural irrigation systems.',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                    'instagram' => '#'
                ]
            ],
            [
                'name' => 'Josh Dunn',
                'position' => 'Smart Grid & Automation Specialist',
                'image' => config('image-config.team.expert4'),
                'description' => 'Expert in automated power control systems and smart grid implementation.',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                    'instagram' => '#'
                ]
            ]
        ];

        return view('team', compact('experts'));
    }
} 