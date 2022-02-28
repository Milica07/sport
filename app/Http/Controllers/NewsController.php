<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Team;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allNews = News::with('user')->paginate(7);
        return view('news.index', compact('allNews'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function getNewsByTeam($teamName)
    {
        $team = Team::where('name', $teamName)->firstOrFail();
        $news = $team->news()->paginate(10);
        return view('news.team-news', compact('team', 'news'));
    }
}
