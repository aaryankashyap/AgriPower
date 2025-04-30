<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PowerProject;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class PageController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function about()
    {
        return view('About');
    }

    public function service()
    {
        return view('Services');
    }

    public function team()
    {
        return view('team');
    }

    public function portfolio()
    {
        return view('FarmProjects');
    }

    public function blog()
    {
        return view('Blog');
    }

    public function contact()
    {
        return view('Contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        DB::table('help')->insert([
            'Help_Name' => $validated['name'],
            'Help_Email' => $validated['email'],
            'Help_Subject' => $validated['subject'],
            'Help_Message' => $validated['message'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response()->json(['message' => 'Your message has been sent successfully!']);
    }

    public function account()
    {
        return view('account');
    }

    public function profileEdit()
    {
        return view('profile_edit_data_and_skills');
    }

    public function terms()
    {
        return view('terms-of-use');
    }

    public function privacy()
    {
        return view('privacy-policy');
    }

    public function cookies()
    {
        return view('cookies');
    }

    public function single()
    {
        return view('single');
    }

    public function search()
    {
        return view('search-t');
    }

    public function bookAppointment()
    {
        return view('bk-ap');
    }

    public function clientProjects()
    {
        return view('client.projects');
    }

    public function farmProjects()
    {
        return view('FarmProjects');
    }
} 