<?php $__env->startSection('content'); ?>
<table class="table table-striped">

    <tr>
        
        <th>Round Level</th>
        <th>Tournament Name</th>
        <th>Gender</th>
        <th>Date</th>
    </tr>
    <?php $__currentLoopData = $rounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $round): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        
        <td>  <?php echo e($round->roundNo); ?></td>
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
    <td>
        <form action= "<?php echo e(URL('clearRound')); ?>" method = "post">
            <?php echo e(csrf_field()); ?>

            <input type ="Submit" value = "Clear All" class="btn btn-sm btn-primary">
          </form>
        </td>
    </tr>
    <div>
        
        </div>
<?php if($errors->any()): ?>
    <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Warning!</h4>
    <p>You should enter the results for the existing round.</p>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/round/index.blade.php ENDPATH**/ ?>