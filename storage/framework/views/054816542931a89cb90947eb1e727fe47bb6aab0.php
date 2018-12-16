<?php $__env->startSection('msg'); ?>

    <b>Category '<?php echo e($my_new_category); ?>' added</b>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.categories.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>