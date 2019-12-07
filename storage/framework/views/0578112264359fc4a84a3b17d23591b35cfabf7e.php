<?php $__env->startSection('content'); ?>

<div class="container my-5">
    <h3> Edit Tournament</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
           
    <form action="<?php echo e(route('tournament.update',$tournament->id)); ?>" method="post">
        <input type = "hidden" name = "_method" value = "put">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="form-group col-md-8">
                <label for="name" class="col-form-label">Tournament Name</label>
                <input type="text"  name = "name" id="name" value="<?php echo e($tournament->name); ?>" class="form-control">
            </div>
            <div class="form-group col-md-8">
                <label for="type" class="col-form-label">Tournament Type</label>
                <select field="type" class="form-control" name = "type" id="type" required>
                    <?php $__currentLoopData = $tournamenttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournamenttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tournamenttype->id); ?>"><?php echo e($tournamenttype->typename); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="rounds" class="col-form-label">Rounds</label>
                <input type="text" name = "rounds" id="rounds"  value="<?php echo e($tournament->rounds); ?>" class="form-control" readonly = "readonly">
            </div>
            
            <div class="form-group col-md-8">
                <label for="startDate" class="col-form-label">Start Date</label>
                <input type="date" name="startDate" id="startDate" value="<?php echo e($tournament->startDate); ?>" class="form-control <?php echo e($errors->has('startDate') ? 'is-invalid' : ''); ?>">
                <?php if($errors->has('startDate')): ?>
                    <span class="has-error"><?php echo e($errors->first('startDate')); ?></span>
                <?php endif; ?>
            </div>
                        
            <div class="form-group col-md-8">
                <label for="endDate" class="col-form-label">End Date</label>
                <input type="date" name = "endDate" id="endDate" value="<?php echo e($tournament->endDate); ?>" class="form-control">
            </div>
            <div class="form-group col-md-8">
                <label for="tiebreak_id" class="col-form-label">Tiebreak</label>
                <select field="tiebreak_id" class="form-control" name = "tiebreak_id" id="tiebreak_id">
                    <?php $__currentLoopData = $tiebreaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiebreak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tiebreak->tiebreak_id); ?>"><?php echo e($tiebreak->tiebreakname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-6">
                <a href = "<?php echo e(route('tournament.index')); ?>" class="btn btn-sm btn-info">Back</a>
            </div>
            <div class="col-md-6">
                <input type = "submit" value ="Update Tournament">
            </div>
            <div class="form-group col-md-8"></div>
    </form>
    </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/tournament/edit.blade.php ENDPATH**/ ?>