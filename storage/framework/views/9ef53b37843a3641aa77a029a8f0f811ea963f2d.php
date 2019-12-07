<?php $__env->startSection('content'); ?>

<div class="container my-5">
<?php if($errors->any()): ?>
<h4><?php echo e($errors->first()); ?></h4>
<?php endif; ?>
    <h3> Add Round</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="<?php echo e(route('round.store')); ?>" method="POST" class="was-validated">
                <?php echo e(csrf_field()); ?>

                    <div class="row">
                    <div class="form-group col-md-8">
                            <label for="tournament_id" class="col-form-label">Tournament ID</label>
                            <select field="tournament_id" class="form-control" name = "tournament_id" id="tournament_id" required>
                                <?php $__currentLoopData = $tournaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tournament->id); ?>"><?php echo e($tournament->name); ?> | <?php echo e($tournament->type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span if="fields.hasErrors('tournament_id')" errors="tournament_id" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-8" >
                            <label class="col-form-label">Gender</label> &nbsp; &nbsp; &nbsp;
                            <input type="radio"   name ="gender" id="Male" value="Male" required> <label>Male</label>&nbsp;&nbsp;&nbsp;
                            <input type="radio"   name ="gender" id="Female" value="Female" required> <label>Female</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group col-md-8">
                            <label for="date" class="col-form-label" required>Date</label>
                            <input type="date" field = "date" name="date" id="date"  class="form-control" required>
                            <span if="fields.hasErrors('date')" errors="date" class="text-danger"></span>
                        </div>
                        <div class="col-md-6">
                            <input type = "submit" value ="Add Round">
                        </div>

                        <div class="form-group col-md-8"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/round/create.blade.php ENDPATH**/ ?>