<?php $__env->startSection('title', 'Daftar Artikel'); ?>

<?php $__env->startSection('content'); ?>
    <h1 style="font-size: 28px; font-weight: bold; margin-bottom: 20px;">📚 Daftar Artikel</h1>

    
    <form method="GET" action="<?php echo e(route('articles.index')); ?>" class="search-form">
        <input type="text" name="search" placeholder="Cari artikel berdasarkan judul atau konten..."
               value="<?php echo e($currentSearch); ?>" class="search-input">
        <button type="submit" class="btn btn-primary">🔍 Cari</button>
        <?php if($currentSearch): ?>
            <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-secondary">Reset</a>
        <?php endif; ?>
    </form>

    
    <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <label for="sort">Urutkan:</label>
            <select id="sort" class="sort-select" onchange="window.location.href=this.value">
                <option value="<?php echo e(route('articles.index', array_merge(request()->except('sort'), ['sort' => 'default']))); ?>"
                        <?php echo e($currentSort == 'default' ? 'selected' : ''); ?>>
                    Terbaru
                </option>
                <option value="<?php echo e(route('articles.index', array_merge(request()->except('sort'), ['sort' => 'az']))); ?>"
                        <?php echo e($currentSort == 'az' ? 'selected' : ''); ?>>
                    Nama A-Z
                </option>
                <option value="<?php echo e(route('articles.index', array_merge(request()->except('sort'), ['sort' => 'za']))); ?>"
                        <?php echo e($currentSort == 'za' ? 'selected' : ''); ?>>
                    Nama Z-A
                </option>
            </select>
        </div>
        <div>
            <strong>Total Artikel:</strong> <?php echo e($articles->total()); ?>

        </div>
    </div>

    
    <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="article-card">
            <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">
                <a href="<?php echo e(route('articles.show', $article->slug)); ?>" style="color: #1f2937; text-decoration: none;">
                    <?php echo e($article->title); ?>

                </a>
            </h2>
            <div style="display: flex; gap: 15px; margin-bottom: 10px; color: #6b7280; font-size: 14px;">
                <span>📅 <?php echo e($article->created_at->format('d M Y')); ?></span>
                <span>🏷️ <?php echo e($article->category->name ?? 'Tanpa Kategori'); ?></span>
                <span>💬 <?php echo e($article->comments->count()); ?> komentar</span>
            </div>
            <p style="color: #4b5563; line-height: 1.6;">
                <?php echo e(Str::limit(strip_tags($article->content), 200)); ?>

            </p>
            <a href="<?php echo e(route('articles.show', $article->slug)); ?>" style="color: #3b82f6; text-decoration: none;">
                Baca selengkapnya →
            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div style="text-align: center; padding: 50px; color: #6b7280;">
            <p>⚠️ Tidak ada artikel yang ditemukan.</p>
            <?php if($currentSearch): ?>
                <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-secondary">Lihat semua artikel</a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    
    <div class="pagination">
        <?php echo e($articles->appends(request()->query())->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\articles\index.blade.php ENDPATH**/ ?>