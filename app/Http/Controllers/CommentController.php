<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentController extends Controller
{
    public function update(Request $request, $slug, $commentId)
    {
        $request->validate([
            'content' => 'required|min:3|max:1000',
        ]);

        $comment = Comment::findOrFail($commentId);
        $comment->content = $request->content;
        $comment->updated_at = now();
        $comment->updated_at_display = now()->format('d M Y H:i');
        $comment->save();

        return redirect()->route('articles.show', $slug)
            ->with('success', 'Komentar berhasil diperbarui!');
    }

    public function destroy($slug, $commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->delete();

        return redirect()->route('articles.show', $slug)
            ->with('success', 'Komentar berhasil dihapus!');
    }
}
