
<?php $__env->startSection('title', 'Our Writers'); ?>
<?php $__env->startSection('content'); ?>
    
    <h1 class="mb-5 text-dark fw-bold border-bottom pb-2">Our Writers:</h1>
    
    <div class="row text-center">
        <?php $__currentLoopData = $writers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $writer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-5">
                <a href="<?php echo e(route('writer.show', $writer->slug)); ?>" class="text-decoration-none text-dark">
                    
                    
                    <?php
                        // Inisialisasi variabel nama file
                        $image_file = 'default.jpg'; 

                        // Menentukan nama file berdasarkan slug penulis
                        if ($writer->slug == 'raka-putra-wicaksono') {
                            $image_file = 'MenA.png';
                        } elseif ($writer->slug == 'bia-mecca-annisa') {
                            $image_file = 'WomenA.jpg';
                        } elseif ($writer->slug == 'abi-firmansyah') {
                            $image_file = 'MenB.jpg';
                        }
                    ?>

                    <img src="<?php echo e(asset('img/writers/' . $image_file)); ?>" 
                         alt="<?php echo e($writer->name); ?>" 
                         class="writer-circle mx-auto d-block mb-3">
                    
                    <h5 class="mb-1 fw-bold"><?php echo e($writer->name); ?></h5>
                    <p class="text-primary"><?php echo e($writer->specialty); ?></p>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp_5c\Downloads\WebProgramming\resources\views/writers.blade.php ENDPATH**/ ?>