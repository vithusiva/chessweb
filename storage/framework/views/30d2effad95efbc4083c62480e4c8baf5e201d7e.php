<?php $__env->startSection('content'); ?>
<body>
<form action="<?php echo e(route('player.show',$players->id)); ?>"></form>
<div class="container my-2">
    <div class="card">
        <div class="card-body">
            <div class="container my-2">
                <div class="col-md-15">
                        <table class="table table-striped table-responsive-md">
                            <tr>
                                <th>Player ID</th>
                                <th>Name with Initial</th>
                                <th>Full Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Insitution</th>
                                <th>Tournament ID</th>
                            </tr>
                           
                            <tr>
                                <td> <?php echo e($players->id); ?> </td>
                                <td> <?php echo e($players->namewithInitial); ?> </td>
                                <td> <?php echo e($players->playername); ?> </td>
                                <td> <?php echo e($players->dob); ?> </td>
                                <td> <?php echo e($players->gender); ?> </td>
                                <td> <?php echo e($players->insitution); ?> </td>
                                <td> <?php echo e($players->tournament_id); ?> </td>
                            </tr>
                           
                        </table>
                </div>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/player/show.blade.php ENDPATH**/ ?>