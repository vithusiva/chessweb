<?php $__env->startSection('content'); ?>
<table class="table table-striped">

    <tr>
        <th>Round ID</th>
        <th>Tournament ID</th>
        <th>Gender</th>
        <th>Date</th>
    </tr>
    <?php $__currentLoopData = $rounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $round): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>  <?php echo e($round->id); ?></td>
        <td>  <?php echo e($round->tournament->name); ?></td>
        <td>  <?php echo e($round->gender); ?></td>
        <td>  <?php echo e($round->date); ?></td>
        <td>
            <a href="<?php echo e(url('pair')); ?>?id=<?php echo e($round->id); ?>" class="btn">Add Score</a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td>
        <form action= "<?php echo e(route('round.create')); ?>" method = "get">
            <input type ="Submit" value = "Add Round" />
        </form>
    </td>
    </tr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/round/index.blade.php ENDPATH**/ ?>