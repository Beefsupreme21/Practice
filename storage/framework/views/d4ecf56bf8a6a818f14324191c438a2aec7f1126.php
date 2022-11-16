<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="justify-center min-h-screen bg-gray-100 dark:bg-gray-900 text-white p-8">
            <div class="bg-gray-800 p-4 mb-4 rounded-lg min-h-[50px]">
                <div>collectionAll</div>
                <p>[1, 2, 3, 4, 5]</p>
            </div>
            <div class="bg-gray-800 p-4 mb-4 rounded-lg min-h-[50px]">
                <p>collectionAverage</p>
                <?php echo e($collectionAverage); ?>

            </div>
            <div class="bg-gray-800 p-4 mb-4 rounded-lg min-h-[50px]">
                <p>collectionChunk</p>
                <?php echo e($collectionChunk); ?>

            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\Projects\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>