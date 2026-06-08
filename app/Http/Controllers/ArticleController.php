<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::with('category');

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('content', 'LIKE', "%{$search}%");
            });
        }

        if ($request->has('sort')) {
            if ($request->sort === 'az') {
                $query->orderBy('title', 'asc');
            } elseif ($request->sort === 'za') {
                $query->orderBy('title', 'desc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $articles = $query->paginate(10);
        $currentSort = $request->get('sort', 'default');
        $currentSearch = $request->get('search', '');

        return view('articles.index', compact('articles', 'currentSort', 'currentSearch'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->with('category', 'comments')
            ->firstOrFail();

        return view('articles.show', compact('article'));
    }
}
