<?php $__env->startSection('content'); ?>
<table class="table table-striped">

<tr>
    <th>Tournament Name</th>
    <th>Round Level</th>
    <th>Player ID</th>
    <th>Player Name</th>
    <th>Player Score</th>
    <th>Opponent ID</th>
    <th>Opponent Name</th>
    <th>Opponent Score</th>
</tr>

<?php $__currentLoopData = $roundresults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roundresult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td>  <?php echo e($roundresult->tournament->name); ?> </td>
    <td> <?php echo e(optional($roundresult->roundLevel)->roundNo); ?></td>
    <td>  <?php echo e($roundresult->playerid); ?></td>
    <td>  <?php echo e($roundresult->playername); ?></td>
    <td>  <?php echo e($roundresult->playerscore); ?></td>
    <td>  <?php echo e($roundresult->opponentid); ?></td>
    <td>  <?php echo e($roundresult->opponentname); ?></td>
    <td>  <?php echo e($roundresult->opponentscore); ?></td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<div>
        <form action= "<?php echo e(URL('clearRoundResult')); ?>" method = "post">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Clear All" class="btn btn-sm btn-primary">
          </form>
        
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/roundresult/index.blade.php ENDPATH**/ ?>