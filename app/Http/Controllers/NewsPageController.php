<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\News;

class NewsPageController extends Controller
{
    function index()
    {
        $company = Company::first();
        $articles = News::where('status', 'publish')
            ->orderBy('created_at', 'desc')  // Sort by created_at in descending order
            ->limit(5)
            ->get();

        $headlineArticles = $articles->first();

        $data =  [
            "company" => $company,
            "articles" => $articles,
            'headlineArticles' => $headlineArticles
        ];

        return view('news.index', $data);
    }

    function detail(News $news)
    {

        $company = Company::first();
        $articles = News::where('status', 'publish')
            ->where("id", "!=", $news->id)
            ->orderBy('created_at', 'desc')  // Sort by created_at in descending order
            ->limit(5)
            ->get();

        $data = [
            "company" => $company,
            "news" => $news,
            "articles" => $articles
        ];

        return view('news.detail', $data);
    }
}
