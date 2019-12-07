<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>


<table class="table display responsive nowrap dataTable no-footer dtr-inline">

    <tr>
        <th>PlayerID</th>
        <th>Full Name</th>
        <th>Name with Initial</th>
        <th>Gender</th>
        <th>Insitution</th>
        <th>Date of Birth</th>
        <th>TournamentID</th>
        <th>Actions</th>
    </tr>
    <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>  <?php echo e($player->id); ?></td>
        <td>  <?php echo e($player->playername); ?></td>
        <td>  <?php echo e($player->namewithInitial); ?></td>
        <td>  <?php echo e($player->gender); ?></td>
        <td>  <?php echo e($player->insitution); ?></td>
        <td>  <?php echo e($player->dob); ?></td>
        <td>  <?php echo e($player->tournament_id); ?></td>
        <td>
        <form action= "<?php echo e(route('player.destroy',$player->id)); ?>" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Delete" >
          </form>
        </td>
        <td>
            <form action= "<?php echo e(route('player.edit',$player->id)); ?>" method = "get" >
            <?php echo e(csrf_field()); ?>

                <input type ="Submit" value = "Edit" >
            </form>
        </td>
        <td>
            <a href = "<?php echo e(route('player.show',$player->id)); ?>" class="btn">Show</a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>
            <form action= "<?php echo e(route('player.create')); ?>" method = "get">
                <input type ="Submit" value = "Add Player" />
            </form>
        </td>
        <!-- <td>
            <form action= "<?php echo e(URL('male')); ?>" method = "get">
                <input type ="Submit" value = "Male" />
            </form>
        </td>
        <td>
            <form action= "<?php echo e(URL('female')); ?>" method = "get">
                <input type ="Submit" value = "Female" />
            </form>
        </td> -->
        </tr>
    </table>
    <br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/player/index.blade.php ENDPATH**/ ?>