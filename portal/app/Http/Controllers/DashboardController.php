<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     *
     */

    public function index()
    {
        // Get all users
        $users = User::all();

        // Get the total number of users
        $userCount = User::count();

        // Pass the users and user count to the view
        return view('dashboard', ['users' => $users, 'userCount' => $userCount]);
    }
}
