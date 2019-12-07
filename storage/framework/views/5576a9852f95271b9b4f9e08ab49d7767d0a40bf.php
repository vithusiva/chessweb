<?php $__env->startSection('content'); ?>
<table class="table table-striped">

    <tr>
        <th>Tournament ID</th>
        <th>Round ID</th>
        <th>Player ID</th>
        <th>Player Name</th>
        <th>Player Score</th>
        <th>Opponent ID</th>
        <th>Opponent Name</th>
        <th>Opponent Score</th>
    </tr>
    <?php $__currentLoopData = $roundresults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roundresult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>  <?php echo e($roundresult->tournament_id); ?></td>
        <td>  <?php echo e($roundresult->round_id); ?></td>
        <td>  <?php echo e($roundresult->playerid); ?></td>
        <td>  <?php echo e($roundresult->playername); ?></td>
        <td>  <?php echo e($roundresult->playerscore); ?></td>
        <td>  <?php echo e($roundresult->opponentid); ?></td>
        <td>  <?php echo e($roundresult->opponentname); ?></td>
        <td>  <?php echo e($roundresult->opponentscore); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/roundresult/index.blade.php ENDPATH**/ ?>