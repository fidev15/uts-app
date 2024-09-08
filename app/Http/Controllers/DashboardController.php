<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // You can add logic here to pass data to the dashboard
        return view('dashboard');
    }

    public function profile()
    {
        // Logic for profile page
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function sales()
    {
        // Logic for sales page, e.g., retrieve sales data
        $sales = []; // Replace with actual sales data fetching logic
        return view('sales', compact('sales'));
    }

    public function settings()
    {
        // Logic for settings page
        return view('settings');
    }
}
