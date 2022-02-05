<?php $__env->startSection('content'); ?>

    <div id="container">
        <div class="col-lg-6">
            <h1>Edit Mahasiswa</h1>
            <?php if(session('pesan')): ?>
            <div class="alert alert-success">
                <?php echo e(session('pesan')); ?>

            </div>
            <?php endif; ?>
            <form action="/mahasiswa/<?php echo e($student->id); ?>/edit" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" value="<?php echo e($student->nim); ?>" class="form-control" placeholder="NIM" name="nim" id="nim" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" value="<?php echo e($student->name); ?>" class="form-control" placeholder="Nama" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" class="form-control" required id="">
                        <option value="#" selected>Pilih Jenis Kelamin</option>

                        <option selected value="<?php echo e($student->gender); ?>">
                            <?php echo e($student->gender); ?>

                        </option>

                        <?php $__currentLoopData = $gender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($g); ?>">
                                <?php echo e($g); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="departement">Jurusan</label>
                    <select name="departement" class="form-control" required id="">
                        <option value="#" selected>Pilih Jurusan</option>

                        <option selected value="<?php echo e($student->departement); ?>">
                            <?php echo e($student->departement); ?>

                        </option>

                        <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($d); ?>">
                                <?php echo e($d); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" value="<?php echo e($student->address); ?>" class="form-control" placeholder="Alamat" name="address" id="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Documents\SEMESTER 5\DESAIN DAN PEMROGRAMAN WEB\Praktikum\19104082_IkadhannyYudyanPratama\latihan5-6\resources\views/studentEdit.blade.php ENDPATH**/ ?>