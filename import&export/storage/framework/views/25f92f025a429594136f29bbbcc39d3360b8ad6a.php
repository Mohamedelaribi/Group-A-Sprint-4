<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 9 Import Export Excel & CSV File</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Laravel 9 Import Export Excel & CSV File - <a href="https://techvblogs.com/blog/laravel-9-import-export-excel-csv-file" target="_blank">TechvBlogs</a>
        </h2>
        <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import Users</button>
            <a class="btn btn-success" href="<?php echo e(route('export-users')); ?>">Export Users</a>
        </form>
    </div>
</body>

</html><?php /**PATH C:\Users\Garfield\project6\resources\views/importFile.blade.php ENDPATH**/ ?>