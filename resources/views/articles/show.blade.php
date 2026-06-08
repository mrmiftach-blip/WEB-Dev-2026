{{-- resources/views/articles/show.blade.php --}}
@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div style="margin-bottom: 20px;">
        <a href="{{ route('articles.index') }}" style="color: #3b82f6; text-decoration: none;">← Kembali ke daftar artikel</a>
    </div>

    {{-- Artikel --}}
    <article style="margin-bottom: 40px;">
        <h1 style="font-size: 32px; font-weight: bold; margin-bottom: 15px;">{{ $article->title }}</h1>

        <div style="display: flex; gap: 20px; margin-bottom: 20px; color: #6b7280;">
            <span>📅 {{ $article->created_at->format('d M Y H:i') }}</span>
            <span>🏷️ Kategori: {{ $article->category->name ?? 'Tanpa Kategori' }}</span>
            <span>💬 {{ $article->comments->count() }} komentar</span>
        </div>

        <div style="line-height: 1.8; color: #374151;">
            {!! nl2br(e($article->content)) !!}
        </div>
    </article>

    {{-- Komentar --}}
    <div style="border-top: 2px solid #e5e7eb; padding-top: 30px;">
        <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">
            💬 Komentar ({{ $article->comments->count() }})
        </h2>

        @forelse($article->comments as $comment)
            <div class="comment-card" id="comment-{{ $comment->id }}">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <div>
                        <strong style="font-size: 16px;">{{ $comment->author }}</strong>
                        <div style="font-size: 12px; color: #6b7280; margin-top: 4px;">
                            {{ $comment->created_at->format('d M Y H:i') }}
                            @if($comment->updated_at)
                                <span class="badge" style="margin-left: 8px;">
                                    ✏️ Diubah: {{ $comment->updated_at_display ?? $comment->updated_at->format('d M Y H:i') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        {{-- Tombol Edit (D) --}}
                        <button onclick="openEditModal({{ $comment->id }}, '{{ addslashes($comment->content) }}')"
                                class="btn btn-warning" style="padding: 5px 12px;">
                            ✏️ Edit
                        </button>

                        {{-- Form Hapus (C) --}}
                        <form method="POST" action="{{ route('comments.destroy', [$article->slug, $comment->id]) }}"
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="padding: 5px 12px;">
                                🗑️ Hapus
                            </button>
                        </form>
                    </div>
                </div>
                <p id="content-{{ $comment->id }}" style="color: #4b5563; line-height: 1.6; margin-top: 10px;">
                    {{ $comment->content }}
                </p>
            </div>
        @empty
            <div style="text-align: center; padding: 30px; color: #6b7280;">
                <p>Belum ada komentar. Jadilah yang pertama berkomentar!</p>
            </div>
        @endforelse
    </div>

    {{-- Modal Edit Komentar --}}
    <div id="editModal" class="modal">
        <div class="modal-content">
            <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px;">✏️ Edit Komentar</h3>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <textarea name="content" id="editContent" rows="5"
                          style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; margin-bottom: 15px;"
                          required></textarea>
                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button type="button" onclick="closeModal()" class="btn btn-secondary">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(commentId, content) {
            const modal = document.getElementById('editModal');
            const form = document.getElementById('editForm');
            const textarea = document.getElementById('editContent');
            const slug = '{{ $article->slug }}';

            form.action = `/articles/${slug}/comments/${commentId}`;
            textarea.value = content;
            modal.style.display = 'block';
        }

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('editModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>
@endsection
