
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Web Dev 2025'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
    <style>
        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .article-card {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            transition: box-shadow 0.3s;
        }
        .article-card:hover {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #3b82f6;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn-danger {
            background-color: #ef4444;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn-warning {
            background-color: #f59e0b;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn-secondary {
            background-color: #6b7280;
            color: white;
        }
        .comment-card {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .alert {
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }
        .search-form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .search-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 16px;
        }
        .sort-select {
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            background-color: white;
        }
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }
        .badge {
            display: inline-block;
            padding: 4px 8px;
            background-color: #e5e7eb;
            border-radius: 4px;
            font-size: 12px;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <nav style="background-color: #1f2937; color: white; padding: 15px 0; margin-bottom: 30px;">
        <div class="container">
            <h1 style="font-size: 24px;">📝 Web Dev 2025</h1>
        </div>
    </nav>

    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</body>
</html>
<?php /**PATH C:\Users\Admin\Downloads\webdev afl2\resources\views\layouts\app.blade.php ENDPATH**/ ?>