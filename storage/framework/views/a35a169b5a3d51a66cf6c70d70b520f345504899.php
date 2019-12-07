<?php $__env->startSection('content'); ?>
<table class="table table-striped">

    <tr>
        <th>Tournament ID</th>
        <th>Round ID</th>
        <th>Player ID</th>
        <th>Name with Initial</th>
        <th>Game points</th>
        <th>Match points</th>
        <th>rank</th>
    </tr>
    <?php $__currentLoopData = $scores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>  <?php echo e($score->tournament_id); ?></td>
        <td>  <?php echo e($score->round_id); ?></td>
        <td>  <?php echo e($score->player_id); ?></td>
        <td>  <?php echo e($score->namewithInitial); ?></td>
        <td>  <?php echo e($score->gamepoints); ?></td>
        <td>  <?php echo e($score->matchpoints); ?></td>
        <td>  <?php echo e($score->rank); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <br>
    <form action= "<?php echo e(URL('round')); ?>" method = "get">
        <input type ="Submit" value = "Do Next Round" />
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/score/index.blade.php ENDPATH**/ ?>