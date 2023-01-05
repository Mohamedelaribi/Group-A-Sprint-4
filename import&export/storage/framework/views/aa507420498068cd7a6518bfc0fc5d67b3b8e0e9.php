<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
         
       <div class="w-1 mx-auto flex justify-end mr-8">
        <select class=" changeLang">
            <option value="en" <?php echo e(session()->get('locale') == 'en' ? 'selected' : ''); ?>>English</option>
            <option value="fr" <?php echo e(session()->get('locale') == 'fr' ? 'selected' : ''); ?>>France</option>
            <option value="sp" <?php echo e(session()->get('locale') == 'sp' ? 'selected' : ''); ?>>Spanish</option>
        </select>
    </div>
<h1><?php echo e(__('messages.title')); ?></h1>

</div>
<script type="text/javascript">

let url = "<?php echo e(route('changeLang')); ?>";

$(".changeLang").change(function(){
    console.log(url + "?lang="+ $(this).val());
    window.location.href = url + "?lang="+ $(this).val();
});

</script>


    <form class="w-40 mx-auto mt-8"  method="POST" action=<?php echo e(url("/TuTorStore")); ?>>
        <?php echo csrf_field(); ?>
        <div class="mb-6">
            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo e(__('messages.firstname')); ?></label>
            <input name="firstname" type="text" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
          </div>
          <div class="mb-6">
            <label for="lasttname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo e(__('messages.lastname')); ?></label>
            <input name="lastname" type="text" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
          </div>
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo e(__('messages.email')); ?></label>
          <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
          <label for="imgURL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><?php echo e(__('messages.imgURL')); ?></label>
          <input name="imgURL" type="text" id="imgURL" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
       
        <button type="submit" class="text-white bg-gray-300 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><?php echo e(__('messages.submitButton')); ?></button>
      </form>
      
  
</body>
</html><?php /**PATH C:\Users\Garfield\project6\resources\views/addTutor.blade.php ENDPATH**/ ?>