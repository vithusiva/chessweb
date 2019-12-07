<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <h3> Edit Player</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
    <form action="<?php echo e(route('player.update',$players->id)); ?>" method="post">
        <input type = "hidden" name = "_method" value = "put">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="form-group col-md-8">
                <label for="playername" class="col-form-label">Full Name</label>
                <input type="text"  name = "playername" id="playername" value="<?php echo e($players->playername); ?>" class="form-control">
            </div>
            <div class="form-group col-md-8">
                <label for="namewithInitial" class="col-form-label">Name with Initial</label>
                <input type="text" name = "namewithInitial" id="namewithInitial"   value="<?php echo e($players->namewithInitial); ?>" class="form-control">
            </div>
            <div class="form-group col-md-8" >
                <label class="col-form-label">Gender</label> &nbsp; &nbsp; &nbsp;
                <input type="radio"   name ="gender" value="Male"   value="<?php echo e($players->gender); ?>" checked> <label>Male</label>&nbsp;&nbsp;&nbsp;
                <input type="radio"   name ="gender" value="Female" value="<?php echo e($players->gender); ?>"> <label>Female</label>&nbsp;&nbsp;&nbsp;
            </div>
            <div class="form-group col-md-8">
                <label for="insitution" class="col-form-label">Insitution</label>
                <input type="text" name="insitution" id="insitution" value="<?php echo e($players->insitution); ?>" class="form-control">
            </div>         
            <div class="form-group col-md-8">
                <label for="dob" class="col-form-label">Date of Birth</label>
                <input type="date" name = "dob" id="dob" value="<?php echo e($players->dob); ?>" class="form-control">
            </div>
            <div class="col-md-6">
                <a href = "<?php echo e(route('player.index')); ?>" class="btn btn-sm btn-info">Back</a>
            </div>
            <div class="col-md-6">
                <input type = "submit" value ="Update Player">  
            </div>
            <div class="form-group col-md-8"></div>
    </form>
    </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/player/edit.blade.php ENDPATH**/ ?>