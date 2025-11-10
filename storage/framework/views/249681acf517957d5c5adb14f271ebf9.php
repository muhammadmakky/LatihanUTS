<div class="row">
    
    <div class="col-12 ">
        <img width="70px" height="50px" src="<?php echo e(asset('img/logobootstrap.png')); ?>" alt="Gambar logo">
    </div>
</div>
<div class="row">
    
    <div class="col-12 ">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menuMahasiswa'); ?>" aria-current="page" href="<?php echo e(route('admin.mahasiswa', $a=87)); ?>">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('menuDosen'); ?>" href="<?php echo e(route('admin.dosen')); ?>">Dosen</a>
                    </li>
                   
                </ul>
                </div>
            </div>
        </nav>
    </div>
</div><?php /**PATH C:\Users\hp_5c\Downloads\WebProgramming\resources\views/layout/header.blade.php ENDPATH**/ ?>