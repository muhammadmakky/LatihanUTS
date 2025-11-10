
<?php $__env->startSection('title', 'Popular'); ?>
<?php $__env->startSection('content'); ?>
    
    <h1 class="mb-5 text-dark fw-bold border-bottom pb-2">Popular Articles</h1>
    
    <?php $__currentLoopData = $popularPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="article-box">
            
            <div class="article-thumb">
                <p class="m-0">Image Placeholder</p>
                <small class="text-white-50 mt-1"><?php echo e($post->category->name); ?></small>
            </div>

            
            <div class="flex-grow-1">
                <h4 class="mb-1 text-dark fw-bold"><?php echo e($post->title); ?></h4>
                <small class="text-muted d-block mb-2">
                    <span class="fw-bold"><?php echo e($post->published_at->format('d M Y')); ?></span> by <?php echo e($post->writer->name); ?>

                </small>
                <p class="card-text mb-3 text-secondary"><?php echo e($post->excerpt); ?></p>
                <a href="<?php echo e(route('post.show', $post->slug)); ?>" class="read-more-btn float-end">read more...</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <div class="d-flex justify-content-center mt-5">
        <?php echo e($popularPosts->links('pagination::bootstrap-5')); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp_5c\Downloads\WebProgramming\resources\views/popular.blade.php ENDPATH**/ ?>