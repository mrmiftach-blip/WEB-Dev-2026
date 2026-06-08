<?php $__env->startSection('title', $article->title); ?>

<?php $__env->startSection('content'); ?>
    <div style="margin-bottom: 20px;">
        <a href="<?php echo e(route('articles.index')); ?>" style="color: #3b82f6; text-decoration: none;">← Kembali ke daftar artikel</a>
    </div>

    
    <article style="margin-bottom: 40px;">
        <h1 style="font-size: 32px; font-weight: bold; margin-bottom: 15px;"><?php echo e($article->title); ?></h1>

        <div style="display: flex; gap: 20px; margin-bottom: 20px; color: #6b7280;">
            <span>📅 <?php echo e($article->created_at->format('d M Y H:i')); ?></span>
            <span>🏷️ Kategori: <?php echo e($article->category->name ?? 'Tanpa Kategori'); ?></span>
            <span>💬 <?php echo e($article->comments->count()); ?> komentar</span>
        </div>

        <div style="line-height: 1.8; color: #374151;">
            <?php echo nl2br(e($article->content)); ?>

        </div>
    </article>

    
    <div style="border-top: 2px solid #e5e7eb; padding-top: 30px;">
        <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">
            💬 Komentar (<?php echo e($article->comments->count()); ?>)
        </h2>

        <?php $__empty_1 = true; $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="comment-card" id="comment-<?php echo e($comment->id); ?>">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <div>
                        <strong style="font-size: 16px;"><?php echo e($comment->author); ?></strong>
                        <div style="font-size: 12px; color: #6b7280; margin-top: 4px;">
                            <?php echo e($comment->created_at->format('d M Y H:i')); ?>

                            <?php if($comment->updated_at): ?>
                                <span class="badge" style="margin-left: 8px;">
                                    ✏️ Diubah: <?php echo e($comment->updated_at_display ?? $comment->updated_at->format('d M Y H:i')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        
                        <button onclick="openEditModal(<?php echo e($comment->id); ?>, '<?php echo e(addslashes($comment->content)); ?>')"
                                class="btn btn-warning" style="padding: 5px 12px;">
                            ✏️ Edit
                        </button>

                        
                        <form method="POST" action="<?php echo e(route('comments.destroy', [$article->slug, $comment->id])); ?>"
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" style="padding: 5px 12px;">
                                🗑️ Hapus
                            </button>
                        </form>
                    </div>
                </div>
                <p id="content-<?php echo e($comment->id); ?>" style="color: #4b5563; line-height: 1.6; margin-top: 10px;">
                    <?php echo e($comment->content); ?>

                </p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div style="text-align: center; padding: 30px; color: #6b7280;">
                <p>Belum ada komentar. Jadilah yang pertama berkomentar!</p>
            </div>
        <?php endif; ?>
    </div>

    
    <div id="editModal" class="modal">
        <div class="modal-content">
            <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px;">✏️ Edit Komentar</h3>
            <form id="editForm" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
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
            const slug = '<?php echo e($article->slug); ?>';

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\articles\show.blade.php ENDPATH**/ ?>