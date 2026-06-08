<?php if (isset($component)) { $__componentOriginal399ae2c9237569ff3f15049431f24baa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ae2c9237569ff3f15049431f24baa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.template','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container">
        <div class="mb-3 text-end">
            <a href="<?php echo e(route('article.edit', ['id' => $article->id])); ?>" class="btn btn-info">
                Ubah
            </a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Hapus
            </button>
            <a href="<?php echo e(route('article.list')); ?>" class="btn btn-secondary">
                Kembali
            </a>
        </div>
        <div class="badge text-bg-light mb-3">
            <?php echo e($article->category->name); ?>

        </div>
        <h1>
            <?php echo e($article->title); ?>

        </h1>
        <h5 class="mb-2 text-body-secondary">
            <?php echo e($article->updated_at); ?>

        </h5>
        <p>
            <?php echo e($article->content); ?>

        </p>

        <div class="accordion mt-5" id="accordionComment">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Komentar
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionComment">
                    <div class="accordion-body">
                        <?php $__currentLoopData = $article->comments->sortByDesc('created_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal14d0044d7787831e6dfe036aeb2cd99d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-comment','data' => ['comment' => $comment]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['comment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d)): ?>
<?php $attributes = $__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d; ?>
<?php unset($__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14d0044d7787831e6dfe036aeb2cd99d)): ?>
<?php $component = $__componentOriginal14d0044d7787831e6dfe036aeb2cd99d; ?>
<?php unset($__componentOriginal14d0044d7787831e6dfe036aeb2cd99d); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <form method="post" action="<?php echo e(route('article.comment', ['id' => $article->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginal49dde7598e3859f9a358a3c4d7e78532 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dde7598e3859f9a358a3c4d7e78532 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.group','data' => ['for' => 'comment','label' => 'Tinggalkan komentar Anda']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'comment','label' => 'Tinggalkan komentar Anda']); ?>
                                <textarea class="form-control" name="comment" id="comment"></textarea>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49dde7598e3859f9a358a3c4d7e78532)): ?>
<?php $attributes = $__attributesOriginal49dde7598e3859f9a358a3c4d7e78532; ?>
<?php unset($__attributesOriginal49dde7598e3859f9a358a3c4d7e78532); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49dde7598e3859f9a358a3c4d7e78532)): ?>
<?php $component = $__componentOriginal49dde7598e3859f9a358a3c4d7e78532; ?>
<?php unset($__componentOriginal49dde7598e3859f9a358a3c4d7e78532); ?>
<?php endif; ?>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus artikel ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="<?php echo e(route('article.delete', ['id' => $article->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal399ae2c9237569ff3f15049431f24baa)): ?>
<?php $attributes = $__attributesOriginal399ae2c9237569ff3f15049431f24baa; ?>
<?php unset($__attributesOriginal399ae2c9237569ff3f15049431f24baa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal399ae2c9237569ff3f15049431f24baa)): ?>
<?php $component = $__componentOriginal399ae2c9237569ff3f15049431f24baa; ?>
<?php unset($__componentOriginal399ae2c9237569ff3f15049431f24baa); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\articles\single.blade.php ENDPATH**/ ?>