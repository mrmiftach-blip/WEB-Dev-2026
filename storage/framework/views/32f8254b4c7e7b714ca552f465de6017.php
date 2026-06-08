<?php if (isset($component)) { $__componentOriginal399ae2c9237569ff3f15049431f24baa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ae2c9237569ff3f15049431f24baa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.template','data' => ['title' => 'Artikel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Artikel']); ?>
    <div class="container">
        <?php if(count($articles) < 10): ?>
            <a class="btn btn-success" href="<?php echo e(route('article.create')); ?>">Tambah Artikel</a>
        <?php endif; ?>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="<?php echo e(route('article.single', ['slug' => $article->slug])); ?>">
                        <h5 class="card-title"><?php echo e($article->title); ?></h5>
                    </a>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo e($article->updated_at); ?></h6>
                    <p class="card-text">
                        <?php echo e($article->content); ?>

                    </p>
                    <div class="badge text-bg-light">
                        <?php echo e($article->category->name); ?>

                    </div>
                    <div class="mt-3">
                        
                        <?php if($article->comments_count > 0): ?>
                            <div class="mb-2 text-muted">Komentar terakhir</div>
                            <?php if (isset($component)) { $__componentOriginal14d0044d7787831e6dfe036aeb2cd99d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-comment','data' => ['comment' => $article->comments->last()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['comment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->comments->last())]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d)): ?>
<?php $attributes = $__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d; ?>
<?php unset($__attributesOriginal14d0044d7787831e6dfe036aeb2cd99d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14d0044d7787831e6dfe036aeb2cd99d)): ?>
<?php $component = $__componentOriginal14d0044d7787831e6dfe036aeb2cd99d; ?>
<?php unset($__componentOriginal14d0044d7787831e6dfe036aeb2cd99d); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <a href="<?php echo e(route('article.single', ['slug' => $article->slug])); ?>#comment">Lihat <?php echo e($article->comments_count); ?> komentar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\articles\list.blade.php ENDPATH**/ ?>