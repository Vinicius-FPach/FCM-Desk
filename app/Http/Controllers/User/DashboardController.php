<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $stats = [
        'wins' => 28,
        'draws' => 3,
        'losses' => 2,
        'titles' => 2,
        ];

        return view('user.dashboard', [
            'userName' => 'Vinicius',
            'stats' => $stats,
        ]);
    }
}
