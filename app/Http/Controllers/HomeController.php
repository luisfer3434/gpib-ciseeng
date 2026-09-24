<?php

namespace App\Http\Controllers;

use App\Models\WorshipSchedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $worshipSchedules = WorshipSchedule::where(
            'is_active',
            true
        )
        ->orderBy('time')
        ->get();

        return view(
            'home',
            compact('worshipSchedules')
        );
    }
}
