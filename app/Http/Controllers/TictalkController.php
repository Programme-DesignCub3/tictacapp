<?php

namespace App\Http\Controllers;

use App\Models\Tictalk;

class TictalkController extends Controller
{
    public function index()
    {



        return view('pages::tictalks');

    }

    public function show(Tictalk $article)
    {
        seo()
            ->title((string) $article->title, 'Tictalk')
            ->description($article->excerpt)
            ->images(
                $article->getFirstMediaUrl('thumbnail')
            );

        $otherArticles = Tictalk::inRandomOrder()
            ->where('id', '!=', $article->id)
            ->limit(3)
            ->get();

        return view(
            'pages.detail',
            [
                'type' => 'Tictalks',
                'article' => $article,
                'otherArticles' => $otherArticles,
            ]
        );
    }
}
