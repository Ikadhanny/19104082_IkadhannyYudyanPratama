<?php $__env->startSection('content'); ?>

<div class="Container">
    <div class="row">
        <div class="col-lg-12">
            <?php if(session('pesan')): ?>
            <div class="alert alert-success">
                <?php echo e(session('pesan')); ?>

            </div>
            <?php endif; ?>

            <a href="mahasiswa/create" class="btn btn-primary mb-2">Tambah</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            NIM
                        </td>
                        <td>
                            Name
                        </td>
                        <td>
                            Gender
                        </td>
                        <td>
                            Jurusan
                        </td>
                        <td>
                            Alamat
                        </td>
                        <td>
                            Aksi
                        </td>
                    </tr>

                    <?php
                        $no = 1
                    ?>

                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($no++); ?>

                            </td>
                            <td>
                                <?php echo e($s->nim); ?>

                            </td>
                            <td>
                                <?php echo e($s->name); ?>

                            </td>
                            <td>
                                <?php echo e($s->gender); ?>

                            </td>
                            <td>
                                <?php echo e($s->departement); ?>

                            </td>
                            <td>
                                <?php echo e($s->address); ?>

                            </td>
                            <td>
                                <a href="<?php echo e(url('/mahasiswa/'.$s->id.'/edit')); ?>" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(url('/mahasiswa/hapus/'.$s->id)); ?>" method="post" class="d-inline">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Documents\SEMESTER 5\DESAIN DAN PEMROGRAMAN WEB\Praktikum\19104082_IkadhannyYudyanPratama\latihan2\resources\views/Student.blade.php ENDPATH**/ ?>