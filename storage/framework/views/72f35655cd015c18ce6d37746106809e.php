
<?php $__env->startSection('title','Menu Mahasiswa'); ?>
<?php $__env->startSection('menuMahasiswa','disabled'); ?>

<?php $__env->startSection('konten'); ?>
<div class="row">
    
    <div class="col-8 ">
        
        <p>Ini adalah view mahasiswa</p>

        <a href="<?php echo e(route('admin.dosen')); ?>">Link Dosen</a>

        <h1>Daftar Mahasiswa</h1>
        <h2>Nilai : <?php echo e($nilai); ?></h2>
        <?php if($nilai > 65): ?>
            
            <div class="alert alert-success" role="alert">
                Selamat anda lulus !
            </div>
        <?php else: ?>
            
            <div class="alert alert-danger" role="alert">
                Mohon maaf belum bisa lulus, silahkan coba lagi !
            </div>
        <?php endif; ?>


        <ol>

            <?php
                foreach ($mahasiswa as $index => $mhs) {
                    echo "<li>$mhs - $jurusan[$index]</li>";
                }
            ?>

            <li><?php echo $mahasiswa[0]." - ".$jurusan[0] ?></li>
            <li><?php echo $mahasiswa[1]." - ".$jurusan[1] ?></li>
            <li><?php echo $mahasiswa[2]." - ".$jurusan[2] ?></li>
        </ol>
    </div>
    <div class="col-4 ">
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp_5c\Downloads\WebProgramming\resources\views/universitas/mahasiswa.blade.php ENDPATH**/ ?>