
    <form method="POST" action="<?php echo e(route('admin.store')); ?>">
        <?php echo e(csrf_field()); ?>

        <input type="text" name="category_name" placeholder="Select category name" autofocus>
        <button type="submit" class="">SEND</button>
    </form>

    <?php echo $__env->yieldContent('msg'); ?>


















