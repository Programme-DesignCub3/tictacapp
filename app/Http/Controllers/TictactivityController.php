<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class TictactivityController extends Controller
{
    public function __invoke()
    {
        $activities = Activity::all();

        $categories = $activities->pluck('category')->unique();

        $activities = Activity::paginate(12);

        return view('pages.tictactivity',
            compact(
                'activities',
                'categories'
            )
        );
    }
}
