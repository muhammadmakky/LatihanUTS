

<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class ="col-12">
        <table class="table"> 
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Body</th>
                <th>Comment</th>
                <th>Action</th>
            </tr>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr> 
                <td><?php echo e(($index + 1)); ?></td> 
                <td><?php echo e($p->title); ?></td> 
                <td><?php echo e($p->body); ?></td> 
                <td>
                    <ul>
                        <?php $__currentLoopData = $p->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($c->body); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </td>
                <td>
                    <a class="btn btn-primary" href="<?php echo e(route('post.show', $id=$p->id)); ?>">Detail</a>
                    <a class="btn btn-danger" href="<?php echo e(route('post.delete', $id=$p->id)); ?>">Delete</a>
                <td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp_5c\Downloads\WebProgramming\resources\views/post/index.blade.php ENDPATH**/ ?>