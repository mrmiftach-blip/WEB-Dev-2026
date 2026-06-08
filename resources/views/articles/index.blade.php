{{-- resources/views/articles/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <h1 style="font-size: 28px; font-weight: bold; margin-bottom: 20px;">📚 Daftar Artikel</h1>

    {{-- Form Pencarian (B) --}}
    <form method="GET" action="{{ route('articles.index') }}" class="search-form">
        <input type="text" name="search" placeholder="Cari artikel berdasarkan judul atau konten..."
               value="{{ $currentSearch }}" class="search-input">
        <button type="submit" class="btn btn-primary">🔍 Cari</button>
        @if($currentSearch)
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Reset</a>
        @endif
    </form>

    {{-- Fitur Sortir (E) --}}
    <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <label for="sort">Urutkan:</label>
            <select id="sort" class="sort-select" onchange="window.location.href=this.value">
                <option value="{{ route('articles.index', array_merge(request()->except('sort'), ['sort' => 'default'])) }}"
                        {{ $currentSort == 'default' ? 'selected' : '' }}>
                    Terbaru
                </option>
                <option value="{{ route('articles.index', array_merge(request()->except('sort'), ['sort' => 'az'])) }}"
                        {{ $currentSort == 'az' ? 'selected' : '' }}>
                    Nama A-Z
                </option>
                <option value="{{ route('articles.index', array_merge(request()->except('sort'), ['sort' => 'za'])) }}"
                        {{ $currentSort == 'za' ? 'selected' : '' }}>
                    Nama Z-A
                </option>
            </select>
        </div>
        <div>
            <strong>Total Artikel:</strong> {{ $articles->total() }}
        </div>
    </div>

    {{-- Daftar Artikel --}}
    @forelse($articles as $article)
        <div class="article-card">
            <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">
                <a href="{{ route('articles.show', $article->slug) }}" style="color: #1f2937; text-decoration: none;">
                    {{ $article->title }}
                </a>
            </h2>
            <div style="display: flex; gap: 15px; margin-bottom: 10px; color: #6b7280; font-size: 14px;">
                <span>📅 {{ $article->created_at->format('d M Y') }}</span>
                <span>🏷️ {{ $article->category->name ?? 'Tanpa Kategori' }}</span>
                <span>💬 {{ $article->comments->count() }} komentar</span>
            </div>
            <p style="color: #4b5563; line-height: 1.6;">
                {{ Str::limit(strip_tags($article->content), 200) }}
            </p>
            <a href="{{ route('articles.show', $article->slug) }}" style="color: #3b82f6; text-decoration: none;">
                Baca selengkapnya →
            </a>
        </div>
    @empty
        <div style="text-align: center; padding: 50px; color: #6b7280;">
            <p>⚠️ Tidak ada artikel yang ditemukan.</p>
            @if($currentSearch)
                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Lihat semua artikel</a>
            @endif
        </div>
    @endforelse

    {{-- Pagination --}}
    <div class="pagination">
        {{ $articles->appends(request()->query())->links() }}
    </div>
@endsection
