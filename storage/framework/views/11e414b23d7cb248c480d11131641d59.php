
<?php $__env->startSection('title', 'Articles by ' . $writer->name); ?>
<?php $__env->startSection('content'); ?>
    
    
    <?php
        $image_file = 'default.jpg'; 

        if ($writer->slug == 'raka-putra-wicaksono') {
            $image_file = 'MenA.png';
        } elseif ($writer->slug == 'bia-mecca-annisa') {
            $image_file = 'WomenA.jpg';
        } elseif ($writer->slug == 'abi-firmansyah') {
            $image_file = 'MenB.jpg';
        }
    ?>
    
    
    <div class="d-flex align-items-center mb-5 p-3 bg-white rounded shadow-sm">
        <img src="<?php echo e(asset('img/writers/' . $image_file)); ?>" 
             alt="<?php echo e($writer->name); ?>" 
             style="width: 100px; height: 100px; object-fit: cover;"
             class="rounded-circle me-4 border border-3 border-success">
        <div>
            <h3 class="mb-0 fw-bold text-dark"><?php echo e($writer->name); ?></h3>
            <p class="text-primary fs-6"><?php echo e($writer->specialty); ?></p>
        </div>
    </div>

    <h2 class="mb-4">Artikel Ditulis Oleh <?php echo e($writer->name); ?></h2>

    
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp_5c\Downloads\WebProgramming\resources\views/detail_writer.blade.php ENDPATH**/ ?>