<div <?php echo e($attributes->merge(['class' => 'mb-3'])->filter(fn ($value, $key) => !in_array($key, ['for', 'label']))); ?>>
    <label for="<?php echo e($for); ?>" class="form-label"><?php echo e($label); ?></label>
    <?php echo e($slot); ?>

</div>
<?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\components\form\group.blade.php ENDPATH**/ ?>