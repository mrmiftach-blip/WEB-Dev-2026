<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'author', 'content', 'updated_at_display'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
