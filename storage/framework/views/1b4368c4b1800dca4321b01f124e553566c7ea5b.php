<?php $__env->startSection('content'); ?>
<table class="table table-striped">

    <tr>
        <th>Tournament</th>
        <th>Player ID</th>
        <th>Name with Initial or Team Name</th>
        <th>Game points</th>
        <!-- <th>Match points</th>
        <th>rank</th> -->
    </tr>
    <?php $__currentLoopData = $scores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <!-- <td>  <?php echo e($score->tournament_id); ?></td> -->
        <td> <?php echo e(optional($score->tournament)->name); ?></td>
        <td>  <?php echo e($score->player_id); ?></td>
        <td>  <?php echo e($score->namewithInitial); ?></td>
        <td>  <?php echo e($score->gamepoints); ?></td>
        <!-- <td>  <?php echo e($score->matchpoints); ?></td>
        <td>  <?php echo e($score->rank); ?></td> -->
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td>
    <form action= "<?php echo e(route('round.create')); ?>" method = "get">
        <input type ="Submit" value = "Do Next Round" />
    </form> 
    </td>
    <td>
    <form action= "<?php echo e(URL('clearScore')); ?>" method = "post">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Clear All" class="btn btn-sm btn-primary">
          </form>
    </td>
</tr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/score/index.blade.php ENDPATH**/ ?>