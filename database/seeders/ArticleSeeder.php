<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Comment;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::factory()
            ->count(30)
            ->create()
            ->each(function ($article) {
                $numComments = rand(10, 20);
                Comment::factory()
                    ->count($numComments)
                    ->create(['article_id' => $article->id]);
            });
    }
}
