<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class TictactivityController extends Controller
{
    public function show(Activity $article)
    {
        seo()
            ->title((string) $article->title, 'TicTactivity')
            ->description($article->excerpt)
            ->images(
                $article->getFirstMediaUrl('thumbnail')
            );

        $otherArticles = Activity::inRandomOrder()
            ->where('id', '!=', $article->id)
            ->limit(4)
            ->get();

        return view(
            'pages.detail',
            [
                'type' => 'TicTactivity',
                'article' => $article,
                'otherArticles' => $otherArticles,
            ]
        );
    }
}
