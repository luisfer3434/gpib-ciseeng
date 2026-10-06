<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\NewsController;
use App\Models\WorshipSchedule;
use App\Models\News;
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

        $news = News::where(
            'is_published',
            true
        )
        ->latest('published_at')
        ->take(3)
        ->get();

        return view(
            'home',
            compact('worshipSchedules'),
            compact('news')
        );
    }
}
