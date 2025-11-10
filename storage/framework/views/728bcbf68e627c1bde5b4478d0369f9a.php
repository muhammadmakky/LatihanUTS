
<?php $__env->startSection('title', $post->title); ?>
<?php $__env->startSection('content'); ?>
    
    <h1 class="display-5"><?php echo e($post->title); ?></h1> [cite: 23]
    <small class="text-muted mb-4 d-block">
        <?php echo e($post->published_at->format('d M Y')); ?> by: <?php echo e($post->writer->name); ?> [cite: 23]
    </small>
    
    <div class="content-body mt-4">
        
        <?php echo $post->body; ?> [cite: 23]
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp_5c\Downloads\WebProgramming\resources\views/detail.blade.php ENDPATH**/ ?>