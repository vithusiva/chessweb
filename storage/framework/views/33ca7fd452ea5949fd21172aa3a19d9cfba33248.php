<?php $__env->startSection('content'); ?>

<table class="table table-striped">

    <tr>
        <th>Tournament ID</th>
        <th>Tournament Name</th>
        <th>Tournament Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Tiebreak</th>
        <th colspan="3">Actions</th>
    </tr>
    <?php $__currentLoopData = $tournament; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td> <?php echo e($tournament->id); ?> </td>
        <td> <?php echo e($tournament->name); ?> </td>
        <td> <?php echo e(optional($tournament->tournamentType)->typename); ?> </td>
        <td> <?php echo e($tournament->startDate); ?> </td>
        <td> <?php echo e($tournament->endDate); ?> </td>
        <td> <?php echo e(optional($tournament->tiebreak)->tiebreak_name); ?> </td>
      <td>
          <form action= "<?php echo e(route('tournament.destroy',$tournament->id)); ?>" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Delete" class="btn btn-sm btn-danger" >
          </form>
        </td>
        <td>
            <form action= "<?php echo e(route('tournament.edit',$tournament->id)); ?>" method = "get" >
            <?php echo e(csrf_field()); ?>

                <input type ="Submit" value = "Edit" class="btn btn-sm btn-success" >
            </form>
        </td>
        <td>
            <a href = "<?php echo e(route('tournament.show',$tournament->id)); ?>" class="btn btn-sm btn-primary">Show</a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <br><br>
        <form action= "<?php echo e(route('tournament.create')); ?>" method = "get">
            <?php echo e(csrf_field()); ?>

            <input  type ="Submit" value = "Add Tournament" />
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/tournament/index.blade.php ENDPATH**/ ?>