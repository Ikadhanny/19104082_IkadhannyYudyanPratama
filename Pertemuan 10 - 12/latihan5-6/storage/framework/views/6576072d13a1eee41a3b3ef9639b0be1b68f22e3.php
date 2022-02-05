<?php $__env->startSection('content'); ?>

<?php
    $array  = [1,2,3,4,5];

    $nama = "Ikadhanny";

    $nilai = 90;
?>

    <h1>Beranda</h1>

    <br>

    <h1>Ini halaman beranda</h1>

    <?php echo "Halo dunia" ?>

    <p>
        <?php echo e("Halo Dunia"); ?>

    </p>

    <?php if (1+1 == 2) { ?>
        <p>
            <?php echo e("Halo Dunia"); ?>

        </p>
    <?php } ?>

    <?php if(1+1 == 2): ?>
        <p>
            <?php echo e("Halo Dunia"); ?>

        </p>
    <?php endif; ?>

    <hr>

    <h1>Perulangan</h1>

    <?php for($i = 0; $i < count($array); $i++) { ?>
        <p>
            <?php echo e($array[$i]); ?>

        </p>
    <?php } ?>

    <?php for($i = 0; $i < count($array); $i++): ?>
    <p>
        <?php echo e($array[$i]); ?>

    </p>
    <?php endfor; ?>

    <hr>

    <h1>Percabangan</h1>

    <?php if(1+1 == 3): ?>
        <p>
            <?php echo e("Jawabanya Benar"); ?>

        </p>
    <?php else: ?>
        <?php echo e("Jawabanya Salah"); ?>

    <?php endif; ?>

    <?php if($nama == "Ikadhanny"): ?>
        <p>
            <?php echo e("Nama saya Ikadhanny"); ?>

        </p>
    <?php elseif($nama == "Wilda"): ?>
        <p>
            <?php echo e("Nama saya Wilda"); ?>

        </p>
    <?php else: ?>
        <p>
            <?php echo e("Nama saya Tidak Diketahui"); ?>

        </p>
    <?php endif; ?>

    <hr>

    <h1>Percabangan Switch</h1>

    <?php switch($nilai):
        case (90): ?>
            <?php echo e("Nilai Anda A"); ?>

            <?php break; ?>

        <?php case (80): ?>
            <?php echo e("Nilai Anda B"); ?>

            <?php break; ?>

        <?php case (70): ?>
            <?php echo e("Nilai Anda C"); ?>

            <?php break; ?>

        <?php default: ?>
            <?php echo e("Nilai Anda D"); ?>


    <?php endswitch; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Documents\SEMESTER 5\DESAIN DAN PEMROGRAMAN WEB\Praktikum\19104082_IkadhannyYudyanPratama\latihan5-6\resources\views/beranda.blade.php ENDPATH**/ ?>