<?php if (isset($component)) { $__componentOriginal399ae2c9237569ff3f15049431f24baa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ae2c9237569ff3f15049431f24baa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.template','data' => ['title' => 'Buat Artikel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Buat Artikel']); ?>
    <div class="container">
        <form method="post" class="was-validated">
            <?php echo csrf_field(); ?>
            <?php if(isset($article)): ?>
                <?php if (isset($component)) { $__componentOriginal49dde7598e3859f9a358a3c4d7e78532 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dde7598e3859f9a358a3c4d7e78532 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.group','data' => ['for' => 'slug','label' => 'Slug']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'slug','label' => 'Slug']); ?>
                    <input type="text" name="slug" id="slug" class="form-control" value="<?php echo e(old('slug') ?? $article->slug ?? ''); ?>" required>
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
            <?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal49dde7598e3859f9a358a3c4d7e78532 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dde7598e3859f9a358a3c4d7e78532 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.group','data' => ['for' => 'title','label' => 'Judul']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'title','label' => 'Judul']); ?>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title') ?? $article->title ?? ''); ?>" required>
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
            <?php if (isset($component)) { $__componentOriginal49dde7598e3859f9a358a3c4d7e78532 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dde7598e3859f9a358a3c4d7e78532 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.group','data' => ['for' => 'content','label' => 'Isi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'content','label' => 'Isi']); ?>
                <textarea name="content" id="content" class="form-control" required><?php echo e(old('content') ?? $article->content ?? ''); ?></textarea>
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
            <?php if (isset($component)) { $__componentOriginal49dde7598e3859f9a358a3c4d7e78532 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49dde7598e3859f9a358a3c4d7e78532 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.group','data' => ['for' => 'article_category_id','label' => 'Kategori']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'article_category_id','label' => 'Kategori']); ?>
                <select class="form-select" name="article_category_id" id="article_category_id" required>
                    <?php $__currentLoopData = $article_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php if($category->id == (old('article_category_id') ?? $article->article_category_id ?? '')): echo 'selected'; endif; ?>>
                            <?php echo e($category->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
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
<?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\articles\form.blade.php ENDPATH**/ ?>