<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <h3>Add Tournament</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="<?php echo e(route('tournament.store')); ?>" method="POST" class="was-validated">
                <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="name" class="col-form-label">Tournament Name</label>
                            <input type="text" field = "name" class="form-control" name = "name" id="name" placeholder="Tournament name" required>
                            <span if="fields.hasErrors('name')" errors="name" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="type" class="col-form-label">Tournament Type</label>
                            <select field="type" class="form-control" name = "type" id="type" required>
                                <?php $__currentLoopData = $tournamenttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournamenttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tournamenttype->id); ?>"><?php echo e($tournamenttype->typename); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span if="fields.hasErrors('type')" errors="type" class="text-danger"></span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="startDate" class="col-form-label">Start Date</label>
                            <input type="date" field = "startDate" name="startDate" id="startDate"  class="form-control" required>
                            <span if="fields.hasErrors('startDate')" errors="startDate" class="text-danger"></span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="endDate" class="col-form-label">End Date</label>
                            <input type="date" field ="endDate" name = "endDate" id="endDate" class="form-control" required>
                            <span if="fields.hasErrors('endDate')" errors="endDate" class="text-danger"></span>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="tiebreak_id" class="col-form-label">Tiebreak</label>
                            <select field="tiebreak_id" class="form-control" name = "tiebreak_id" id="tiebreak_id" required>
                                <?php $__currentLoopData = $tiebreaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiebreak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tiebreak->id); ?>"><?php echo e($tiebreak->tiebreakname); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span if="fields.hasErrors('tiebreak_id')" errors="tiebreak_id" class="text-danger"></span>
                        </div>
                        <div class="col-md-6">
                            <input type = "submit" value ="Add Tournament">
                        </div>

                        <div class="form-group col-md-8"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/tournament/create.blade.php ENDPATH**/ ?>