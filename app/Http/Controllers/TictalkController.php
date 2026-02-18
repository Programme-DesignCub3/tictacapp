<?php

namespace App\Http\Controllers;

use App\Models\Tictalk;

class TictalkController extends Controller
{
    public function __invoke()
    {
        $activities = Tictalk::all();

        $categories = $activities->pluck('category')->unique();

        $activities = Tictalk::paginate(12);

        return view('pages.tictactivity',
            compact(
                'activities',
                'categories'
            )
        );
    }
}
