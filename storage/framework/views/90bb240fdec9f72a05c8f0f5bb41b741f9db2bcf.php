<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<table class="table table-striped">
    <tr>
        <th class="wd-15p ">PlayerID</th>
        <th class="wd-15p ">Full Name</th>
        <th class="wd-15p ">Name with Initial or Team Name</th>
        <th class="wd-15p ">Gender</th>
        <th class="wd-15p ">Insitution</th>
        <th class="wd-15p ">Date of Birth</th>
        <th class="wd-15p ">Tournament Name</th>
        <th colspan="3">Actions</th>
    </tr>

    <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>  <?php echo e($player->id); ?></td>
        <td>  <?php echo e($player->playername); ?></td>
        <td>  <?php echo e($player->namewithInitial); ?></td>
        <td>  <?php echo e($player->gender); ?></td>
        <td>  <?php echo e($player->insitution); ?></td>
        <td>  <?php echo e($player->dob); ?></td>
        <td>  <?php echo e(optional($player->tournament)->name); ?></td>
        <td>
        <form action= "<?php echo e(route('player.destroy',$player->id)); ?>" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Delete" class="btn btn-sm btn-danger">
          </form>
        </td>
        <td>
            <form action= "<?php echo e(route('player.edit',$player->id)); ?>" method = "get" >
            <?php echo e(csrf_field()); ?>

                <input type ="Submit" value = "Edit"  class="btn btn-sm btn-success">
            </form>
        </td>
        <td>
            <a href = "<?php echo e(route('player.show',$player->id)); ?>" class="btn btn-sm btn-primary">Show</a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>
            <form action= "<?php echo e(route('player.create')); ?>" method = "get">
                <input type ="Submit" value = "Add Player" />
            </form>
        </td>
        </tr>
    </table>
    <br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/player/index.blade.php ENDPATH**/ ?>