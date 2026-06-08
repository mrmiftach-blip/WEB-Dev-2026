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
        <a class="btn btn-success" href="<?php echo e(route('article_category.create')); ?>">Tambah kategori</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th style="width:50px"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('article_category.edit', ['id' => $category->id])); ?>" class="btn btn-info">Ubah</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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
<?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\article_category\list.blade.php ENDPATH**/ ?>